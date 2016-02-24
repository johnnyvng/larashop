<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Larashop: Using models in controllers
use App\Brand;
use App\Category;
use App\Product;

class Front extends Controller {


    /*
    // Show basic simple page from localhost/larashop/public/
    public function index() {
        return 'index page';
    }

      public function products() {
        return 'products page';
    }

    public function product_details($id) {
        return 'product details page';
    }

    public function product_categories() {
        return 'product categories page';
    }

    public function product_brands() {
        return 'product brands page';
    }

    public function blog() {
        return 'blog page';
    }

    public function blog_post($id) {
        return 'blog post page';
    }

    public function contact_us() {
        return 'contact us page';
    }

    public function login() {
        return 'login page';
    }

    public function logout() {
        return 'logout page';
    }

    public function cart() {
        return 'cart page';
    }

    public function checkout() {
        return 'checkout page';
    }

    public function search($query) {
        return "$query search page";
    }
*/

/*
    public function index() {
        return view('home', array('page' => 'home'));
    }

    public function products() {
        return view('products', array('page' => 'products'));
    }

    public function product_details($id) {
        return view('product_details', array('page' => 'products'));
    }

    public function product_categories($name) {
        return view('products', array('page' => 'products'));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('page' => 'products'));
    }

    public function blog() {
        return view('blog', array('page' => 'blog'));
    }

    public function blog_post($id) {
        return view('blog_post', array('page' => 'blog'));
    }

    public function contact_us() {
        return view('contact_us', array('page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('page' => 'home'));
    }

    public function logout() {
        return view('login', array('page' => 'home'));
    }

    public function cart() {
        return view('cart', array('page' => 'home'));
    }

    public function checkout() {
        return view('checkout', array('page' => 'home'));
    }

    public function search($query) {
        return view('products', array('page' => 'products'));
    }
*/

/*    Larashop: Using models in controllers

    use App\Brand; use App\Category; use App\Product; imports the Brand, category and Product models from the App namespace
    var $brands; var $categories; var $products; defines variables that will hold data from the respective models. This data is common to all the pages
    var $title; var $description; defines the title and meta description for search engine optimization purposes.
    public function __construct(){…} defines the controller constructor method. This method is called when the model is initialized and loads the data from models into the respective variables that we defined.
    return view('home', array('title' => 'Welcome','description' => '','page' => 'home', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products)); loads the home blade template views and passes in the array variable parameters
*/



    var $brands;
    var $categories;
    var $products;
    var $title;
    var $description;

    public function __construct() {
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->products = Product::all(array('id', 'name', 'price'));
    }

    public function index() {
        return view('home', array('title' => 'Welcome','description' => '','page' => 'home', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }


    public function products() {
        return view('products', array('title' => 'Products Listing','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_details($id) {
        $product = Product::find($id);
        return view('product_details', array('product' => $product, 'title' => $product->name,'description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_categories($name) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function blog() {
        return view('blog', array('title' => 'Welcome','description' => '','page' => 'blog', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function blog_post($id) {
        return view('blog_post', array('title' => 'Welcome','description' => '','page' => 'blog', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function contact_us() {
        return view('contact_us', array('title' => 'Welcome','description' => '','page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function logout() {
        return view('login', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function cart() {
        return view('cart', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function checkout() {
        return view('checkout', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function search($query) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products'));
    }



}
