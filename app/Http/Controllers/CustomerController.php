<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function listCustomer(Request $request)
    {
        $title = "List Customer";
        $customers = Customers::all();
        if ($request->POST()) {
            $list = DB::table('customers')
                ->where('name', 'like', '%' . $request->search_name . '%')->get();
        }
        $list = DB::table('customers')->get();
        return view('customer.list', compact('title', 'list'));
    }

    public function addCustomer(Request $request)
    {
        $title = 'Add Customer';
        // if ($request->hasFile('image') && $request->file('image')->isValid()) {
        //     $request->image = uploadFile('hinh', $request->file('image'));
        // }
        if ($request->isMethod('post')) {
            $params = $request->post();
            unset($params['_token']);

            $customer = new Customers();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone_number = $request->phone_number;
            $customer->cccd = $request->cccd;
            $customer->address = $request->address;
            $customer->gender = $request->gender;

            $customer->save();

            if ($customer->save()) {
                Session::flash('success', 'Thêm khách hàng thành công');
                return redirect()->route('list');
            } else {
                Session::flash('error', 'Lỗi thêm khách hàng');
            }
        }

        return view('customer.add', compact('title'));
    }

    public function editCustomer(Request $request, $id)
    {
        $title = "Edit Customer";
        $detail = Customers::find($id);
        if ($request->isMethod('post')) {
            $update = Customers::where('id', $id)
                ->update($request->except('_token'));
            // except giống unset
            if ($update) {
                Session::flash('success', 'Sửa thông tin khách hàng thành công');
                return redirect()->route('list');
            } else {
                Session::flash('error', 'Lỗi thêm khách hàng');
            }
        }
        return view('customer.edit', compact('title', 'detail'));
    }

    public function deleteCustomer($id)
    {
        if ($id) {
            $deleted = Customers::where('id', $id)->delete();
            if ($deleted) {
                Session::flash('success', 'Xóa thông tin khách hàng thành công');
                return redirect()->route('list');
            } else {
                Session::flash('error', 'Lỗi xóa khách hàng');
            }
        }
        return;
    }
}
