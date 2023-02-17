<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = [
            0 => [
                'name' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'phone' => '0000-0000'
            ],
            1 => [
                'name' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'phone' => '0000-0000'
            ],
            2 => [
                'name' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'phone' => '0000-0000'
            ]
        ];

        return view('app.suppliers.index', compact('suppliers'));
    }
}
