<?php

namespace App\Controllers;

use App\Models\YourModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new YourModel();

		$data['pageTitle'] = 'Home Index Page';

		// load table
		$data['table'] = $model->getList();

		return view('index-page', $data);
	}

	//--------------------------------------------------------------------

}
