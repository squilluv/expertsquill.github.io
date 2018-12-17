<?php
class Controller_Time extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{		
		$this->view->generate('time_view.php', 'template_view.php', $data);
	}
}