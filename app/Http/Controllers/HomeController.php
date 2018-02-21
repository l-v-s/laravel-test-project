<?php

namespace App\Http\Controllers;

use App\User;
use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain)
    {
        /*$data = [
            'title' => ' Гостевая книга на Ларовел!',
            //'pagetitle' => '<i style="color:orange"> Гостевая книга</i>'
            'users'=> [
                ['name' => 'Vasya'],
                ['name' => 'Igor'],
                ['name' => 'Dime'],
            ]
        ];
        return view ('pages.messages.index',$data);
        */

        //$posts = DB:table ('posts')->

        //$posts = DB::table('posts')->get();
        $posts = Post::all();
        $data = [
            'title' => ' Блог на Ларовел!',
            'messages' => Message::latest()->paginate(3),
            'count' => Message::count(),
            'pagetitle' => 'Блог - список статей'
        ];


        //return view ('pages.messages.index',$data);
        return view ('pages.posts.index',compact(['posts','data']));
        //return view ('pages.messages.index')->with('title','Гост книга');
        //return view ('pages.messages.index')->with($data);
        /*$title = ' Гостевая книга на Ларовел!';
        $pagetitle = 'Гостевая книга';
        return view ('pages.messages.index',compact('title','pagetitle'));*/
        //return 'HomeController action index - '.route('home');

    }
    //public function show ($id)
    public function show (Post $post){
        //$post =Post::find($id); - аналог того, что есть в скобках
        //функция ожидает переменную, которая будет ключем в папке Post
        //и добавляет ее в переменную $post
        //название переменной ($post) доллжно совпадать с названием передаваемой
        //переменной в web.php
        //называется - неявное привязывание модели

        dd ('изменения2');
        $data = ['pagetitle' => 'Блог - статья'        ];
        return view('pages.posts.show', compact(['post','data']));
    }

    public function create (){
        $data = [
            'title' => ' Блог на Ларовел!',
            'pagetitle' => 'Добавление поста'
        ];
        return view('pages.posts.create', compact(['data']));
    }

    public function store (){
        /*$post = new Post;
        $post->title = request('title');
        $post->alias = request('alias');
        $post->intro = request('intro');
        $post->body = request('body');
        $post->save();*/

        /*Post::create([
            'title' => request('title'),
            'alias' => request('alias'),
            'intro' => request('intro'),
            'body' => request('body')
        ]);
        */
        $this->validate(request(),[
            'title' => 'required|min:1',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);
        Post::create(
           //request()->all()
            request (['title','alias','intro','body'])
        );
        return redirect("/");
    }

    public function edit (Post $post){
        $data = [
            'title' => ' Блог на Ларовел!',
            'pagetitle' => 'Редактирование поста'
        ];
        return view('pages.posts.edit', compact(['post','data']));
    }

    public function update (Post $post){

        //dd(request()->all());

        $this->validate(request(),[
            'title' => 'required|min:1',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);

        $post->update(\request(['title','alias','intro','body']));

        return redirect("/");
    }

    public function destroy (Post $post){

        $post->delete();

        return redirect("/");
    }

    /*
    public function edit($id)
    {
        $data = [
            'title' => ' Гостевая книга на Ларовел!',
            'pagetitle' => 'Редактирование: Гостевая книга'
        ];
        return view ('pages.messages.edit',$data);
    }

    public function AddMessage()
    {
        $data = [
            'title' => ' добавление',
            'pagetitle' => 'добав'
        ];
        return view ('pages.messages.add',$data);
    }

    public function PromRazdelList()
    {
        $data = [
            'title' => ' Разделы',
            'pagetitle' => ' Список разделов'
        ];
        return view ('pages.prom-razdel.prom-razdel-list',$data);
    }


    public function AddPromRazdel()
    {
        $data = [
            'title' => ' Добавить раздел',
            'pagetitle' => ' Добавить раздел'
        ];
        return view ('pages.prom-razdel.add-prom-razdel',$data);
    }
*/

}
