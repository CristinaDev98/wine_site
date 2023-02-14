<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\File;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
        return view('wines.list')->with('wines', $wines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wine = new Wine();
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'taste' => 'required',
            'alcohol_content' => 'required',
            'year' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->image) {
            $name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/wines'), $name);
            $wine->image = $name;
        }

        $wine->name = $request->name;
        $wine->type = $request->type;
        $wine->taste = $request->taste;
        $wine->alcohol_content = $request->alcohol_content;
        $wine->year = $request->year;
        $wine->save();

        return redirect()->route('wines.index')->with('success', 'Wine created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('wines.show')->with('wine', $wine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        return view('wines.edit')->with('wine', $wine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wine $wine)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'taste' => 'required',
            'alcohol_content' => 'required',
            'year' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->image) {
            $name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/wines'), $name);
            $wine->image = $name;
        }

        $wine->name = $request->name;
        $wine->type = $request->type;
        $wine->taste = $request->taste;
        $wine->alcohol_content = $request->alcohol_content;
        $wine->year = $request->year;
        $wine->save();

        return redirect('/wines')->with('success', 'Wine updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();
        return redirect()->route('wines.index')->with('success', 'Wine deleted successfully.');
    }
}
