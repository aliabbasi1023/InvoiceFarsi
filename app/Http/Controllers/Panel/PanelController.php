<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function factorsList()
    {
        return view ('partial.panel.index_user_definition');
    }
    public function FactorsDetails()
    {
        return view ('partial.panel.FactorsDetails');
    }
    public function FactorsComment()
    {
        return view ('partial.panel.FactorsComment');
    }
}
