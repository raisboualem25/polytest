<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	//show all users
    	$response = Http::get('https://reqres.in/api/users');

    	//status == 200
    	dd($response->status());
		dd($response->json());

    }

    public function user($id){
    	//user by id
    	$response = Http::get('https://reqres.in/api/users/'.$id);

    	//status == 200
    	//dd($response->status());
		dd($response->json());
    }

	public function save()
    {
    	$response = Http::post('https://reqres.in/api/users', [    				
    				'name' => 'rayyis' ,
    				'job' => 'web developer' ,
    			]);
  		//status == 201
    	//dd($response->status());
    	dd($response->json());
    }

    public function update($id)
    {
    	$response = Http::patch('https://reqres.in/api/users/'.$id, [    				
    				'name' => 'raddis' ,
    				'job' => 'web developer' ,
    			]);
  		//status == 200
    	//dd($response->status());
    	dd($response->json());
    }

    public function delete($id)
    {
    	$response = Http::delete('https://reqres.in/api/users/'.$id);
  		//status == 204 
    	dd($response->status());
    }


}
