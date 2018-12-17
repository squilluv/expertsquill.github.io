<?php
class Controller_Master extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{		
		$this->view->generate('master_view.php', 'template_view.php', $data);
	}
}