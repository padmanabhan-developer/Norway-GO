<?php
namespace AKlump\LoftDataGrids;

/*
 * Class ExportData
 */
class ExportData implements ExportDataInterface {

  protected $data = array();
  protected $keys = array();
  protected $current_pointers = array();
  protected $current_page = 0;
  protected $locations = array();

  /**
   * Constructor
   *
   * @param mixed $page_id
   *   (Optional) Defaults to 0.
   */
  public function __construct($page_id = 0) {
    $this->setPage($page_id);
  }

  public function setLocations($locations) {
    foreach ($locations as $location_id => $data) {
      $data = array_intersect_key($data, array_flip(array('page', 'pointers')));
      $this->locations[$location_id] = $data;
    }
  }

  public function getLocations() {
    $data = $this->locations;
    $default = (array) array_fill_keys($this->getAllPageIds(), 0) + array(0);
    foreach (array_keys($data) as $location_id) {
      $a = &$data[$location_id];
      if (!isset($a['page'])) {
        $a['page'] = 0;
      }
      if (!isset($a['pointers'])) {
        $a['pointers'] = array();
      }
      $a['pointers'] += $default;
    }

    return $data;
  }

  public function storeLocation($location_id) {
    $this->locations[$location_id] = array(
      'page'      => (int) $this->current_page,
      'pointers'   => $this->current_pointers,
    );

    return $this;
  }

  public function gotoLocation($location_id) {
    if (isset($this->locations[$location_id])) {
      $this->current_page     = ($page = $this->locations[$location_id]['page']);
      $this->current_pointers = $this->locations[$location_id]['pointers'];
    }

    return $this;
  }

  public function setKeys($key) {
    if (is_array($key)) {
      $this->keys[$this->current_page] = $key;
    }
    else {
      $this->keys[$this->current_page] = func_get_args();
    }

    // If we have data then we need to go through and modify the order
    if (!empty($this->data[$this->current_page])) {
      foreach ($this->data[$this->current_page] as $row => $data) {
        $new_row = array();
        foreach ($this->keys[$this->current_page] as $key) {
          if (array_key_exists($key, $data)) {
            $new_row[$key] = $data[$key];
          }
        }
        $new_row += $data;
        $this->data[$this->current_page][$row] = $new_row;
      }
    }

    return $this;
  }

  public function getKeys($page_id = NULL) {
    if ($page_id === NULL) {
      $page_id = $this->current_page;
    }
    $keys = array();
    foreach ($this->data[$page_id] as $row) {
      $keys += $row;
    }
    $keys = array_keys($keys);
    $this->setKeys($keys);

    return $keys;
  }

  /**
   * Return the current record pointer for the current page
   */
  public function getPointer() {
    if (!isset($this->current_pointers[$this->current_page])) {
      $this->current_pointers[$this->current_page] = 0;
    }

    return $this->current_pointers[$this->current_page];
  }

  public function add($key, $value) {
    $page = $this->current_page;
    if (empty($this->current_pointers[$page])) {
      $this->current_pointers[$page] = 0;
    }
    $row = $this->current_pointers[$page];

    if (!array_key_exists($page, $this->keys)) {
      $this->keys[$page] = array();
    }

    if (empty($this->data[$page][$row])) {
      $this->data[$page][$row] = array_fill_keys($this->keys[$page], NULL);
    }
    $this->data[$page][$row][$key] = $value;

    return $this;
  }

  public function next() {
    $return = $this->getPointer();
    $this->current_pointers[$this->current_page] = $return + 1;

    return $return;
  }

  public function setPointer($index = NULL) {
    if ($index === NULL) {
      $index = count($this->data[$this->current_page]);
    }
    $this->current_pointers[$this->current_page] = $index;

    return $this;
  }

  public function setPage($page_id) {
    $this->current_page = $page_id;

    return $this;
  }

  public function getCurrentPageId() {
    return $this->current_page;
  }

  public function getAllPageIds() {
    $ids = array_keys($this->get());
    if (!in_array($this->current_page, $ids)) {
      $ids[] = $this->current_page;
    }

    return (array) $ids;
  }

  public function setPageOrder($page_id) {
    $page_ids = func_get_args();
    $temp = array();
    foreach ($page_ids as $page_id) {
      $temp[$page_id] = isset($this->data[$page_id]) ? $this->data[$page_id] : array();
    }
    $temp += $this->data;
    $this->data = $temp;

    return $this;
  }

  public function get() {
    return $this->data;
  }

  public function getCurrent($key = NULL) {
    $current_pointer = $this->getPointer();
    $data = isset($this->data[$this->current_page][$current_pointer])
    ? $this->data[$this->current_page][$current_pointer]
    : array();
    if ($key === NULL) {
      return $data;
    }

    return array_key_exists($key, $data) ? $data[$key] : NULL;
  }

  public function deletePage($page_id) {
    unset($this->data[$page_id]);
    unset($this->keys[$page_id]);
    unset($this->current_pointers[$page_id]);

    // Reset the current page if it was on the deleted page
    if ($this->current_page == $page_id) {
      $this->current_page = reset($this->getAllPageIds());
    }

    // Remove locations pointing to it
    foreach ($this->locations as $location_id => $stored) {
      if ($stored['page'] == $page_id) {
        unset($this->locations[$location_id]);
      }
      unset($this->locations[$location_id]['pointers'][$page_id]);
    }

    return $this;
  }

  public function getPage($page_id) {
    return isset($this->data[$page_id]) ? $this->data[$page_id] : array();
  }

  public function getPageData($page_id) {
    $clone = clone $this;
    foreach ($clone->getAllPageIds() as $page_id) {
      $clone->deletePage($page_id);
    }
    
    return $clone;
  }

  public function normalize($empty_value) {
    foreach (array_keys($this->data) as $page_id) {
      $columns = $this->getKeys($page_id);

      // Now go through and add all columns
      $column_order = array();
      foreach ($this->data[$page_id] as $key => $row) {

        if (is_array($empty_value)) {
          if (array_key_exists($key, $empty_value)) {
            $empty = $empty_value[$key];
          }
          elseif (array_key_exists('default', $empty_value)) {
            $empty = $empty_value['default'];
          }
          else {
            $empty = NULL;
          }
        }
        else {
          $empty = $empty_value;
        }

        $this->data[$page_id][$key] += array_fill_keys($columns, $empty);

        // Assure the same column order for all rows
        if (empty($column_order)) {
          $column_order = array_keys($this->data[$page_id][$key]);
        }
        $ordered = array();
        foreach ($column_order as $col_key) {
          $ordered[$col_key] = $this->data[$page_id][$key][$col_key];
        }
        $this->data[$page_id][$key] = $ordered;
      }
    }

    return $this;
  }

  //@todo write a test for merge
  public function merge(ExportDataInterface $data, $empty_value) {

    // Normalize columns on incoming
    $this->normalize($empty_value);
    $data->normalize($empty_value);

    foreach (array_keys($this->data) as $page_id) {
      foreach ($this->data[$page_id] as $key => $row) {
        $this->data[$page_id][$key] += $row;
      }
    }

    // Normalize result
    $this->normalize($empty_value);

    return $this;
  }

  public function find($needle, $key = NULL, $results = 1, $direction = 0) {
    $result_set = array();
    $haystack = $this->getPage($this->current_page);
    if ($direction == 1) {
      $haystack = array_reverse($haystack, TRUE);
    }
    foreach ($haystack as $pointer => $row) {
      $set = $row;
      if ($key !== NULL) {
        $set = array($key => $row[$key]);
      }
      if ($found = array_intersect($set, array($needle))) {
        $result_set[$pointer] = $found;
      }
      if ($results && count($result_set) === $results) {
        break;
      }
    }

    return $result_set;
  }
}
