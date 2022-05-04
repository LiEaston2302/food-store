<?php
class Pages extends Controller
{
    private $db;

    public function __construct()
    {
        $this->PageModel = $this->model("Page");
    }


    public function index()
    {
        $data = [
            "title" => "Home"
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $showEmployees = $this->PageModel->showEmployees();
        $data = [
            "title" => "About",
            "employees" => $showEmployees
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
