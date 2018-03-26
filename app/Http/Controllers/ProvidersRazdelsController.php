<?php

namespace App\Http\Controllers;

use App\Providers_razdel;
use Illuminate\Http\Request;
use App\Razdel;

use App\User;
use DummyFullModelClass;
use App\lain;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Menu as LavMenu;
use App\Menu;

class ProvidersRazdelsController extends Controller
{
    public function index()
    {
        $razdels = Razdel::all();
        $data = [
            'title' => ' Разделы',
            'pagetitle' => ' Разделы'
        ];


        $table = [['id' => '0',
            'title' => 'home',
            'path' => '/',
            'parent_id' => ''
        ],
            ['id' => '1',
                'title' => 'about',
                'path' => '/',
                'parent_id' => ''
            ]];

        $arrMenu = $table;

        $top_page = "providers";
        return view ('pages.providers.razdels_pr',compact(['data','razdels','top_page']));
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
        $top_page = "providers";
        return view ('pages.providers.create-razdel_pr',compact(['data','top_page']));

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
        //dd (request()->all());
        /*Razdel::create ([
            'name' => 'aa',
            'opis' => 'oo',
            'parent_razdel_id' => '0',
            'status' => '1'
        ]);
*/
        $data = [
            'title' => ' Добавить раздел',
            'pagetitle' => ' Добавить раздел'
        ];
        $top_page = "providers";


        Providers_razdel::create (request()->all());

//        redirect ('providers/razdels');
        return view ('pages.providers.store-razdel_pr',compact(['data','top_page']));

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
    public function edit(Providers_razdel $razdel)
    {
        //dd($razdel);

        $data = [
            'title' => ' Редактирование раздела',
            'pagetitle' => 'Редактирование раздела'
        ];
        $top_page = "providers";
        return view('pages.providers.edit-razdel_pr', compact(['razdel','data','top_page']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Providers_razdel $razdel)
    {
        $razdel->update(\request()->all());
        $top_page = "providers";

//        return redirect("/providers/razdels_pr");
        return view ('pages.providers.store-razdel_pr',compact(['top_page']));

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
