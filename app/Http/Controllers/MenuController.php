<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Promo;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function search(Request $request)
    {
        // dd($request);
        $menu = Menu::where('name', 'like', "%{$request->search}%")->paginate(10);
        return view('master.index', ['menus' => $menu, 'title' => 'Search for ' . $request->search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:3072',
            'category' => 'required',
            'promo_awal' => 'required',
            'promo_akhir' => 'required',
            'harga_promo' => 'required',
        ]);

        $validateData['image'] = $request->file('image')->store('menu-images');

        Menu::create($validateData);
        return redirect()->intended('/master');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        $menu = Menu::where('category', $category)/*->latest()->filter(request(['search']))*/->paginate(8)->withQueryString();
        // dd($menu);
        // masalah klo gabungin where sama latest()
        return view('viewdetails.index', ['title' =>  $category, 'menus' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:3072',
            'category' => 'required',
            'promo_awal' => 'required',
            'promo_akhir' => 'required',
            'harga_promo' => 'required',
        ]);

        $validateData['image'] = $request->file('image')->store('menu-images');

        Menu::where('id', $request->id)->update($validateData);
        return redirect()->intended('/master');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::where('id', $id)->delete();
        return redirect()->intended('/master');
    }
}
