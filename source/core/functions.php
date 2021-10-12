<?php 

function get_var($key,$default = "")
{

	if(isset($_POST[$key]))
	{
		return $_POST[$key];
	}

	return $default;
}