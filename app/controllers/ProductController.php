<?php

namespace App\Controllers;

use App\Common\BaseController;
use App\Models\Product;
use Rakit\Validation\Validator;

class ProductController extends BaseController
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $pro = $this->product->all();
        $this->views("product_list", compact("pro"));
    }

    public function create()
    {

        $this->views("product_form");
    }

    public function store()
    {

        if (isset($_POST['gui'])) {


            $targetDir = "assets/image/";
            $targetFile = $targetDir . $_FILES['img']['name'];
            if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {

                $imageUrl = $targetFile;
            }

            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['gia'],
                'image' => $imageUrl,
                'description' => $_POST['nd']
            ];
            $this->product->insert($data);
            header('location:http://localhost/Task2/');
        }
       
    }

    public function show($id) {
        $product = $this->product->findByID($id);
        $this->views('product_detail', compact('product'));
    }

    public function edit($id) {
        $product = $this->product->findByID($id);
        $this->views('product_edit', compact('product'));
    }

    public function update($id) {
         if (isset($_POST['gui'])) {


           
            if ($_FILES['img']['size'] != 0) {
               
                $targetDir = "assets/image/";
            
                $targetFile = $targetDir . $_FILES['img']['name'];
               
                if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {
                    $image_url = $targetFile;
                }
            } else {
                $image_url = $_POST['anh'];
            }

            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['gia'],
                'image' => $image_url,
                'description' => $_POST['nd']
            ];
          
            $this->product->update($id,$data);
            header('location:http://localhost/Task2/');
        }
    }

    public function delete($id) {
        $this -> product->delete($id);
        header('location:http://localhost/Task2/');
    }
}
