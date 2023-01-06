<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model {
    use HasFactory;
    protected $table        = 'bank_info';
    protected $fillable     = [
        'name',
        'number',
        'branch',
        'primary'
    ];
    public $timestamps = true;

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new Bank();
            foreach($params as $key => $value) $model->{$key}  = $value;
            $model->save();
            $id         = $model->id;
        }
        return $id;
    }

    public static function updateItem($id, $params){
        $flag           = false;
        if(!empty($id)&&!empty($params)){
            $model      = self::find($id);
            foreach($params as $key => $value) $model->{$key}  = $value;
            $flag       = $model->update();
        }
        return $flag;
    }

    // public function contentspin() {
    //     return $this->hasOne(\App\Models\Contentspin::class, 'seo_id', 'id');
    // }

    // public function checkSeos() {
    //     return $this->hasMany(\App\Models\CheckSeo::class, 'seo_id', 'id');
    // }
}
