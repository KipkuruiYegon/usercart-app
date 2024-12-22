<?php


namespace App\Http\Controllers;
ini_set('max_execution_time', 60); // 60 seconds

use Illuminate\Support\Facades\Http;

class TemplateController extends Controller
{
    public function index()
    {
        try {
            // Fetch categories and their products from the API
            $response = Http::get('http://127.0.0.1:8000/api/categories');

            // Check if the response is successful
            if ($response->successful()) {
                $categories = $response->json(); // Decode JSON response into an array
            } else {
                $categories = []; // Return empty array if API call is unsuccessful
            }
        } catch (\Exception $e) {
            // Handle exceptions and return empty array in case of an error
            $categories = [];
        }

        // Pass the categories to the Blade view
        return view('templateview.home', compact('categories'));
    }
}
