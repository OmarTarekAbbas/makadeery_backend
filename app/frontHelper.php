<?php

use App\Setting;
use App\Category;
use App\Provider;
use App\Content;

function get_setting($key) {
    $value = '';
    $setting = Setting::where('key', $key)->first();
    if ($setting)
        $value = $setting->value;

    return $value;
}

function get_providers() {

    $providers = null;
    $providers = Provider::where('title', 'not like', '%دليل المسلم%')->get();
    return $providers;
}

function provider_service($id) {

    $services = $id;
    $services = Category::where('provider_id', $id)->get();
    return $services;
}

// function provider_content($id) {

//     $services = $id;
//     $services = Content::where('provider_id', $id)->get();
//     return $services;
// }

function general_service() {

    $generalProvider = Provider::where('title', 'like', '%دليل المسلم%')->first();
    $generalService = null;
    if ($generalProvider) {
        $generalService = Category::where('provider_id', $generalProvider->id)->get();
    }
    return $generalService;
}

if (! function_exists('categories')) {
    /**
     * Return All Catgeory.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    function categories()
    {
        $categories = \App\Category::operators()->get();
        return $categories;
    }
}

if (! function_exists('get_limit_paginate')) {
    /**
     * Method get_limit_paginate to get paginate size
     *
     * @return string
     */
    function get_limit_paginate()
    {
        return setting('page_limit');
    }
}

if (! function_exists('setting')) {
    /**
     * Method setting
     *
     * @param string $key
     *
     * @return string
     */
    function setting($key)
    {
        $data = \DB::table('settings')->where('key', 'like', '%' . $key . '%')->first();
        return $data ? $data->value : '';
    }
}

function setSlug($title){
  //dd($title);
  $string=  str_slug($title , "-");
  $separator = '-';
  $string = trim($title);
  // Lower case everything
  // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: https://www.php.net/manual/en/function.mb-strtolower.php
  // $string = mb_strtolower($string, "UTF-8");;

  // Make alphanumeric (removes all other characters)
  // this makes the string safe especially when used as a part of a URL
  // this keeps latin characters and arabic charactrs as well
  $string = preg_replace("/[^a-z0-9_\s\-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

  // Remove multiple dashes or whitespaces
  $string = preg_replace("/[\s-]+/", " ", $string);

  $string = str_replace("،", "", $string);
  $string = str_replace(",", "", $string);
  $string = str_replace('/', "", $string);
  $string = str_replace('(', "", $string);
  $string = str_replace(')', "", $string);
  $string = str_replace("\\", "", $string);


  // Convert whitespaces and underscore to the given separator
  $string = preg_replace("/[\s_]/", $separator, $string);

  return $string;
}

