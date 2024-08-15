<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\LayananFaq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        $layananFaq = LayananFaq::all();
        return view('faq.index', [
            'faq' => $faq,
            'layananFaq' => $layananFaq,
        ]);
    }
}
