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
        $showProducts = $this->PageModel->showProducts();
        $data = [
            "title" => "Home",
            "products" => $showProducts
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $showEmployees = $this->PageModel->showEmployees();
        $employeeCount = $this->PageModel->employeeCount();
        $productCount = $this->PageModel->productCount();
        $empfname = $this->PageModel->getEmployeeFirstName();

        $data = [
            "title" => "About",
            "employees" => $showEmployees,
            "employee-count" => $employeeCount,
            "employee-first-name" => $empfname,
            "product-count" => $productCount
        ];

        $this->view("pages/about", $data);
    }

    public function products()
    {
        $showProducts = $this->PageModel->showProducts();
        $data = [
            "title" => "Products",
            "products" => $showProducts
        ];
        $this->view("pages/products", $data);
    }

    public function product()
    {
        $showProducts = $this->PageModel->showProducts();
        $data = [
            "title" => "Product",
            "products" => $showProducts
        ];
        $this->view("pages/product", $data);
    }
}
