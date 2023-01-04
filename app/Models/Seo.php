<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Seo extends Model {
    use HasFactory;
    protected $table        = 'seo';
    protected $fillable     = [
        'title', 
        'description', 
        'image',
        'level', 
        'parent', 
        'ordering',
        'topic', 
        'seo_title', 
        'seo_description',
        'seo_alias', 
        'rating_author_name', 
        'rating_author_star',
        'rating_aggregate_count', 
        'rating_aggregate_star',
        'created_at',
        'updated_at',
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

    public static function updateItem($id, $params){
        $flag           = false;
        if(!empty($id)&&!empty($params)){
            $model      = self::find($id);
            foreach($params as $key => $value) $model->{$key}  = $value;
            $flag       = $model->update();
            /* mỗi lần cập nhật lại slug thì phải build lại slug_full của toàn bộ children */
            if($flag==true){
                $childs = self::select('id', 'level', 'parent', 'slug')
                            ->where('parent', $id)
                            ->get();
                foreach($childs as $child){
                    $urlNew         = self::buildFullUrl($child->slug, $child->level, $child->parent);
                    $paramsUpdate   = ['slug_full' => $urlNew];
                    self::updateItem($child->id, $paramsUpdate);
                }
            }
        }
        return $flag;
    }

    public static function buildFullUrl($slug, $level, $parent){
        $url    = null;
        if(!empty($slug)){
            $infoSeo    = self::select('id', 'slug', 'parent')
                            ->get();
            $url        = $slug;
            for($i=1;$i<$level;++$i){
                foreach($infoSeo as $item){
                    if($item->id==$parent) {
                        $url    = $item->slug.'/'.$url;
                        $parent = $item->parent;
                        break;
                    }
                }
            }
        }
        return $url;
    }

    public function faqs() {
        return $this->hasMany(\App\Models\Faq::class, 'reference_id', 'id');
    }

    public function service() {
        return $this->hasOne(\App\Models\Service::class, 'seo_id', 'id');
    }

    // public function checkSeos() {
    //     return $this->hasMany(\App\Models\CheckSeo::class, 'seo_id', 'id');
    // }
}
