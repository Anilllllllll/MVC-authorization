<?php

namespace App\Http\Controllers;

use App\Rules\NameRuleEI;
use App\Rules\emailRuleEi;
use Illuminate\Http\Request;

class ValidationEIController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => [new NameRuleEI],
            'email' => [new emailRuleEi],
        ]);

        return "Successfully Added ";
    }
}