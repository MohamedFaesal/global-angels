<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

/**
 * Class ProductController
 * @package App\Http\Controllers\Web
 */
class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function add()
    {
        return view('products.form');
    }
}
