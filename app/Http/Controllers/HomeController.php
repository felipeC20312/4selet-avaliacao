<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $productsJsonPath = resource_path("data/products.json");
    $productsjson = json_decode(file_get_contents($productsJsonPath), true);
    $products = $productsjson['products'];

    $benefitsJsonPath = resource_path("data/benefits.json");
    $benefitsJson = json_decode(file_get_contents($benefitsJsonPath), true);
    $benefits = $benefitsJson['benefits'];

    $testimonialsJsonPath = resource_path("data/testimonials.json");
    $testimonialsJson = json_decode(file_get_contents($testimonialsJsonPath), true);
    $testimonials = $testimonialsJson['testimonials'];

    $articlesJsonPath = resource_path("data/articles.json");
    $articlesJson = json_decode(file_get_contents($articlesJsonPath), true);
    $articles = $articlesJson['articles'];

    return view('pages.home', compact('products', 'benefits', 'testimonials', 'articles'));
  }
}