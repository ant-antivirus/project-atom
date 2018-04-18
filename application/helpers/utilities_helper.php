<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('breadcrumb')){
	function breadcrumb($breadcrumb, $item_class = 'breadcrumb-item', $actived_class = 'active') {
		$actived = '';
		$item_class =  (!empty($item_class))?$item_class:'breadcrumb-item';
		$actived_class =  (!empty($actived_class))?$actived_class:"active";
		if(!empty($breadcrumb)) { 
			foreach($breadcrumb as $name => $url) {
				if($url === end($breadcrumb)) $actived = $actived_class;
				echo '<li class="'.$item_class.' '.$actived.'"><a href="'.$url.'">'.$name.'</a></li>';
			}
		}
	}
}

if (!function_exists('sidebar')){
	function sidebar($sidebar, $item_class = 'waves-effect waves-dark', $actived_class = 'active') {
		$item_class =  (!empty($item_class))?$item_class:'waves-effect waves-dark';
		$actived_class =  (!empty($actived_class))?$actived_class:'active';
		if(!empty($sidebar)) { 
			foreach($sidebar as $row) {
				$actived = ($row['actived'])?$actived_class:'';
				echo '<li class="'.$actived.'"><a class="'.$item_class.'" href="'.$row['url'].'" aria-expanded="false"><i class="'.$row['icon'].'"></i><span class="hide-menu">'.$row['title'].'</span></a></li>';

			}
		}
	}
}

if (!function_exists('_')){
	function _($key) {
		$CI = & get_instance();
		return $CI->lang->line($key);
	}
}

if (!function_exists('d')){
	function d($vars, $exit = false) {
		echo '<pre>'.print_r($vars, true).'</pre>';
		if($exit) exit();
	}
}
?>