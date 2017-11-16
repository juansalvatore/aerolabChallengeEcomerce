<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function show() {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://aerolab-challenge.now.sh/products");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);

      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Accept: application/json",
        "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1YTBkOTk4MTUyZGQ5NjAwN2I2ZWIyYTQiLCJpYXQiOjE1MTA4NDA3MDV9.-XHsjWBC0i1u6zyo00TUIHVLCKxx2mvFcW9GLB_kGU0"
      ));

      $response = curl_exec($ch);
      curl_close($ch);
      $response = json_decode($response, true);

      dd($response[0]['name']);

      return view('index');
    }
}
