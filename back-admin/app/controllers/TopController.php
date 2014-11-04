<?php

class TopController extends BaseController {

	public function getIndex()
	{
		return View::make('top.index');
		// echo "hoge";
	}


}
