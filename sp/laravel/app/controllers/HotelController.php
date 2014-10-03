<?php

class HotelController extends BaseController {

	public function index()
	    {
	        $hotels = Hotel::all();
	        return View::make('hotel.index', ['hotels' => $hotels]);
	    }
	
	    public function show($id)
	    {
	        $hotel = Hotel::findOrFail($id);
	        return View::make('hotel.show', ['hotel' => $hotel]);
	    }
}
