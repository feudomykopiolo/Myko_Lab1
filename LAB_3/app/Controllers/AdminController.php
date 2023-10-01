<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Config\App;

class AdminController extends BaseController
{
    private $table_data;
    public function __construct()
    {
        $this-> table_data = new \App\Models\AdminModel();
    }

    public function table_data($table_data)
    {
        echo $table_data;
    }
    public function table()
    {
        $data['tableData'] = $this-> table_data->findAll();
        return view('tableData', $data);
    }
    public function delete($id)
    {
        $this->table_data->delete($id);
        return redirect()->to('/table_data');
    }
    public function edit($id)
    {
        $data = [
            'table_data'=> $this->table_data->findAll(),
            'tab' => $this->table_data->where('id', $id)->first(),
        ];
        return view('Product', $data);

    }
    public function save()
    {
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'Description' => $this->request->getVar('Description'),
            'Category' => $this->request->getVar('Category'),
            'Quantity' => $this->request->getVar('Quantity'),
            'Price' => $this->request->getVar('Price'),
            'Image' => $this->request->getVar('Image'),
        ];
        $this->table_data->save($data);
        return redirect()->to('/table_data');
    }
    public function update($id)
    {
       
        if ($this->request->getMethod() === 'post') {

            $id = $this->request->getPost('id');
            $ProductName = $this->request->getPost('ProductName');
            $Description = $this->request->getPost('Description');
            $Category = $this->request->getPost('Category');
            $Quantity = $this->request->getPost('Quantity');
            $Price = $this->request->getPost('Price');
            $Image = $this->request->getPost('Image');
    
           $adminModel = new AdminModel();
           
            $data = [
                    'id' => $id,
                    'ProductName' => $ProductName,
                    'Description' => $Description,
                    'Category' => $Category,
                    'Quantity' => $Quantity,
                    'Price' => $Price,
                    'Image' => $Image,
            ];
    
           $adminModel->update($id, $data);
    
            return redirect()->to('/table_data');
        }
    }
    // public function tableData()
    // {
    //     return view('tableData');
    // }
    public function fPass()
    {
        return view('fPass');
    }

    public function adminDash()
    {
        // session_start();

        // if (!isset($_SESSION['Logged-in']) || $_SESSION['Logged-in'] !== true) {
        //     return view('/');
        //     exit();
        return view('adminDash');
    }
    public function insert()
    {
        return view('insert');
    }
}
