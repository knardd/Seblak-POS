<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredient = Ingredients::all();
        return compact('ingredient');
    }
}
