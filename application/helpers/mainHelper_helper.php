<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');


 if ( ! function_exists('imgUrl')) {
    function imgUrl($image) {
        return base_url()+"assets/images/$image";
    }
}

if ( ! function_exists('cssUrl')) {
    function cssUrl($file) {
        return base_url()."assets/css/$file";
    }
}

if ( ! function_exists('vendorUrl')) {
    function vendorUrl($file,$specified) {
        $url="";
        if($specified!=""){
            $url=base_url()."assets/vendor/$specified/$file";
        }
        else{
            $url=base_url()."assets/vendor/$file";
        }
        return $url;
    }
}

if ( ! function_exists('jsUrl')) {
    function jsUrl($file,$specified) {
        $url="";
        if($specified!=""){
            $url=base_url()."assets/js/$specified/$file";
        }
        else{
            $url=base_url()."assets/js/$file";
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