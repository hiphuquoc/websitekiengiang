<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctv extends Model {
    use HasFactory;
    protected $table        = 'ctv_info';
    protected $fillable     = [
        'code', 
        'code_parent',
        'name',
        'phone',
        'email',
        'identity',
        'address',
        'type'
    ];
    public $timestamps = true;

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new Ctv();
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
