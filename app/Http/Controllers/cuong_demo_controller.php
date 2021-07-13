<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class cuong_demo_controller extends Controller
{
    public function viewindex(){
        return view('view_cua_cuong.index');
    }
    public function viewaboutus(){
        return view('view_cua_cuong.aboutus');
    }
    public function viewcontact (){
         return view('view_cua_cuong.Contact');
    }
    public function viewpost(){
        return view('view_cua_cuong.post_view');
    }
    public function update_product($id){
        return $id;
    }
    public function add_product(Request $request){
        $product = new products();
        $product->fill($request->all());
        $product->save();
        return 'Update du lieu thanh cong!';
    }
}
