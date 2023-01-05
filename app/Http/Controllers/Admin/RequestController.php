<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestInfo;
// use App\Models\RequestInfo;
// use App\Models\Customer;

class RequestController extends Controller {

    public static function list(Request $request){
        $list = RequestInfo::select('*')
                    ->with('customer', 'service', 'price', 'congTacVien')
                    ->get();
        return view('admin.request.list', compact('list'));
    }

    // public function loadLoading(){
    //     $xhtml      = view('main.templates.loading')->render();
    //     echo $xhtml;
    // }

    // public function submitFormRequestWebsite(Request $request){
    //     $dataForm       = [];
    //     foreach($request->get('data') as $value){
    //         $dataForm[$value['name']]   = $value['value'];
    //     }
    //     /* insert customer_info */
    //     $insertCustomer = $this->BuildInsertUpdateModel->buildArrayTableCustomerInfo($dataForm);
    //     $idCustomer     = Customer::insertItem($insertCustomer);
    //     /* insert request_info */
    //     $insertRequest  = $this->BuildInsertUpdateModel->buildArrayTableRequestInfo($dataForm, $idCustomer);
    //     $idRequest      = RequestInfo::insertItem($insertRequest);
    //     if($idRequest){
    //         $xhtml      = view('main.ajax.notice')->render();
    //         echo $xhtml;
    //     }else {
    //         echo 'error';
    //     }
    // }
}
