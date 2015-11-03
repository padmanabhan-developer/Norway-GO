<?php




function cua_menu_tree__user_menu(&$variables) {
 $user_data = user_load($GLOBALS['user']->uid);
     $output = '';
     $output = str_replace('Edit</a></li>', 'MIN PROFIL</a></li>', $variables['tree']);       
 if ($user_data->field_har_taget_introtur['und'][0][value] == 1) {
   $removeword = '<li class="leaf"><a href="/introtur" title="">INTROTUR</a></li>';
 $output = str_replace($removeword, '', $output);
 }             
 
   
    return '<ul class="nav">' . $output . '</ul>';
}



function cua_form_alter( &$form, &$form_state,$form_id ){

      $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (false !== strpos($url,'/node/add/tur')) {
global $user;

if (in_array('aktivitetsmedarbejder', $user->roles)) {
$user_data = user_load($GLOBALS['user']->uid);

  $form['field_kommunetesttax']['und']['#default_value'][0]  = $user_data->field_kommunetesttax['und'][0]['tid'];
  }
  
if (in_array('frivillig', $user->roles)) {
$user_data = user_load($GLOBALS['user']->uid);
$form['field_kommunetesttax']['und']['#default_value'][0]  = $user_data->field_kommunetesttax['und'][0]['tid'];

    }  
}

if (false !== strpos($url,'/node/add/beboer')) {
global $user;

if (in_array('aktivitetsmedarbejder', $user->roles)) {
$user_data = user_load($GLOBALS['user']->uid);

  $form['field_kommunetesttax']['und']['#default_value'][0]  = $user_data->field_kommunetesttax['und'][0]['tid'];
  }
  
if (in_array('frivillig', $user->roles)) {
$user_data = user_load($GLOBALS['user']->uid);
$form['field_kommunetesttax']['und']['#default_value'][0]  = $user_data->field_kommunetesttax['und'][0]['tid'];

    }  
}

if (false !== strpos($url,'/node/add/medarbejder')) {
global $user;

if (in_array('aktivitetsmedarbejder', $user->roles)) {
$user_data = user_load($GLOBALS['user']->uid);

  $form['field_kommunetesttax']['und']['#default_value'][0]  = $user_data->field_kommunetesttax['und'][0]['tid'];
  }
  
if (in_array('frivillig', $user->roles)) {
$user_data = user_load($GLOBALS['user']->uid);
$form['field_kommunetesttax']['und']['#default_value'][0]  = $user_data->field_kommunetesttax['und'][0]['tid'];

    }  
}

///node/add/beboer

//  print $form['field_kommunetesttax']['und'][0]['tid']['#default_value'];
    
    //  $form['field_kommunetesttax']['und'][0]['tid']['#default_value'] = '21';
   
  // print $form['field_kommunetesttax']['und'][0]['tid']['#default_value'];
   
 //print $form['field_kommunetesttax']['und'][0]['#default_value'];
  // 
   
  //   
 // Array ( [0] => 1 ) 1
// $form['field_kommunetesttax']['und']['#default_value'] = array('21' => 'Aarhus');
 //print_r($form['field_kommunetesttax']['und']); 
  // print_r($form['field_testlokation']['und']); 
 
//  if($form_id == 'custom_node_type_node_form') {
//    if(is_numeric(arg(3))) {
        // automatically set the default value on the taxonomy terms for that node form
//        $form['taxonomy'][4]["#default_value"][0] = arg(3);    
//    }
//    }
 
 
}

