<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Validator;
use DB;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('post/post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
      $this ->validate($request, [
            'titulo' => 'required|max:40',
            'descripcion' => 'required|max:1000',
            'nombreResiduo' => 'required',
            'transporte' => 'required',
        ]);
        $post = new Post;
        $post -> titulo = $request->titulo;
        $post -> descripcion = $request->descripcion;
        $post -> nombreResiduo = $request->nombreResiduo;
        $post -> transporte = $request->transporte;
        $post ->save();
        return 	view('post/post');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $posts = \DB::table('posts')
        ->select('*')
        ->orderBy('id','desc')->get();

        return view('post\posts',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
