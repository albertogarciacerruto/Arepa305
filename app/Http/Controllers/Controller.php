<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Header;
use App\Contact;
use App\Nosotro;
use App\Menu;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landpage()
    {
        //Seccion Principal
        $fondo = \DB::table('headers')->select('fondo')->where('id','=',1)->get();
        $logo = \DB::table('headers')->select('logo')->where('id','=',1)->get();
        $title = \DB::table('headers')->select('title')->where('id','=',1)->get();
        $descripcion = \DB::table('headers')->select('descripcion')->where('id','=',1)->get();

        //Seccion Nosotros
        $nosotros = \DB::table('nosotros')->where('id','=',1)->get();

        //Seccion Menu
        $menu = \DB::table('menus')->where('id','=',1)->get();

        //Seccion Ubicacion
        $ubicacion = \DB::table('contacts')->where('id','=',1)->get();

        //Seccion Galeria
        $galeria = \DB::table('platos')->where('id','=',1)->get();

        return view('index',compact('fondo','logo','title', 'descripcion','nosotros','menu', 'ubicacion', 'galeria'));
    }
}
