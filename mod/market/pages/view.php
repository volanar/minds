<?php
/**
 * Market view page
 */
namespace minds\plugin\market\pages;

use minds\core;
use minds\interfaces;
use minds\plugin\market\entities;

class view extends core\page implements interfaces\page{
	
	/**
	 * Get requests
	 */
	public function get($pages){
		
		$item = new entities\item($pages[0]);
		$content = elgg_view_entity($item, array('full_view'=>true));
		
		$body = \elgg_view_layout('one_sidebar', array(
			'content' => $content,
			'sidebar' => elgg_view('market/sidebar'),
			'sidebar_class'=> 'elgg-sidebar-alt'
		));
		
		echo $this->render(array('body'=>$body));
	}
	
	public function post($pages){
		
	}
	
	public function put($pages){
		
	}
	public function delete($pages){
		
	}
	
}
