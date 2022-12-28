<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    use HasFactory;
    protected $table        = 'customer_info';
    protected $fillable     = [
        'name', 
        'phone',
        'zalo',
        'email',
        'address',
        'company_name',
        'company_phone',
        'company_website',
        'company_address',
        'company_mst'
    ];
    public $timestamps = true;

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new Customer();
            foreach($params as $key => $value) $model->{$key}  = $value;
            $model->save();
            $id         = $model->id;
        }
        return $id;
    }

    // public function keywords() {
    //     return $this->hasMany(\App\Models\Keyword::class, 'seo_id', 'id');
    // }

    // public function contentspin() {
    //     return $this->hasOne(\App\Models\Contentspin::class, 'seo_id', 'id');
    // }

    // public function checkSeos() {
    //     return $this->hasMany(\App\Models\CheckSeo::class, 'seo_id', 'id');
    // }
}
