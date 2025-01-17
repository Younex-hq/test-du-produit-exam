<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrudController extends Controller
{
  public function index()
  {
    $data = [
      'list' => DB::table('crud')->get(),
    ];
    return view('crud.index', $data);
  }

  public function add(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'fcolor' => 'required',
      'email' => 'required|email|unique:crud',
    ]);

    $query = DB::table('crud')->insert([
      'name' => $request->input('name'),
      'fcolor' => $request->input('fcolor'),
      'email' => $request->input('email'),
    ]);

    if ($query) {
      return back()->with('success', 'Les données sont bien insérées.');
    } else {
      return back()->with('fail', 'Un problème est survenu, les données ne sont pas insérées.');
    }
  }
}
