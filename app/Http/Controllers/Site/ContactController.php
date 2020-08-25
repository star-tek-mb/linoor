<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        return view('site.contact');
    }

    public function post(Request $request) {
        $description = 'New message from contact form:' . PHP_EOL;
        $description .= '**From:** ' . $request->input('username') . PHP_EOL;
        $description .= '**Email:** ' . $request->input('email') . PHP_EOL;
        $description .= '**Phone:** ' . $request->input('phone') . PHP_EOL;
        $description .= '**Subject:** ' . $request->input('subject') . PHP_EOL;
        $description .= '**Message:**' . PHP_EOL . $request->input('message') . PHP_EOL;

        $client = new \GuzzleHttp\Client();
        $query = [
            'key' => config('app.trello_key'),
            'token' => config('app.trello_token'),
            'idList' => config('app.trello_list'),
            'name' => $request->input('subject'),
            'desc' => $description
        ];
        $client->post('https://api.trello.com/1/cards', ['form_params' => $query]);

        return redirect()->route('site.contact');
    }
}