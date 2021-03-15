<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getIndex(){
        return view('index');
    }
    public function getIndex2(){
        return view('index2');
    }
    public function getBoxed(){
        return view('admin/public/layout/boxed');
    }
    public function getTopNav(){
        return view('admin/public/layout/TopNav');
    }
    public function getFixed(){
        return view('admin/public/layout/fixed');
    }
    public function getCollapsed(){
        return view('admin/public/layout/collapsed');
    }
    public function getWidgets(){
        return view('widgets');
    }
    public function getChartjs(){
        return view('admin/public/charts/Chartjs');
    }
    public function getMorris(){
        return view('admin/public/charts/morris');
    }
    public function getFlot(){
        return view('admin/public/charts/Flot');
    }
    public function getInline(){
        return view('admin/public/charts/Inline');
    }
    public function getGeneral(){
        return view('admin/public/UI/general');
    }
    public function getIcons(){
        return view('admin/public/UI/icons');
    }
    public function getButton(){
        return view('admin/public/UI/button');
    }
    public function getSliders(){
        return view('admin/public/UI/sliders');
    }
    public function getTimeline(){
        return view('admin/public/UI/timeline');
    }
    public function getModals(){
        return view('admin/public/UI/modals');
    }
}
