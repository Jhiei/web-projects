<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\DrinkType;
use App\Models\Drink;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function menu() {
        $data['types'] = ['Special', 'Classic', 'Cold'];

        $data['sp_drinks'] = Drink::select('name', 'image', 'price', 'description')
        ->where('type', 'Special')
        ->get();

        $data['cl_drinks'] = Drink::select('name', 'image', 'price', 'description')
        ->where('type', 'Classic')
        ->get();

        $data['co_drinks'] = Drink::select('name', 'image', 'price', 'description')
        ->where('type', 'Cold')
        ->get();

        return view('pages.menu', $data);
    }

    public function about() {
        $data['dir'] = "images/pages/about/about_1_*.jpg";
        $data['images'] = glob($data['dir']);

        return view('pages.about', $data);
    }

    public function contact() {
        return view('pages.contact');
    }
}
