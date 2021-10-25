<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsController extends Controller
{
    public function getData(){
    $client = new Client();
    $request = $client->get('http://newsapi.org/v2/top-headlines?
    country=us&category=business&apiKey=f6028388c2e147cab745125a13ac20fa');
        $response = $request->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }

    public function searchData(Request $request){
        $client = new Client();
        $query = $request->keyword;
        $req = $client->get('http://newsapi.org/v2/top-headlines?country=us&
        category=business&apiKey=f6028388c2e147cab745125a13ac20fa&q='.$query);
        $response = $req->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }
   
}   
