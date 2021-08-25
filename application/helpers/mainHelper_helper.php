<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');


 if ( ! function_exists('imgUrl')) {
    function imgUrl($image) {
        return base_url()."assets/frontAssets/img/$image";
    }
}

if ( ! function_exists('cssUrl')) {
    function cssUrl($file) {
        return base_url()."assets/back/css/$file";
    }
}

if ( ! function_exists('vendorUrl')) {
    function vendorUrl($file,$specified) {
        $url="";
        if($specified!=""){
            $url=base_url()."assets/back/vendor/$specified/$file";
        }
        else{
            $url=base_url()."assets/back/vendor/$file";
        }
        return $url;
    }
}

if ( ! function_exists('jsUrl')) {
    function jsUrl($file,$specified) {
        $url="";
        if($specified!=""){
            $url=base_url()."assets/back/js/$specified/$file";
        }
        else{
            $url=base_url()."assets/back/js/$file";
        }
        return $url;
    }
}

if ( ! function_exists('getControllerUrl')) {
    function getControllerUrl($function,$arg) 
    {
        if($arg==null){
            return base_url()."mainController/$function";
        }
        return base_url()."mainController/$function/$arg";
    }
}
if ( ! function_exists('getControllerUrlAdmin')) {
    function getControllerUrlAdmin($function,$arg) 
    {
        if($arg==null){
            return base_url()."adminlogin/$function";
        }
        return base_url()."adminlogin/$function/$arg";
    }
}
if ( ! function_exists('getUploadControllerUrl')) {
    function getUploadControllerUrl($function,$arg) 
    {
        if($arg==null){
            return base_url()."upload_controller/$function";
        }
        return base_url()."upload_controller/$function/$arg";
    }
}