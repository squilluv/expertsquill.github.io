<?php
class Controller_Notebook extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{		
		$this->view->generate('notebook_view.php', 'template_view.php', $data);
	}
}