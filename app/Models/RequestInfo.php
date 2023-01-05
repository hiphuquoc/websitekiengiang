<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestInfo extends Model {
    use HasFactory;
    protected $table        = 'request_info';
    protected $fillable     = [
        'customer_info_id', 
        'service_info_id',
        'code',
        'note'
    ];
    public $timestamps = true;

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new RequestInfo();
            foreach($params as $key => $value) $model->{$key}  = $value;
            $model->save();
            $id         = $model->id;
        }
        return $id;
    }

    public function customer() {
        return $this->hasOne(\App\Models\Customer::class, 'id', 'customer_info_id');
    }

    public function service() {
        return $this->hasOne(\App\Models\Service::class, 'id', 'service_info_id');
    }

    public function price() {
        return $this->hasOne(\App\Models\ServicePrice::class, 'id', 'service_price_id');
    }

    public function congTacVien() {
        return $this->hasOne(\App\Models\Ctv::class, 'code', 'code');
    }
}
