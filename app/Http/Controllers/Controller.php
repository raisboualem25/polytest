<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\events;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($page = null){
    	//show all users
    	$response = Http::get('https://reqres.in/api/users?page='.$page);

    	//status == 200
    	//dd($response->status());
		//dd($response->json());
    	$data = $response->json();
        return view('welcome', ['data' => $data ]);
    }

    public function total_records(){
    	//show all users
    	$response = Http::get('https://reqres.in/api/users');

    	//status == 200
    	//dd($response->status());
		//dd($response->json());
    	$total = $response->json();
    	dd($total);

    }


    public function total_records_per_page(){
    	//show all users
    	$response = Http::get('https://reqres.in/api/users');

    	//status == 200
    	//dd($response->status());
		//dd($response->json());
    	dd($response->json());

    }

    static function total_pages(){
        //show all users
        $response = Http::get('https://reqres.in/api/users');
        return $response->json()['total_pages'];
    }





    public function user($id){
    	//user by id
    	$response = Http::get('https://reqres.in/api/users/'.$id);

    	//status == 200
    	//dd($response->status());
		dd($response->json());
    }

	public function save(Request $request)
    {
    	//validation back-end
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'job' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/erreur')
                        ->withErrors($validator)
                        ->withInput();
        }
        $response = Http::post('https://reqres.in/api/users', [    				
    				'name' => $request->first_name ,
    				'job' => $request->job ,
    			]);
        //si l API externe retourne une erreur
        if($response->status() != 201 || count($response->json()) == 0){
            return redirect('/erreur')->withErrors('erreur vien de l API externe');
        }
        //tout est correct => envoi des infos retourné par l API a la vue
        return $response;
    }


    public function delete(Request $request)
    {
    	$response = Http::delete('https://reqres.in/api/users/1');
  		//status == 204 
    	return $response->status();
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


}
