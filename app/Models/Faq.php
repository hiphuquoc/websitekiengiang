<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model {
    use HasFactory;
    protected $table        = 'faq';
    protected $fillable     = [
        'question', 
        'answer',
        'relation_table',
        'reference_id'
    ];

    public static function insertItem($params){
        $id             = 0;
        if(!empty($params)){
            $model      = new Seo();
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
