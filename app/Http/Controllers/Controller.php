<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	//show all posts
    	$response = Http::get('https://jsonplaceholder.typicode.com/posts');
		dd($response->body());
    }

    public function post($id){
    	//post by id
    	$response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
		dd($response->body());
    }

    public function post_comments($id){
    	//post comments by id post
    	$response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id.'/comments');
		dd($response->body());
    }

    public function posts_by_user($user_id){
    	//posts by user
    	$response = Http::get("https://jsonplaceholder.typicode.com/posts?userId=".$user_id);
		dd($response->body());
    }

    public function all_users(){
    	//show all users
    	$response = Http::get("https://jsonplaceholder.typicode.com/users");
		dd($response->body());
    }

    public function user($user_id){
    	//get user by id
    	$response = Http::get("https://jsonplaceholder.typicode.com/users/".$user_id);
		dd($response->body());
    }
}
