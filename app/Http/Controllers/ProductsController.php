<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $data = [
            'title' => ' Товары',
            'pagetitle' => ' Товары'
        ];

        $top_page = "products";

        return view ('pages.products.index',compact(['data','products','top_page']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => ' Добавить продукт',
            'pagetitle' => ' Добавить продукт'
        ];
        $top_page = "products";
        return view ('pages.products.create',compact(['data','top_page']));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = [
            'title' => ' Добавить продукт',
            'pagetitle' => ' Добавить продукт'
        ];
        $top_page = "products";


        Products::create (request()->all());

//        redirect ('providers/razdels');
        return view ('pages.products.store',compact(['data','top_page']));
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        $data = [
            'title' => ' Редактирование продукта',
            'pagetitle' => 'Редактирование продукта'
        ];
        $top_page = "products";
        return view('pages.products.edit', compact(['product','data','top_page']));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Products $product)
    {
        $product->update(\request()->all());
        $top_page = "products";

//        return redirect("/providers/razdels_pr");
        return view ('pages.products.store',compact(['top_page']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
