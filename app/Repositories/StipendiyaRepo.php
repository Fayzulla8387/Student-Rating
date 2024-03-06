<?php

namespace App\Repositories;

use App\Models\Stipendiya;
use Illuminate\Support\Facades\Auth;

class StipendiyaRepo
{
       public function getAll()
       {
           return Stipendiya::where('user_id', Auth::user()->id)->get();
       }
}
