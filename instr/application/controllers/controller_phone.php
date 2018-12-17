<?php
class Controller_Phone extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{		
		$this->view->generate('phone_view.php', 'template_view.php', $data);
	}
}