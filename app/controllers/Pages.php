<?php
class Pages extends Controller
{
    private $farmModel;

    public function index()
    {
        $data = [
            "title" => "Home"
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data = [
            "title" => "About"
        ];
        $this->view("pages/about", $data);
    }

    public function products()
    {
        $data = [
            "title" => "Products"
        ];
        $this->view("pages/products", $data);
    }

    public function product()
    {
        $data = [
            "title" => "Product"
        ];
        $this->view("pages/product", $data);
    }
}
