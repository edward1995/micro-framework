<?php
class Controllerindex extends Controler{
	
	
	public function index(){
		
		$data['title'] = 'Главная';
		$data['resors'] = array(
		'id'=>'1',
		'name'=>'Edward'
		
		);
	$this->view->template('',$data);
	}
	
	
	
}