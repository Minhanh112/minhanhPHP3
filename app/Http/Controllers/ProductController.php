<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function listProduct()
    {
        $title = "List Product";
        $list = DB::table('product')->get();
        return view('product.list', compact('title', 'list'));
    }

    public function addProduct(Request $request)
    {
        $title = 'Add Product';
        if ($request->isMethod('post')) {
            $params = $request->post();
            unset($params['_token']);

            $product = new Product();
            $product->tenSP = $request->tenSP;
            $product->thuongHieu = $request->thuongHieu;
            $product->price = $request->price;
            $product->mau = $request->mau;


            $product->save();

            if ($product->save()) {
                Session::flash('success', 'Thêm khách hàng thành công');
                return redirect()->route('listProduct');
            } else {
                Session::flash('error', 'Lỗi thêm khách hàng');
            }
        }

        return view('product.add', compact('title'));
    }

    public function editProduct(Request $request, $id)
    {
        $title = "Edit Product";
        $detail = Product::find($id);
        if ($request->isMethod('post')) {
            $update = Product::where('id', $id)
                ->update($request->except('_token'));
            // except giống unset
            if ($update) {
                Session::flash('success', 'Sửa thông tin khách hàng thành công');
                return redirect()->route('listProduct');
            } else {
                Session::flash('error', 'Lỗi thêm khách hàng');
            }
        }
        return view('product.edit', compact('title', 'detail'));
    }

    public function deleteProduct($id)
    {
        if ($id) {
            $deleted = Product::where('id', $id)->delete();
            if ($deleted) {
                Session::flash('success', 'Xóa thông tin khách hàng thành công');
                return redirect()->route('listProduct');
            } else {
                Session::flash('error', 'Lỗi xóa khách hàng');
            }
        }
        return;
    }
}
