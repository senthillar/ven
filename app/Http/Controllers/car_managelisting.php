<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\dms_car_listings;
use App\dms_car_list;
use Illuminate\Support\Facades\Input;
use DB;
/**
* 
*/
class car_managelisting extends Controller
{
	public function index()
	{
		return view('index');
	}
	public function managelisting()
	{
		$select = dms_car_list::view();
		return view('managelisting',compact('select'));
	}
	public function add_listing()
	{
		return view('add_listing');
	}
	public function add_car_listing_store()
	{
		$s = new dms_car_listings;
		$s->mileage=Input::get('mileage');
		$s->transmission=Input::get('transmission');
		$s->engine_displacement=Input::get('engine_displacement');
		$s->kilometer_run=Input::get('kilometer_run');
		$s->days_to_sell=Input::get('days_to_sell');
		$s->vin=Input::get('vin');
		$s->seatingcapacity=Input::get('seatingcapacity');
		$s->status=Input::get('status');
		$s->peak_power=Input::get('peak_power');
		$s->peaktorque=Input::get('peaktorque');
		$s->steering_adjustment=Input::get('steering_adjustment');
		$s->body_type=Input::get('body_type');
		$s->fuel_capacity=Input::get('fuel_capacity');
		$s->registration_year=Input::get('registration_year');
		$s->make=Input::get('make');
		$s->model=Input::get('model');
		$s->variant=Input::get('variant');
		$s->place=Input::get('place');
		$s->kms_done=Input::get('kms_done');
		$s->colors=Input::get('colors');
		$s->owner_type=Input::get('owner_type');
		$s->air_conditioner=Input::get('air_conditioner');
		$s->central_locking=Input::get('central_locking');
		$s->cd_player=Input::get('cd_player');
		$s->power_steering=Input::get('power_steering');
		$s->power_windows=Input::get('power_windows');
		$s->steering_mounted_controls=Input::get('steering_mounted_controls');
		$s->rear_ac_vent=Input::get('rear_ac_vent');
		$s->rear_wiper=Input::get('rear_wiper');
		$s->leather_seats=Input::get('leather_seats');
		$s->electrically_adjustable_mirrors=Input::get('electrically_adjustable_mirrors');
		$s->airbag=Input::get('airbag');
		$s->max_exp_price=Input::get('max_exp_price');
		$s->min_exp_price=Input::get('min_exp_price');
		$s->car_address_1=Input::get('car_address_1');
		$s->car_address_2=Input::get('car_address_2');
		$s->car_owner_name=Input::get('car_owner_name');
		$s->car_owner_email=Input::get('car_owner_email');
		$s->car_owner_mobile=Input::get('car_owner_mobile');
		$s->car_locality=Input::get('car_locality');
		$s->car_latitude=Input::get('car_latitude');
		$s->car_longitude=Input::get('car_longitude');
		$s->save();
		return view('managelisting');
	}
	public function delete_car_listing($id)
	{

		$delete = DB::connection('dmsmysql')->table('dms_car_listings')->where('car_id',$id)->delete();
		if($delete)
		{
			return redirect('managelisting');
		}
	}
	public function view_car_listing($id)
	{
		$update = DB::connection('dmsmysql')->table('dms_car_listings')->where('car_id',$id)->first();
		return view('detail_list',compact('update'));
	}
	public function update_car_listing($id)
	{

	}
}