<?php

namespace App\Services;
// use App\Models\Seo;
use Illuminate\Support\Facades\Auth;

class BuildInsertUpdateModel {
    public static function buildArrayTableRequestInfo($data, $type, $customerId){
        $result                                 = [];
        if(!empty($data)){
            $result['customer_info_id']         = $customerId;
            $result['reference_type']           = $type;
            $result['reference_id']             = $data['website'];
            $result['code']                     = $data['code'] ?? null;
            $result['note']                     = $data['customer_note'] ?? null;
        }
        return $result;
    }
    public static function buildArrayTableCustomerInfo($data){
        $result                                 = [];
        if(!empty($data)){
            $result['name']                     = $data['customer_name'];
            $result['phone']                    = $data['customer_phone'];
            $result['zalo']                     = $data['customer_zalo'] ?? null;
            $result['email']                    = $data['customer_email'] ?? null;
            $result['address']                  = $data['customer_address'] ?? null;
            $result['company_name']             = $data['company_name'] ?? null;
            $result['company_phone']            = $data['company_phone'] ?? null;
            $result['company_website']          = $data['company_website'] ?? null;
            $result['company_address']          = $data['company_address'] ?? null;
            $result['company_mst']              = $data['company_mst'] ?? null;
        }
        return $result;
    }
    public static function buildArrayTableCtvInfo($data){
        $result                                 = [];
        if(!empty($data)){
            $result['code']                     = $data['code'] ?? null;
            $result['code_parent']              = $data['code_parent'] ?? null;
            $result['name']                     = $data['name'];
            $result['phone']                    = $data['phone'];
            $result['email']                    = $data['email'] ?? null;
            $result['identity']                 = $data['identity'];
            $result['address']                  = $data['address'] ?? null;
            if(!empty($dataForm['type'])) $result['type'] = $dataForm['type'];
        }
        return $result;
    }
}