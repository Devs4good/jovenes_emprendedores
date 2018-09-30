<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function profile($apodo)
    {
      $query = User::where('apodo', $apodo)->first();

      if(!isset($query->id))
      {
          return 'Este perfil no existe';
      }

      return view('perfil', ['data' => $query]);
    }
}
