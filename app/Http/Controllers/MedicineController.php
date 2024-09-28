<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class MedicineController extends Controller
{
    //This method will show medicine Page 
    public function index()
    {

    }
    //this method will show Add medicine page 
    public function add()
    {
        return view('add-medicine');
    }
    //this method will store medicine in database 
    public function store(Request $request)
    {
        $rules = [
            'Medicine_Name' => 'required',
            'sku' => 'required|min:4',
            'weight' => 'required',
            'category' => 'required',
            'speciality' => 'required',
            'origin' => 'required',
            'manufacturer' => 'required',
            'price' => 'required|numeric',
            'mrp' => 'required|numeric',
            'manufacturer_price' => 'required|numeric',
            'stock_box' => 'required',
            'expired_date' => 'required',
            'status' => 'required',
            'image' => 'required',
            'Medicine_description' => 'required|min:50',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('medicine.add')->withInput()->withErrors($validator);
        }
    }

    //this method will edit medicine in database 
    public function edit()
    {

    }

    //this method will update medicine in database 
    public function update()
    {

    }

    //this mthod will delete medicine in database 
    public function delete()
    {

    }
}
