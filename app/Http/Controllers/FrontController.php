<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Http\Filters\ContentFilters\CategoryFilter;
use App\Http\Filters\ContentFilters\GlobalSearchFilter;
use App\Http\Filters\ContentFilters\OperatorFilter;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Method index
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function home(Request $request)
    {

      $content = Post::select('posts.url as url')
      ->join('contents','contents.id','=','posts.content_id')
      ->where('operator_id', $request->OpID)
      ->where('published_date', '<=', \Carbon\Carbon::now()->format('Y-m-d'))
      ->where('active', 1)
      ->orderBy('published_date', 'Desc')->first();

      $hjrri_date = $this->hjrri_date_cal();

      $categorys = Category::whereNull('parent_id')->get();
      return view("front.index", compact("categorys",'content', 'hjrri_date'));
    }

    /**
     * Method subcategory
     *
     * @param Category $category
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function subcategory(Category $category)
    {
        $category->load("sub_cats");
        return view("front.subcategory", compact("category"));
    }

    /**
     * Method listContents
     *
     * return contents depend on some request value like (category_id, search_value, op_id)
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function listContents(Request $request)
    {
        $contents = Content::select('contents.*', 'contents.id as content_id')->orderBy('created_at', 'DESC')->with(['category'])->search($this->filters())->paginate(get_limit_paginate());

        if ($request->ajax()) {
            $html = view("front.load_contents", compact("contents"))->render();
            return Response(array('html' => $html));
        }

        return view("front.contents", compact("contents"));
    }

    /**
     * Method meal
     *
     * @param Content $content
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function meal(Content $content)
    {
        $content = Content::whereId($content->id)->operatorsopid()->first();
        $hjrri_date = $this->hjrri_date_cal();
        return view("front.innercontent", compact("content", "hjrri_date"));
    }

    /**
     * Method filters
     *
     * all availabe search value with custom search class
     *
     * @return array
     */
    public function filters()
    {
        return [
            'search' => new GlobalSearchFilter,
            'OpID' => new OperatorFilter,
            'category_id' => new CategoryFilter,
        ];
    }

    /**
     * Method hjrri_date_cal
     *
     * @return array
     */
    public function hjrri_date_cal()
    {
        // Hijri date
        $hjrri_date = array();
        include public_path('plugins/HijriDate.php');
        $hijri = new \HijriDate();

        $current_date = date("Y-m-d", strtotime("+1 day"));

        $hijri = new \HijriDate(strtotime($current_date));

        $day = $hijri->get_day();
        $month = $hijri->get_month_name_ar($hijri->get_month());
        $year = $hijri->get_year();

        $hjrri_date_object = new \stdClass();
        $hjrri_date_object->day = $day;
        $hjrri_date_object->month = $month;
        $hjrri_date_object->year = $year;

        return $hjrri_date_object;
    }

}

