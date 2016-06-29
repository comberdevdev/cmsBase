<?php
	function setSession($name, $value) {
		$_SESSION[$name] = $value;
	}

	function unsetSession($name) {
		unset($_SESSION[$name]);
	}

	function redirect($url) {
        echo '<script language="JavaScript"> ';
        echo 'window.location="' . $url . '";';
        echo '</script>';
    }

    function reArrayFiles(&$file_post) {

	    $file_ary = array();
	    $file_count = count($file_post['name']);
	    $file_keys = array_keys($file_post);

	    for ($i=0; $i<$file_count; $i++) {
	        foreach ($file_keys as $key) {
	            $file_ary[$i][$key] = $file_post[$key][$i];
	        }
	    }

	    return $file_ary;
	}

	function extractNameExtFile($arquivo){
	   $result = explode('.',$arquivo);
	   return $result; 
	}
?>