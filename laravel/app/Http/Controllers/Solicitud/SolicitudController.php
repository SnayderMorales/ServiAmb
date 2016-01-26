<?php

namespace App\Http\Controllers\Solicitud;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Solicitud;
use Validator;
use DB;
use Carbon\Carbon;


class SolicitudController extends Controller
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
            'tipoResiduo' => 'required',
            'cantidad' => 'required|max:40',
            'unidad' => 'required',
            'tipoSolicitud' => 'required',

        ]);
        $post = new Solicitud;
        $cont = 0;
        $post -> idSolicitud = $cont+=1;
        $post -> idEmpresa = $cont+=1;
        $post -> titulo = $request->titulo;
        $post -> descripcion = $request->descripcion;
        $post -> tipoResiduo = $request->tipoResiduo;
        $post -> cantidad = $request->cantidad;
        $post -> unidad = $request->unidad;
        $post -> tipoSolicitud = $request->tipoSolicitud;
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
      $solicitudes = \DB::table('solicitudes')
      ->select('*')
      ->orderBy('id','desc')->get();

      return view('post\posts',['solicitudes'=>$solicitudes]);
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
