<?php

namespace App\Controllers;
use App\Models\LaptopModel;   
use App\Models\CategoryLaptopModel;  
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        $LaptopModel = new LaptopModel();
        $data['products'] = $LaptopModel->findAll();
        return view('product/index', $data);
    }
    public function create()
    {
        $categoryModel = new CategoryLaptopModel();
        $data['categories'] = $categorLModel->findAll();
        return view('product/create', $data);
    }

    public function store()
    {
        $LaptopModel = new LaptopModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Laptop_Category' => $this->request->getPost('Laptop_Category'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $LaptopModel->insert($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $LaptopModel = new LaptopModel();
        $categoryModel = new CategoryLaptopModel();
        $data['product'] = $LaptopModel->find($id);
        $data['categories'] = $categoryModel->findAll();
        return view('product/edit', $data);
    }

    public function update($id)
    {
        $LaptopModel = new LaptopModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Laptop_Category' => $this->request->getPost('Laptop_Category'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $LaptopModel->update($id, $data);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $LaptopModel = new LaptopModel();
        $LaptopModel->delete($id);

        return redirect()->to('/');
    }
}
