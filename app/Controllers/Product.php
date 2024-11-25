<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    private $productModel;

    public function __construct(){
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        return view('products', [
            'products' => $this->productModel->findAll()
        ]);
    }

    public function delete($id) {
        if ($this-> productModel->delete($id)) {
            echo view('messages', [
                'message' => 'Produto excluído com sucesso'
            ]);
        }else {
            echo "Erro.";
        }
    }

    public function create(){
        return view('form');
    }

    public function store(){
        if ($this->productModel->save($this->request->getPost())) {
            return view("messages",[
                'message' => 'Produto salvo com sucesso!'
            ]);
        } else {
            echo "Ocorreu um erro.";
        }
    }

     public function edit($id) {
        return view('form', [
            'product' => $this->productModel->find($id)
        ]);
        
    }

}
