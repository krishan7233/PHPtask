<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index()
    {
         // Fetch data from the external URL
         $url = 'https://dummyjson.com/products';
         $response = Http::get($url);
         // Extract the JSON data from the response
         $products = $response->json();
        
         // Pass the data to the view
         return view('index', ['products' => $products]);
    }

    public function productdetail($id){
        $url="https://dummyjson.com/products/".$id;
        $response = Http::get($url);
        $products = $response->json();
       
        // Pass the data to the view
        return view('product_detal', ['productdetail' => $products]);
    }
    public function productlist(){


        // for category data
        $cat_url = 'https://dummyjson.com/products/categories';

          // Fetch data with pagination using the HTTP client
          $response_cat = Http::get($cat_url);
          $cat_data = $response_cat->json();

        //end category data
          // Fetch data from the external URL
          $url = 'https://dummyjson.com/products';

          // Fetch data with pagination using the HTTP client
          $response = Http::get($url);
          $products = $response->json();
          
          // Pass the data to the view
          return view('productlist', ['products' => $products,'cat_data'=>$cat_data]);

    }
}
