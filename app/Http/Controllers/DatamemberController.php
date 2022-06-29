<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datamember;

class DatamemberController extends Controller
{
    //
    public function index()
    {
        return view('livewire.datamember.datamember-index');
    }



}
