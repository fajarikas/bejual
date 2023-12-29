<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        return view('admin.market');
    }

    public function create()
    {
        return view('admin.addmarket');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required'
        ]);

        $photoName = time() . '.' . $request->photo->extension();

        $request->image->storeAs(('public/images'), $photoName);

        $market = new \App\Models\Market;
        $market->name = $request->get('name');
        $market->price = $request->get('price');
        $market->photo = $photoName;
        $market->status = $request->get('status');
        $market->save();

        // Market::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'photo' => $photoName,
        //     'status' => $request->status
        // ]);


        return redirect()->route('market')->with('status', 'Market added successfully.');
    }

    public function show($id)
    {
        $market = \App\Models\Market::findOrFail($id);
        return view('admin.showmarket', ['market' => $market]);
    }
}
