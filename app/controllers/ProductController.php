<?php
namespace App\Controllers;

use App\Common\BaseController;
use App\Models\Product;
use Rakit\Validation\Validator;
class ProductController extends BaseController {
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
       $pro = $this->product->all();
        $this -> views("product_list", compact("pro"));
    }

    public function create()
    {
      
      $this -> views("product_form");
    }

    public function store()
    {
       
        
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
       
    }

    public function update($id)
    {
      
    }

    public function delete($id)
    {
       
    }
}