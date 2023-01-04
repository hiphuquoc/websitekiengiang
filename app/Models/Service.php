<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    use HasFactory;
    protected $table        = 'service_info';
    protected $fillable     = [
        'seo_id', 
        'name',
        'description'
    ];

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new Service();
            foreach($params as $key => $value) $model->{$key}  = $value;
            $model->save();
            $id         = $model->id;
        }
        return $id;
    }

    public function prices() {
        return $this->hasMany(\App\Models\ServicePrice::class, 'service_info_id', 'id');
    }

    // public function contentspin() {
    //     return $this->hasOne(\App\Models\Contentspin::class, 'seo_id', 'id');
    // }

    // public function checkSeos() {
    //     return $this->hasMany(\App\Models\CheckSeo::class, 'seo_id', 'id');
    // }
}
