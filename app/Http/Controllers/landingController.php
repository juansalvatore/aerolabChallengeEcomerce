<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;


class landingController extends Controller
{
    public function show() {
      $response = $this->getProducts();
      $user = $this->getUser();
      // dd($response);

      // paginate 8 products per page
      $currentPage = LengthAwarePaginator::resolveCurrentPage();
      $col = new Collection($response);
      $perPage = 8;
      $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
      $products = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);

      return view('index')->with([
        'products' => $products,
        'user' => $user,
      ]);
    }

    // function to get products from API as JSON and decode the
    public function getProducts() {
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

      return $response;

      // RESPONSE (before decoding into array)
      // {
      //   "_id": "5a033eeb364bf301523e9b92",
      //   "name": "Sandalia Pale Gold YSL",
      //   "cost": 200,
      //   "category": "Indumentaria",
      //   "img": {
      //     "url": "https://coding-challenge-api-huojtyfzzb.now.sh/images/Alienware13-x2.png",
      //     "hdUrl": "https://coding-challenge-api-huojtyfzzb.now.sh/images/Alienware13-x2.png"
      //   }
      // }
    }

    public function getUser() {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://aerolab-challenge.now.sh/user/me");
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

      return $response;

      // {
      //   "id": "5a03638052fd231590d04eb5",
      //   "name": "John Kite",
      //   "points": 2000,
      //   "redeemHistory": [],
      //   "createDate": "new Date(1510171520852)"
      // }
    }
}
