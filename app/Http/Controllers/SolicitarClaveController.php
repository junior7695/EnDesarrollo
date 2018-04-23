<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use App\User;
use Validator;
use Ixudra\Curl\Facades\Curl;

class SolicitarClaveController extends Controller
{
    
    function index(){
      return view('key');
          }

      // Funcion que genera el codigo aleatorio para la plantilla
      function plantilla($longitud) {
          $key = '';
          $pattern = '0123456789abcde';
          $max = strlen($pattern)-1;
          for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
          return $key;
     }
     //** Fin funcion plantilla

     //Funcion que genera el codigo para el email //
         function generarCodigo($longitud) {
          $key = '';
          $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
          $max = strlen($pattern)-1;
          for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
          return $key;
     }
     //Fin de la funcion email
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
      $email = strtolower($request->email);
      $medio_clave = $request->medio_clave;
      
      if (User::where('email',$email)->exists()) {

      $code = $this->generarCodigo(6);
      $user = User::where('email',$email);
      $user->update([
              'password' => bcrypt($code)
      ]);
      $user_id = User::where('email',$email)->first();
      $numero_cel = $user_id->tlf;
      
      // ** Elimina la sesion si la seccion esta activa **
      DB::table('sessions')->where('user_id',$user_id->id)->delete();

      $return = redirect()->route('login')->with('info','Tu clave fue enviada al correo ' . $email.' '.$code);

      if($medio_clave == 'sms'){
        
      // ** Enviar SMS **s
      $response_json_sms = Curl::to('http://10.70.203.43/api/v2/sms/?api_key=068d3aae740494dcc18c0062b0986a5e1430b9a1bfe357e4cc40cf7555ecc821&to='.$numero_cel.'&msg=SomosVenezuela:%20Su%20clave%20para%20acceder%20al%20sistema%20SomosVenezuela%20es:%20'.$code)
                      ->get();
      return $return;
      }elseif ($medio_clave == 'correo') {

      // ** Correo ** 
      $dates = array('name'=> $request['name'],'code' => $code);
      $this->Email($dates,$email);
      return $return;
    }
        return redirect()->route('login')->with('info','Tu clave fue enviada al correo ' . $email.' '.$code);

      }else{

        return back()->with('status','El correo '.$email. ' no esta resgistrado, por favor contacte a su administrador encargado');

      }

      
    }
    function Email($dates,$email){
      Mail::send('emails.plantilla'.$this->plantilla(1),$dates, function($message) use ($email){
        $message->subject('Bienvenido a la plataforma');
        $message->to($email);
        $message->from('desarrollo@carnetdelapatria.gob.ve','SomosVenezuela');
      });
      
    }
}
