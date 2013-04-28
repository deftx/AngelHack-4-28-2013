<?php 

class Api_Controller extends Base_Controller
{
	public $restful = true;
	
	public function get_list($name)
	{
		$list = ItemList::where('name','=',$name)->first()->items()->get();

		foreach($list as $l) {
			$newList[] = $l->to_array()['value'];
		}
		
		return Response::json($newList);
	}
}