<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends HomeController
{
    public function view($id)
    {
      $query = Evento::find($id);

      if(!$query->id)
      {
          $response = ['error' => 'El Evento no existe'];
          return response()->json($response);
      }

      return view('evento', ['data' => $query]);
    }

    public function publicar(Request $request)
    {
        $profileImage = $request->file('foto');
        $profileImageSaveAsName = time()."-profile." . 
                                  $profileImage->getClientOriginalExtension();

        $upload_path = 'event_img/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);
      
        $request->foto = $profile_image_url;
        
      $query = Evento::create([
          'titulo' => $request->titulo,
          'descripcion' => $request->descripcion,
          'costo' => $request->costo,
          'categoria' => $request->categoria,
          'hora' => $request->hora,
          'ubicacion' => $request->ubicacion,
          'fecha' => $request->fecha,
          'foto' => $profile_image_url,
          'link' => $request->link,

      ]);

      return 'Evento Agregado Exitosamente';
    }

    public function publicar_view()
    {
        return view('publicar_evento');
    }
}
