<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Hemocentro;
use App\Models\Campanha;
use App\Models\CampanhaTipoSangue;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/hemocentro/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'titulo' => 'required|string|max:191',
            'texto' => 'required|string|email|max:2000|unique:users',
            'tipoSang' => 'required|string',
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($hemocentro == null)
        {
            return null;
        }

        $campanha = Campanha::create([
            'titulo' => $data['titulo'],
            'texto' => $data['texto'],
            'hemocentro' => $hemocentro->id,
            
        ]);

        if ($campanha == null)
        {
            return null;
        }

       $campanhaTipoSangue =  CampanhaTipoSangue::create([
           'tipoSang' => $data['tipoSang'],
           'campanha' =>$campanha->id,
        ]);

        if($campanhaTipoSangue  == null){

            return null;
        }
        
        return $campanha;
    }
   

}