<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\ContentFilters\CategoryFilter;
use App\Http\Filters\ContentFilters\GlobalSearchFilter;
use App\Http\Filters\ContentFilters\OperatorFilter;
use App\Content;

class FrontController extends Controller
{
    /**
     * Method index
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function home(Request $request)
    {
        $populars = Content::search($this->filters())->latest()->get();

        return view("front.home", compact("populars"));
    }

    /**
     * Method listContents
     *
     * return contents depend on some request value like (category_id, search_value, op_id)
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function listContents(Request $request)
    {
        $contents = Content::select('contents.*','contents.id as content_id')->with(['category'])->search($this->filters())->paginate(get_limit_paginate());

        if($request->ajax()) {
            $html = view("front.load_contents", compact("contents"))->render();
            return Response(array('html' => $html));
        }

        return view("front.contents", compact("contents"));
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
