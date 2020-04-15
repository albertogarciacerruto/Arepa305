<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function list_users()
    {
      $list_users = \DB::table('users')->select('id','name','lastname')->paginate(5);  
      return view('list_users', compact('list_users'));
    }

    public function destroy($list_users)
    {
        $user = \DB::table('users')->where('id', '=', $list_users)->delete();
         
        $list_users = \DB::table('users')->select('id','name','lastname')->paginate(5);
        return redirect('/home');  
    }

    public function edit_headers()
    {
            $fondo = \DB::table('headers')->select('fondo')->where('id','=',1)->get();
            $logo = \DB::table('headers')->select('logo')->where('id','=',1)->get();
            $title = \DB::table('headers')->select('title')->where('id','=',1)->get();
            $descripcion = \DB::table('headers')->select('descripcion')->where('id','=',1)->get();

            return view('headers', compact('fondo','logo','title', 'descripcion'));


            $nuevaFoto1 = $reque->file('image_f1')->store('public'); 
            $nuevaFoto2 = $reque->file('image_lg')->store('public'); 



            $headers1 = \DB::table('headers')
            ->where('id', 1)
            ->update(['fondo' => $nuevaFoto1]);

            $headers2 = \DB::table('headers')
            ->where('id', 1)
            ->update(['logo' => $nuevaFoto2]);

    }

    public function update_headers(Request $reque)
    {
        $nuevoT = $reque->title;
        $nuevoD = $reque->descripcion;

            if ($reque->hasFile('image_f1'))
            {
               $nuevaFoto1 = $reque->file('image_f1')->store('public'); 
               $photo1 = \DB::table('headers')->where('id', 1)->update(['fondo' => $nuevaFoto1]);
            }
            if ($reque->hasFile('image_lg'))
            {
               $nuevaFoto2 = $reque->file('image_lg')->store('public'); 
               $photo2 = \DB::table('headers')->where('id', 1)->update(['logo' => $nuevaFoto2]);
            }

            $titulo1 = \DB::table('headers')
            ->where('id', 1)
            ->update(['title' => $nuevoT]);

            $titulo2 = \DB::table('headers')
            ->where('id', 1)
            ->update(['descripcion' => $nuevoD]);

            return view('home');
    }

    public function edit_nosotros()
    {
            $title = \DB::table('nosotros')->select('title')->where('id','=',1)->get();
            $des1 = \DB::table('nosotros')->select('descripcion1')->where('id','=',1)->get();
            $des2 = \DB::table('nosotros')->select('descripcion2')->where('id','=',1)->get();
            $red1 = \DB::table('nosotros')->select('red1')->where('id','=',1)->get();
            $red2 = \DB::table('nosotros')->select('red2')->where('id','=',1)->get();
            $foto1 = \DB::table('nosotros')->select('foto1')->where('id','=',1)->get();

            return view('nosotros', compact('title','des1','des2', 'red1', 'red2','foto1'));


            $nuevaFoto1 = $reque->file('image_1')->store('public'); 

            $nosotros1 = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['foto1' => $nuevaFoto1]);


    }

    public function update_nosotros(Request $reque)
    {
        $nuevoT = $reque->title;
        $nuevaDes1 = $reque->des1;
        $nuevaDes2 = $reque->des2;
        $nuevaR1 = $reque->red1;
        $nuevaR2 = $reque->red2;

            if ($reque->hasFile('image_1'))
            {
               $nuevaFoto1 = $reque->file('image_1')->store('public'); 
               $photo1 = \DB::table('nosotros')->where('id', 1)->update(['foto1' => $nuevaFoto1]);
            }

            $titulo = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['title' => $nuevoT]);

            $des1 = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['descripcion1' => $nuevaDes1]);

            $des2 = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['descripcion2' => $nuevaDes2]);

            $red1 = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['red1' => $nuevaR1]);

            $red2 = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['red2' => $nuevaR2]);

            return view('home');
    }
    
    public function edit_menu()
    {
            $title = \DB::table('menus')->select('title')->where('id','=',1)->get();
            $name1 = \DB::table('menus')->select('name1')->where('id','=',1)->get();
            $name2 = \DB::table('menus')->select('name2')->where('id','=',1)->get();
            $name3 = \DB::table('menus')->select('name3')->where('id','=',1)->get();
            $name4 = \DB::table('menus')->select('name4')->where('id','=',1)->get();
            $name5 = \DB::table('menus')->select('name5')->where('id','=',1)->get();
            $name6 = \DB::table('menus')->select('name6')->where('id','=',1)->get();
            $name7 = \DB::table('menus')->select('name7')->where('id','=',1)->get();
            $name8 = \DB::table('menus')->select('name8')->where('id','=',1)->get();
            $name9 = \DB::table('menus')->select('name9')->where('id','=',1)->get();
            $name10 = \DB::table('menus')->select('name10')->where('id','=',1)->get();
            $des1 = \DB::table('menus')->select('descripcion1')->where('id','=',1)->get();
            $des2 = \DB::table('menus')->select('descripcion2')->where('id','=',1)->get();
            $des3 = \DB::table('menus')->select('descripcion3')->where('id','=',1)->get();
            $des4 = \DB::table('menus')->select('descripcion4')->where('id','=',1)->get();
            $des5 = \DB::table('menus')->select('descripcion5')->where('id','=',1)->get();
            $des6 = \DB::table('menus')->select('descripcion6')->where('id','=',1)->get();
            $des7 = \DB::table('menus')->select('descripcion7')->where('id','=',1)->get();
            $des8 = \DB::table('menus')->select('descripcion8')->where('id','=',1)->get();
            $des9 = \DB::table('menus')->select('descripcion9')->where('id','=',1)->get();
            $des10 = \DB::table('menus')->select('descripcion10')->where('id','=',1)->get();

            return view('menu', compact('title','name1','name2', 'name3', 'name4', 'name5','name6', 'name7', 'name8', 'name9', 'name10', 'des1', 'des2', 'des3', 'des4', 'des5', 'des6', 'des7', 'des8', 'des9', 'des10'));

    }

    public function update_menu(Request $reque)
    {
        $nuevoT = $reque->title;
        $nuevoName1 = $reque->name1;
        $nuevoName2 = $reque->name2;
        $nuevoName3 = $reque->name3;
        $nuevoName4 = $reque->name4;
        $nuevoName5 = $reque->name5;
        $nuevoName6 = $reque->name6;
        $nuevoName7 = $reque->name7;
        $nuevoName8 = $reque->name8;
        $nuevoName9 = $reque->name9;
        $nuevoName10 = $reque->name10;
        $nuevoDes1 = $reque->des1;
        $nuevoDes2 = $reque->des2;
        $nuevoDes3 = $reque->des3;
        $nuevoDes4 = $reque->des4;
        $nuevoDes5 = $reque->des5;
        $nuevoDes6 = $reque->des6;
        $nuevoDes7 = $reque->des7;
        $nuevoDes8 = $reque->des8;
        $nuevoDes9 = $reque->des9;
        $nuevoDes10 = $reque->des10;


            $titulo = \DB::table('menus')
            ->where('id', 1)
            ->update(['title' => $nuevoT]);

            $name1 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name1' => $nuevoName1]);

            $name2 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name2' => $nuevoName2]);

            $name3 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name3' => $nuevoName3]);

            $name4 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name4' => $nuevoName4]);

            $name5 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name5' => $nuevoName5]);

            $name6 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name6' => $nuevoName6]);

            $name7 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name7' => $nuevoName7]);

            $name8 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name8' => $nuevoName8]);

            $name9 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name9' => $nuevoName9]);

            $name10 = \DB::table('menus')
            ->where('id', 1)
            ->update(['name10' => $nuevoName10]);

            $des1 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion1' => $nuevoDes1]);

            $des2 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion2' => $nuevoDes2]);

            $des3 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion3' => $nuevoDes3]);

            $des4 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion4' => $nuevoDes4]);

            $des5 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion5' => $nuevoDes5]);

            $des6 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion6' => $nuevoDes6]);

            $des7 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion7' => $nuevoDes7]);

            $des8 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion8' => $nuevoDes8]);

            $des9 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion9' => $nuevoDes9]);

            $des10 = \DB::table('menus')
            ->where('id', 1)
            ->update(['descripcion10' => $nuevoDes10]);


            return view('home');
    }

    public function edit_ubicacion()
    {
            $title = \DB::table('contacts')->select('title')->where('id','=',1)->get();
            $phone = \DB::table('contacts')->select('phone')->where('id','=',1)->get();
            $email = \DB::table('contacts')->select('email')->where('id','=',1)->get();
            $address = \DB::table('contacts')->select('address')->where('id','=',1)->get();
            $fondo = \DB::table('contacts')->select('fondo')->where('id','=',1)->get();
            $horario1 = \DB::table('contacts')->select('horario1')->where('id','=',1)->get();
            $horario2 = \DB::table('contacts')->select('horario2')->where('id','=',1)->get();
            $horario3 = \DB::table('contacts')->select('horario3')->where('id','=',1)->get();

            return view('ubicacion', compact('title','phone','email', 'address', 'fondo', 'horario1', 'horario2', 'horario3'));

            $nuevaFoto2 = $reque->file('image_f2')->store('public'); 

            $nosotros1 = \DB::table('nosotros')
            ->where('id', 1)
            ->update(['fondo' => $nuevaFoto2]);

    }

    public function update_ubicacion(Request $reque)
    {
        $nuevoT = $reque->title;
        $nuevoPhone = $reque->phone;
        $nuevoEmail = $reque->email;
        $nuevaDir = $reque->address;
        $nuevoHorario1 = $reque->horario1;
        $nuevoHorario2 = $reque->horario2;
        $nuevoHorario3 = $reque->horario3;


            if ($reque->hasFile('image_f2'))
            {
               $nuevaFoto2 = $reque->file('image_f2')->store('public'); 
               $photo2 = \DB::table('contacts')->where('id', 1)->update(['fondo' => $nuevaFoto2]);
            }

            $titulo = \DB::table('contacts')
            ->where('id', 1)
            ->update(['title' => $nuevoT]);

            $phone = \DB::table('contacts')
            ->where('id', 1)
            ->update(['phone' => $nuevoPhone]);

            $email = \DB::table('contacts')
            ->where('id', 1)
            ->update(['email' => $nuevoEmail]);

            $address = \DB::table('contacts')
            ->where('id', 1)
            ->update(['address' => $nuevaDir]);

            $horario1 = \DB::table('contacts')
            ->where('id', 1)
            ->update(['horario1' => $nuevoHorario1]);

            $horario2 = \DB::table('contacts')
            ->where('id', 1)
            ->update(['horario2' => $nuevoHorario2]);

            $horario3 = \DB::table('contacts')
            ->where('id', 1)
            ->update(['horario3' => $nuevoHorario3]);

            return view('home');
    }

    public function edit_galeria()
    {
            $title = \DB::table('platos')->select('title')->where('id','=',1)->get();


            return view('galeria', compact('title'));

    }

    public function update_galeria(Request $reque)
    {
        $nuevoT = $reque->title;
        
            $titulo = \DB::table('platos')
            ->where('id', 1)
            ->update(['title' => $nuevoT]);

            return view('home');
    }

    public function edit_arepa()
    {

            $cachapa1 = \DB::table('platos')->select('arepa1')->where('id','=',1)->get();
            $cachapa2 = \DB::table('platos')->select('arepa2')->where('id','=',1)->get();
            $cachapa3 = \DB::table('platos')->select('arepa3')->where('id','=',1)->get();
            $cachapa4 = \DB::table('platos')->select('arepa4')->where('id','=',1)->get();
            $cachapa5 = \DB::table('platos')->select('arepa5')->where('id','=',1)->get();
            $cachapa6 = \DB::table('platos')->select('arepa6')->where('id','=',1)->get();



            return view('arepa', compact('arepa1', 'arepa2', 'arepa3', 'arepa4', 'arepa5', 'arepa6'));

    }

    public function update_arepa(Request $reque)
    {
        

            if ($reque->hasFile('image_f1'))
            {
               $nuevaFoto1 = $reque->file('image_f1')->store('public'); 
               $photo1 = \DB::table('platos')->where('id', 1)->update(['arepa1' => $nuevaFoto1]);
            }
            if ($reque->hasFile('image_f2'))
            {
               $nuevaFoto2 = $reque->file('image_f2')->store('public'); 
               $photo2 = \DB::table('platos')->where('id', 1)->update(['arepa2' => $nuevaFoto2]);
            }
            if ($reque->hasFile('image_f3'))
            {
               $nuevaFoto3 = $reque->file('image_f3')->store('public'); 
               $photo3 = \DB::table('platos')->where('id', 1)->update(['arepa3' => $nuevaFoto3]);
            }
            if ($reque->hasFile('image_f4'))
            {
               $nuevaFoto4 = $reque->file('image_f4')->store('public'); 
               $photo4 = \DB::table('platos')->where('id', 1)->update(['arepa4' => $nuevaFoto4]);
            }
            if ($reque->hasFile('image_f5'))
            {
               $nuevaFoto5 = $reque->file('image_f5')->store('public'); 
               $photo5 = \DB::table('platos')->where('id', 1)->update(['arepa5' => $nuevaFoto5]);
            }
            if ($reque->hasFile('image_f6'))
            {
               $nuevaFoto6 = $reque->file('image_f6')->store('public'); 
               $photo6 = \DB::table('platos')->where('id', 1)->update(['arepa6' => $nuevaFoto6]);
            }
            return view('home');
    }

        public function edit_cachapa()
    {

            $cachapa1 = \DB::table('platos')->select('cachapa1')->where('id','=',1)->get();
            $cachapa2 = \DB::table('platos')->select('cachapa2')->where('id','=',1)->get();
            $cachapa3 = \DB::table('platos')->select('cachapa3')->where('id','=',1)->get();
            $cachapa4 = \DB::table('platos')->select('cachapa4')->where('id','=',1)->get();
            $cachapa5 = \DB::table('platos')->select('cachapa5')->where('id','=',1)->get();
            $cachapa6 = \DB::table('platos')->select('cachapa6')->where('id','=',1)->get();



            return view('cachapa', compact('cachapa1', 'cachapa2', 'cachapa3', 'cachapa4', 'cachapa5', 'cachapa6'));

    }

    public function update_cachapa(Request $reque)
    {
        

            if ($reque->hasFile('image_f7'))
            {
               $nuevaFoto7 = $reque->file('image_f7')->store('public'); 
               $photo7 = \DB::table('platos')->where('id', 1)->update(['desayuno1' => $nuevaFoto7]);
            }
            if ($reque->hasFile('image_f8'))
            {
               $nuevaFoto8 = $reque->file('image_f8')->store('public'); 
               $photo8 = \DB::table('platos')->where('id', 1)->update(['desayuno2' => $nuevaFoto8]);
            }
            if ($reque->hasFile('image_f9'))
            {
               $nuevaFoto9 = $reque->file('image_f9')->store('public'); 
               $photo9 = \DB::table('platos')->where('id', 1)->update(['desayuno3' => $nuevaFoto9]);
            }
            if ($reque->hasFile('image_f10'))
            {
               $nuevaFoto10 = $reque->file('image_f10')->store('public'); 
               $photo10 = \DB::table('platos')->where('id', 1)->update(['desayuno4' => $nuevaFoto10]);
            }
            if ($reque->hasFile('image_f11'))
            {
               $nuevaFoto11 = $reque->file('image_f11')->store('public'); 
               $photo11 = \DB::table('platos')->where('id', 1)->update(['desayuno5' => $nuevaFoto11]);
            }
            if ($reque->hasFile('image_f12'))
            {
               $nuevaFoto12 = $reque->file('image_f12')->store('public'); 
               $photo12 = \DB::table('platos')->where('id', 1)->update(['desayuno6' => $nuevaFoto12]);
            }


            return view('home');
    }

     public function edit_desayuno()
    {

            $cachapa1 = \DB::table('platos')->select('desayuno1')->where('id','=',1)->get();
            $cachapa2 = \DB::table('platos')->select('desayuno2')->where('id','=',1)->get();
            $cachapa3 = \DB::table('platos')->select('desayuno3')->where('id','=',1)->get();
            $cachapa4 = \DB::table('platos')->select('desayuno4')->where('id','=',1)->get();
            $cachapa5 = \DB::table('platos')->select('desayuno5')->where('id','=',1)->get();
            $cachapa6 = \DB::table('platos')->select('desayuno6')->where('id','=',1)->get();



            return view('desayuno', compact('desayuno1', 'desayuno2', 'desayuno3', 'desayuno4', 'desayuno5', 'desayuno6'));

    }

    public function update_desayuno(Request $reque)
    {
        

            if ($reque->hasFile('image_f7'))
            {
               $nuevaFoto7 = $reque->file('image_f7')->store('public'); 
               $photo7 = \DB::table('platos')->where('id', 1)->update(['desayuno1' => $nuevaFoto7]);
            }
            if ($reque->hasFile('image_f8'))
            {
               $nuevaFoto8 = $reque->file('image_f8')->store('public'); 
               $photo8 = \DB::table('platos')->where('id', 1)->update(['desayuno2' => $nuevaFoto8]);
            }
            if ($reque->hasFile('image_f9'))
            {
               $nuevaFoto9 = $reque->file('image_f9')->store('public'); 
               $photo9 = \DB::table('platos')->where('id', 1)->update(['desayuno3' => $nuevaFoto9]);
            }
            if ($reque->hasFile('image_f10'))
            {
               $nuevaFoto10 = $reque->file('image_f10')->store('public'); 
               $photo10 = \DB::table('platos')->where('id', 1)->update(['desayuno4' => $nuevaFoto10]);
            }
            if ($reque->hasFile('image_f11'))
            {
               $nuevaFoto11 = $reque->file('image_f11')->store('public'); 
               $photo11 = \DB::table('platos')->where('id', 1)->update(['desayuno5' => $nuevaFoto11]);
            }
            if ($reque->hasFile('image_f12'))
            {
               $nuevaFoto12 = $reque->file('image_f12')->store('public'); 
               $photo12 = \DB::table('platos')->where('id', 1)->update(['desayuno6' => $nuevaFoto12]);
            }

            return view('home');
    }

    public function edit_hamburguesa()
    {

            $cachapa1 = \DB::table('platos')->select('hamburguesa1')->where('id','=',1)->get();
            $cachapa2 = \DB::table('platos')->select('hamburguesa2')->where('id','=',1)->get();
            $cachapa3 = \DB::table('platos')->select('hamburguesa3')->where('id','=',1)->get();
            $cachapa4 = \DB::table('platos')->select('hamburguesa4')->where('id','=',1)->get();
            $cachapa5 = \DB::table('platos')->select('hamburguesa5')->where('id','=',1)->get();
            $cachapa6 = \DB::table('platos')->select('hamburguesa6')->where('id','=',1)->get();



            return view('hamburguesa', compact('hamburguesa1', 'hamburguesa2', 'hamburguesa3', 'hamburguesa4', 'hamburguesa5', 'hamburguesa6'));

    }

    public function update_hamburguesa(Request $reque)
    {
        

            if ($reque->hasFile('image_f19'))
            {
               $nuevaFoto19 = $reque->file('image_f19')->store('public'); 
               $photo19 = \DB::table('platos')->where('id', 1)->update(['hamburguesa1' => $nuevaFoto19]);
            }
            if ($reque->hasFile('image_f20'))
            {
               $nuevaFoto20 = $reque->file('image_f20')->store('public'); 
               $photo20 = \DB::table('platos')->where('id', 1)->update(['hamburguesa2' => $nuevaFoto20]);
            }
            if ($reque->hasFile('image_f21'))
            {
               $nuevaFoto21 = $reque->file('image_f21')->store('public'); 
               $photo21 = \DB::table('platos')->where('id', 1)->update(['hamburguesa3' => $nuevaFoto21]);
            }
            if ($reque->hasFile('image_f22'))
            {
               $nuevaFoto22 = $reque->file('image_f22')->store('public'); 
               $photo22 = \DB::table('platos')->where('id', 1)->update(['hamburguesa4' => $nuevaFoto22]);
            }
            if ($reque->hasFile('image_f23'))
            {
               $nuevaFoto23 = $reque->file('image_f23')->store('public'); 
               $photo23 = \DB::table('platos')->where('id', 1)->update(['hamburguesa5' => $nuevaFoto23]);
            }
            if ($reque->hasFile('image_f24'))
            {
               $nuevaFoto24 = $reque->file('image_f24')->store('public'); 
               $photo24 = \DB::table('platos')->where('id', 1)->update(['hamburguesa6' => $nuevaFoto24]);
            }
            return view('home');
    }

        public function edit_hotdog()
    {

            $hotd1 = \DB::table('platos')->select('hotd1')->where('id','=',1)->get();
            $hotd2 = \DB::table('platos')->select('hotd2')->where('id','=',1)->get();
            $hotd3 = \DB::table('platos')->select('hotd3')->where('id','=',1)->get();
            $hotd4 = \DB::table('platos')->select('hotd4')->where('id','=',1)->get();
            $hotd5 = \DB::table('platos')->select('hotd5')->where('id','=',1)->get();
            $hotd6 = \DB::table('platos')->select('hotd6')->where('id','=',1)->get();



            return view('hotdog', compact('hotdog1', 'hotdog2', 'hotdog3', 'hotdog4', 'hotdog5', 'hotdog6'));

    }

    public function update_hotdog(Request $reque)
    {
        

            if ($reque->hasFile('image_f25'))
            {
               $nuevaFoto25 = $reque->file('image_f25')->store('public'); 
               $photo25 = \DB::table('platos')->where('id', 1)->update(['hotd1' => $nuevaFoto25]);
            }
            if ($reque->hasFile('image_f26'))
            {
               $nuevaFoto26 = $reque->file('image_f26')->store('public'); 
               $photo26 = \DB::table('platos')->where('id', 1)->update(['hotd2' => $nuevaFoto26]);
            }
            if ($reque->hasFile('image_f27'))
            {
               $nuevaFoto27 = $reque->file('image_f27')->store('public'); 
               $photo27 = \DB::table('platos')->where('id', 1)->update(['hotd3' => $nuevaFoto27]);
            }
            if ($reque->hasFile('image_f28'))
            {
               $nuevaFoto28 = $reque->file('image_f28')->store('public'); 
               $photo28 = \DB::table('platos')->where('id', 1)->update(['hotd4' => $nuevaFoto28]);
            }
            if ($reque->hasFile('image_29'))
            {
               $nuevaFoto29 = $reque->file('image_f29')->store('public'); 
               $photo29 = \DB::table('platos')->where('id', 1)->update(['hotd5' => $nuevaFoto29]);
            }
            if ($reque->hasFile('image_f30'))
            {
               $nuevaFoto30 = $reque->file('image_f30')->store('public'); 
               $photo30 = \DB::table('platos')->where('id', 1)->update(['hotd6' => $nuevaFoto30]);
            }
            return view('home');
    }

            public function edit_empanada()
    {

            $empanada1 = \DB::table('platos')->select('empanada1')->where('id','=',1)->get();
            $empanada2 = \DB::table('platos')->select('empanada2')->where('id','=',1)->get();
            $empanada3 = \DB::table('platos')->select('empanada3')->where('id','=',1)->get();
            $empanada4 = \DB::table('platos')->select('empanada4')->where('id','=',1)->get();
            $empanada5 = \DB::table('platos')->select('empanada5')->where('id','=',1)->get();
            $empanada6 = \DB::table('platos')->select('empanada6')->where('id','=',1)->get();



            return view('empanada', compact('empanada1', 'empanada2', 'empanada3', 'empanada4', 'empanada5', 'empanada6'));

    }

    public function update_empanada(Request $reque)
    {
        

            if ($reque->hasFile('image_f31'))
            {
               $nuevaFoto31 = $reque->file('image_f31')->store('public'); 
               $photo31 = \DB::table('platos')->where('id', 1)->update(['empanada1' => $nuevaFoto31]);
            }
            if ($reque->hasFile('image_f32'))
            {
               $nuevaFoto32 = $reque->file('image_f32')->store('public'); 
               $photo32 = \DB::table('platos')->where('id', 1)->update(['empanada2' => $nuevaFoto32]);
            }
            if ($reque->hasFile('image_f33'))
            {
               $nuevaFoto33 = $reque->file('image_f33')->store('public'); 
               $photo33 = \DB::table('platos')->where('id', 1)->update(['empanada3' => $nuevaFoto33]);
            }
            if ($reque->hasFile('image_f34'))
            {
               $nuevaFoto34 = $reque->file('image_f34')->store('public'); 
               $photo34 = \DB::table('platos')->where('id', 1)->update(['empanada4' => $nuevaFoto34]);
            }
            if ($reque->hasFile('image_35'))
            {
               $nuevaFoto35 = $reque->file('image_f35')->store('public'); 
               $photo35 = \DB::table('platos')->where('id', 1)->update(['empanada5' => $nuevaFoto35]);
            }
            if ($reque->hasFile('image_f36'))
            {
               $nuevaFoto36 = $reque->file('image_f36')->store('public'); 
               $photo36 = \DB::table('platos')->where('id', 1)->update(['empanada6' => $nuevaFoto36]);
            }
            return view('home');
    }

    public function edit_pepito()
    {

            $pepito1 = \DB::table('platos')->select('pepito1')->where('id','=',1)->get();
            $pepito2 = \DB::table('platos')->select('pepito2')->where('id','=',1)->get();
            $pepito3 = \DB::table('platos')->select('pepito3')->where('id','=',1)->get();
            $pepito4 = \DB::table('platos')->select('pepito4')->where('id','=',1)->get();
            $pepito5 = \DB::table('platos')->select('pepito5')->where('id','=',1)->get();
            $pepito6 = \DB::table('platos')->select('pepito6')->where('id','=',1)->get();



            return view('pepito', compact('pepito1', 'pepito2', 'pepito3', 'pepito4', 'pepito5', 'pepito6'));

    }

    public function update_pepito(Request $reque)
    {
        

            if ($reque->hasFile('image_f37'))
            {
               $nuevaFoto37 = $reque->file('image_f37')->store('public'); 
               $photo37 = \DB::table('platos')->where('id', 1)->update(['pepito1' => $nuevaFoto37]);
            }
            if ($reque->hasFile('image_f38'))
            {
               $nuevaFoto38 = $reque->file('image_f38')->store('public'); 
               $photo38 = \DB::table('platos')->where('id', 1)->update(['pepito2' => $nuevaFoto38]);
            }
            if ($reque->hasFile('image_f39'))
            {
               $nuevaFoto39 = $reque->file('image_f39')->store('public'); 
               $photo39 = \DB::table('platos')->where('id', 1)->update(['pepito3' => $nuevaFoto39]);
            }
            if ($reque->hasFile('image_f40'))
            {
               $nuevaFoto40 = $reque->file('image_f40')->store('public'); 
               $photo40 = \DB::table('platos')->where('id', 1)->update(['pepito4' => $nuevaFoto40]);
            }
            if ($reque->hasFile('image_41'))
            {
               $nuevaFoto41 = $reque->file('image_f41')->store('public'); 
               $photo41 = \DB::table('platos')->where('id', 1)->update(['pepito5' => $nuevaFoto41]);
            }
            if ($reque->hasFile('image_f42'))
            {
               $nuevaFoto42 = $reque->file('image_f42')->store('public'); 
               $photo42 = \DB::table('platos')->where('id', 1)->update(['pepito6' => $nuevaFoto42]);
            }
            return view('home');
    }

    public function edit_parrilla()
    {

            $parrilla1 = \DB::table('platos')->select('parrilla1')->where('id','=',1)->get();
            $parrilla2 = \DB::table('platos')->select('parrilla2')->where('id','=',1)->get();
            $parrilla3 = \DB::table('platos')->select('parrilla3')->where('id','=',1)->get();
            $parrilla4 = \DB::table('platos')->select('parrilla4')->where('id','=',1)->get();
            $parrilla5 = \DB::table('platos')->select('parrilla5')->where('id','=',1)->get();
            $parrilla6 = \DB::table('platos')->select('parrilla6')->where('id','=',1)->get();



            return view('parrilla', compact('parrilla1', 'parrilla2', 'parrilla3', 'parrilla4', 'parrilla5', 'parrilla6'));

    }

    public function update_parrilla(Request $reque)
    {
        

            if ($reque->hasFile('image_f43'))
            {
               $nuevaFoto43 = $reque->file('image_f43')->store('public'); 
               $photo43 = \DB::table('platos')->where('id', 1)->update(['parrilla1' => $nuevaFoto43]);
            }
            if ($reque->hasFile('image_f44'))
            {
               $nuevaFoto44 = $reque->file('image_f44')->store('public'); 
               $photo44 = \DB::table('platos')->where('id', 1)->update(['parrilla2' => $nuevaFoto44]);
            }
            if ($reque->hasFile('image_f45'))
            {
               $nuevaFoto45 = $reque->file('image_f45')->store('public'); 
               $photo45 = \DB::table('platos')->where('id', 1)->update(['parrilla3' => $nuevaFoto45]);
            }
            if ($reque->hasFile('image_f46'))
            {
               $nuevaFoto46 = $reque->file('image_f46')->store('public'); 
               $photo46 = \DB::table('platos')->where('id', 1)->update(['parrilla4' => $nuevaFoto46]);
            }
            if ($reque->hasFile('image_47'))
            {
               $nuevaFoto47 = $reque->file('image_f47')->store('public'); 
               $photo47 = \DB::table('platos')->where('id', 1)->update(['parrilla5' => $nuevaFoto47]);
            }
            if ($reque->hasFile('image_f48'))
            {
               $nuevaFoto48 = $reque->file('image_f48')->store('public'); 
               $photo48 = \DB::table('platos')->where('id', 1)->update(['parrilla6' => $nuevaFoto48]);
            }
            return view('home');
    }

    public function edit_patacon()
    {

            $patacon1 = \DB::table('platos')->select('patacon1')->where('id','=',1)->get();
            $patacon2 = \DB::table('platos')->select('patacon2')->where('id','=',1)->get();
            $patacon3 = \DB::table('platos')->select('patacon3')->where('id','=',1)->get();
            $patacon4 = \DB::table('platos')->select('patacon4')->where('id','=',1)->get();
            $patacon5 = \DB::table('platos')->select('patacon5')->where('id','=',1)->get();
            $patacon6 = \DB::table('platos')->select('patacon6')->where('id','=',1)->get();



            return view('patacon', compact('patacon1', 'patacon2', 'patacon3', 'patacon4', 'patacon5', 'patacon6'));

    }

    public function update_patacon(Request $reque)
    {
        

             if ($reque->hasFile('image_f49'))
            {
               $nuevaFoto49 = $reque->file('image_f49')->store('public'); 
               $photo49 = \DB::table('platos')->where('id', 1)->update(['patacon1' => $nuevaFoto49]);
            }
            if ($reque->hasFile('image_f50'))
            {
               $nuevaFoto50 = $reque->file('image_f50')->store('public'); 
               $photo50 = \DB::table('platos')->where('id', 1)->update(['patacon2' => $nuevaFoto50]);
            }
            if ($reque->hasFile('image_f51'))
            {
               $nuevaFoto51 = $reque->file('image_f51')->store('public'); 
               $photo51 = \DB::table('platos')->where('id', 1)->update(['patacon3' => $nuevaFoto51]);
            }
            if ($reque->hasFile('image_f52'))
            {
               $nuevaFoto52 = $reque->file('image_f52')->store('public'); 
               $photo52 = \DB::table('platos')->where('id', 1)->update(['patacon4' => $nuevaFoto52]);
            }
            if ($reque->hasFile('image_53'))
            {
               $nuevaFoto53 = $reque->file('image_f53')->store('public'); 
               $photo53 = \DB::table('platos')->where('id', 1)->update(['patacon5' => $nuevaFoto53]);
            }
            if ($reque->hasFile('image_f54'))
            {
               $nuevaFoto54 = $reque->file('image_f54')->store('public'); 
               $photo54 = \DB::table('platos')->where('id', 1)->update(['patacon6' => $nuevaFoto54]);
            }
            return view('home');
    }

    public function edit_bebida()
    {

            $bebida1 = \DB::table('platos')->select('bebida1')->where('id','=',1)->get();
            $bebida2 = \DB::table('platos')->select('bebida2')->where('id','=',1)->get();
            $bebida3 = \DB::table('platos')->select('bebida3')->where('id','=',1)->get();
            $bebida4 = \DB::table('platos')->select('bebida4')->where('id','=',1)->get();
            $bebida5 = \DB::table('platos')->select('bebida5')->where('id','=',1)->get();
            $bebida6 = \DB::table('platos')->select('bebida6')->where('id','=',1)->get();


            return view('bebida', compact('bebida1', 'bebida2', 'bebida3', 'bebida4', 'bebida5', 'bebida6'));

    }

    public function update_bebida(Request $reque)
    {
        

            if ($reque->hasFile('image_f55'))
            {
               $nuevaFoto55 = $reque->file('image_f55')->store('public'); 
               $photo55 = \DB::table('platos')->where('id', 1)->update(['bebida1' => $nuevaFoto55]);
            }
            if ($reque->hasFile('image_f56'))
            {
               $nuevaFoto56 = $reque->file('image_f56')->store('public'); 
               $photo56 = \DB::table('platos')->where('id', 1)->update(['bebida2' => $nuevaFoto56]);
            }
            if ($reque->hasFile('image_f57'))
            {
               $nuevaFoto57 = $reque->file('image_f57')->store('public'); 
               $photo57 = \DB::table('platos')->where('id', 1)->update(['bebida3' => $nuevaFoto57]);
            }
            if ($reque->hasFile('image_f58'))
            {
               $nuevaFoto58 = $reque->file('image_f58')->store('public'); 
               $photo58 = \DB::table('platos')->where('id', 1)->update(['bebida4' => $nuevaFoto58]);
            }
            if ($reque->hasFile('image_59'))
            {
               $nuevaFoto59 = $reque->file('image_f59')->store('public'); 
               $photo59 = \DB::table('platos')->where('id', 1)->update(['bebida5' => $nuevaFoto59]);
            }
            if ($reque->hasFile('image_f60'))
            {
               $nuevaFoto60 = $reque->file('image_f60')->store('public'); 
               $photo60 = \DB::table('platos')->where('id', 1)->update(['bebida6' => $nuevaFoto60]);
            }

            return view('home');
    }
}
