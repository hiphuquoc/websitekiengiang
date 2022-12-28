<?php 

namespace App\Helpers;

class Words {
    public static function convertLocal($content){
        $result             = null;
        $localVN            = 'kiên giang';
        $localURL           = 'kien-giang';
        $localEN            = 'kien giang';
        $localENNotSpace    = 'kiengiang';
        if(!empty($content)){
            $result         = preg_replace('/'.$localVN.'/imsU', ucwords(env('LOCAL_VN')), $content);
            $result         = preg_replace('/'.$localURL.'/imsU', env('LOCAL_URL'), $result);
            $result         = preg_replace('/'.$localEN.'/imsU', env('LOCAL_EN'), $result);
            $result         = preg_replace('/'.$localENNotSpace.'/imsU', env('LOCAL_EN_NOT_SPACE'), $result);
        }
        return $result;
    }
}