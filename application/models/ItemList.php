<?php

class ItemList extends Eloquent
{
	public static $table = 'lists';
	
	public function items()
	{
		return $this->has_many('ItemListItem', 'list_id');
	}
}
