<?php




function cua_menu_tree__user_menu(&$variables) {
 $user_data = user_load($GLOBALS['user']->uid);
     $output = '';
     $output = str_replace('Edit</a></li>', 'MIN PROFIL</a></li>', $variables['tree']);       
	 global $user;
	 //echo $output;exit;
	 if (in_array('frivillig', $user->roles) && $user_data->field_har_taget_introtur['und'][0][value] != 1) {
	     $uid = $user->uid;
		  //$output = str_replace('>HJEM</a></li>', '>HJEM</a></li><li class="leaf"><a href="/introtur" title="">INTROTUR</a></li>', $output);
		
		// $removeword = '<li class="first leaf"><a href="/" title="">HJEM</a></li>';
		// $output = str_replace($removeword, '', $output);
		// $removeword = '<li class="first leaf"><a href="/" title="" class="active">HJEM</a></li>';		
		// $output = str_replace($removeword, '', $output);
		$removeword = '<li class="leaf"><a href="/ture" title="">TURE</a></li>';		
		$output = str_replace($removeword, '', $output);		
		$removeword = '<li class="leaf active-trail"><a href="/ture" title="" class="active-trail active">TURE</a></li>';		
		$output = str_replace($removeword, '', $output);		
		
		/* Check user already enrolled for one location or not */
		$result = db_query("SELECT users.uid AS uid, users.name AS users_name, users.access AS users_access, 'user' AS field_data_field_fornavn_user_entity_type, 'user' AS field_data_field_efternavn_user_entity_type FROM  {users} users INNER JOIN {flagging} flagging_users ON users.uid = flagging_users.uid AND flagging_users.fid = 3 INNER JOIN {users_roles} users_roles ON users.uid = users_roles.uid WHERE (( (flagging_users.entity_type='node' ) )AND(( (users.status <> '0') AND (users_roles.rid = '5') ))) AND users.uid = :uid limit 1", array(':uid' => $uid));
		// echo "<pre>";
		// print_r($result);
		// exit;
		
		$show_user_to_opt_one_location_selectedmenu = '<li class="leaf active-trail"><a href="/valg-lokationer" title="" class="active-trail active">LOKATIONER</a></li>';
		$show_user_to_opt_one_location = '<li class="leaf"><a href="/valg-lokationer" title="">LOKATIONER</a></li>';		
		/*
		foreach ($result as $record) { 		    
			$show_user_to_opt_one_location_selectedmenu = $show_user_to_opt_one_location = "";
			break;
		}
		*/
		$removeword = '<li class="leaf"><a href="/lokationer" title="">LOKATIONER</a></li>';		
		$output = str_replace($removeword, $show_user_to_opt_one_location, $output);
		$removeword = '<li class="leaf active-trail"><a href="/lokationer" title="" class="active-trail active">LOKATIONER</a></li>';		
		$output = str_replace($removeword, $show_user_to_opt_one_location_selectedmenu, $output);
	 } else if ($user_data->field_har_taget_introtur['und'][0][value] == 1) {
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
	$form['field_testlokation']['und']["#default_value"] = arg(3);
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

