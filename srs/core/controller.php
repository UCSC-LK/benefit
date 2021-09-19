<?php


/**
 * main controller class
 */
class Controller
{
	
	public function view($view,$data = array())
	{
		extract($data);
		// code...

		if(file_exists("./srs/views/" . $view . ".view.php"))
		{
			require ("./srs/views/" . $view . ".view.php");
		}else{
			require ("./srs/views/404.view.php");
		}
	}

	public function load_model($model)
	{

		if(file_exists("./srs/models/".ucfirst($model).".php"))
		{
			require("./srs/models/".ucfirst($model).".php");
			return $model = new $model();
		}
		
		return false;
	}

	public function redirect($link)
	{
        header("Location:http://localhost/benefit/".trim($link,"/"));
		die;
	}
}
