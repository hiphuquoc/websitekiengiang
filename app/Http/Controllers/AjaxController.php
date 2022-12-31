<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestInfo;
use App\Models\Customer;
use App\Models\Ctv;
use App\Services\BuildInsertUpdateModel;

class AjaxController extends Controller {

    public function __construct(BuildInsertUpdateModel $BuildInsertUpdateModel){
        $this->BuildInsertUpdateModel  = $BuildInsertUpdateModel;
    }

    public function loadNotice(Request $request){
        $xhtml       = null;
        if(!empty($request->get('type'))&&$request->get('type')=='success'){
            $xhtml   = view('main.ajax.notice')->render();
        }
        echo $xhtml;
    }

    public function loadLoading(){
        $xhtml      = view('main.templates.loading')->render();
        echo $xhtml;
    }

    public function submitFormRequestWebsite(Request $request){
        $dataForm       = [];
        foreach($request->get('data') as $value){
            $dataForm[$value['name']]   = $value['value'];
        }
        /* insert customer_info */
        $insertCustomer = $this->BuildInsertUpdateModel->buildArrayTableCustomerInfo($dataForm);
        $idCustomer     = Customer::insertItem($insertCustomer);
        /* insert request_info */
        $insertRequest  = $this->BuildInsertUpdateModel->buildArrayTableRequestInfo($dataForm, 'website', $idCustomer);
        $idRequest      = RequestInfo::insertItem($insertRequest);
        if($insertRequest){
            echo 'succes';
        }else {
            echo 'error';
        }
    }

    public function submitFormRegistryCtv(Request $request){
        $dataForm       = [];
        foreach($request->get('data') as $value){
            $dataForm[$value['name']]   = $value['value'];
        }
        /* insert ctv_info */
        $insertCtv      = $this->BuildInsertUpdateModel->buildArrayTableCtvInfo($dataForm);
        $idCtv          = Ctv::insertItem($insertCtv);
        if($idCtv){
            echo 'succes';
        }else {
            echo 'error';
        }
    }
}
