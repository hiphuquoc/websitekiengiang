<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestInfo extends Model {
    use HasFactory;
    protected $table        = 'request_info';
    protected $fillable     = [
        'customer_info_id', 
        'reference_type',
        'reference_id',
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
}
