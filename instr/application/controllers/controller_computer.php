<?php
class Controller_Computer extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{		
		$this->view->generate('computer_view.php', 'template_view.php', $data);
	}
}