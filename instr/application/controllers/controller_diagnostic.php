<?php
class Controller_Diagnostic extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{		
		$this->view->generate('diagnostic_view.php', 'template_view.php', $data);
	}
}