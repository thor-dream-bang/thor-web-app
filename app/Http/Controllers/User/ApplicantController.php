<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ApplicantController extends Controller
{
    public function index(){
        return "This is a page for applicant by default...";
    }

    public function biodata(){
        $detail_content = '-- detail content will be here... *message from controller--';
        $wish_list = ["social media login", "style using bulma", "use vue to replace jquery"];
        return view('applicant-biodata', ['dc' => $detail_content, 'wl' => $wish_list]);
    }

    private $datauser = '';
    public function userinfo($nama){
        if ($nama == 'detail') {
            $client = new Client();

            $response = $client->request('GET', 'https://thor-web-rest.herokuapp.com/v1/user/0');
            $statusCode = $response->getStatusCode();
            $detail = $response->getBody()->getContents();
            return $detail;

        } else if ($nama == 'hobi'){
            $client = new Client();

            $response = $client->request('GET', 'https://thor-web-rest.herokuapp.com/v1/user/0/hobi');
            $statusCode = $response->getStatusCode();
            $hobi = $response->getBody()->getContents();
            return $hobi;

        } else {            
            return view('applicant-biodata', ['nama' => $nama]);
        }
    }
}
