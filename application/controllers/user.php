<?php

class User_Controller extends Base_Controller
{
	public function action_pageoruser($path)
	{
		$exists = View::exists('home.'.$path);
	
		if ($exists) {
			return View::make('home.'.$path);
		}
	
		$user = User::where_username($path)->first();
	
		if ($user === NULL) {
			return Response::error('404');
		}

		// Now proceed to show user's profile
		return var_export($user,1);
	}
}