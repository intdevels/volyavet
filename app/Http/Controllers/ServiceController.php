<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        $services = Service::query()->with(['service_children'])->get();
        $page_section = Page::query()->where('section_name','services')->first();

        return view('services.index',compact('services','page_section'));
    }


    public function single($slug){

        $services = Service::query()->with(['service_children'])->get();
        $page_section = Page::query()->where('section_name','services')->first();
        $service_single = Service::query()->where('slug',$slug)->firstOrFail();

        $service_single->load('service_children');
        return view('services.index',compact('services','service_single','slug','page_section'));
    }
}
