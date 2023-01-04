<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model {
    use HasFactory;
    protected $table        = 'service_price';
    protected $fillable     = [
        'service_info_id', 
        'name',
        'description',
        'label',
        'price_origin',
        'sale_off',
        'time_sale_off',
        'detail'
    ];

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new ServicePrice();
            foreach($params as $key => $value) $model->{$key}  = $value;
            $model->save();
            $id         = $model->id;
        }
        return $id;
    }

    // public function contentspin() {
    //     return $this->hasOne(\App\Models\Contentspin::class, 'seo_id', 'id');
    // }

    // public function checkSeos() {
    //     return $this->hasMany(\App\Models\CheckSeo::class, 'seo_id', 'id');
    // }
}
