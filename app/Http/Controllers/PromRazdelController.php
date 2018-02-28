<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Razdel;

use App\User;
use DummyFullModelClass;
use App\lain;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class PromRazdelController extends Controller
{


    /*public function PromRazdelList()
    {

    }*/


    /*public function AddPromRazdel()
    {
        $data = [
            'title' => ' Добавить раздел',
            'pagetitle' => ' Добавить раздел'
        ];
        return view ('pages.prom-razdel.add-prom-razdel',compact('data'));
    }    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $razdels = Razdel::all();
        $data = [
            'title' => ' Разделы',
            'pagetitle' => ' Разделы'
        ];

        return view ('pages.prom-razdel.prom-razdel-list',compact(['data','razdels']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => ' Добавить раздел',
            'pagetitle' => ' Добавить раздел'
        ];
        return view ('pages.prom-razdel.add-prom-razdel',compact('data'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //Razdel::
        //dd (request('name'));
        /*Razdel::create ([
            'name' => 'aa',
            'opis' => 'oo',
            'parent_razdel_id' => '0',
            'status' => '1'
        ]);
*/
        Razdel::create (request()->all());

        redirect ('/prom-razdel/');
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
    public function edit(Razdel $razdel)
    {
        //dd($razdel);

        $data = [
            'title' => ' Редактирование раздела',
            'pagetitle' => 'Редактирование раздела'
        ];
        return view('pages.prom-razdel.edit', compact(['razdel','data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Razdel $razdel)
    {
        $razdel->update(\request()->all());

        return redirect("/prom-razdel");
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
