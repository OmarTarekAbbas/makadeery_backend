<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\ContentFilters\CategoryFilter;
use App\Http\Filters\ContentFilters\GlobalSearchFilter;
use App\Http\Filters\ContentFilters\OperatorFilter;
use App\Content;
use App\Category;

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
        $categorys = Category::whereNull('parent_id')->get();
        $populars = Content::search($this->filters())->latest()->get();
        return view("front.index", compact("populars","categorys"));
    }

    public function subcategory(Category $category)
    {
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
        $contents = Content::select('contents.*','contents.id as content_id')->with(['category'])->search($this->filters())->paginate(get_limit_paginate());
        // dd($contents);
        if($request->ajax()) {
            $html = view("front.load_contents", compact("contents"))->render();
            return Response(array('html' => $html));
        }
        return view("front.contents", compact("contents"));
    }

    public function meal(Content $content)
    {
        // dd($content);
        return view("front.innercontent", compact("content"));
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
            'search'      => new GlobalSearchFilter,
            'op'          => new OperatorFilter,
            'category_id' => new CategoryFilter
        ];
    }
}
