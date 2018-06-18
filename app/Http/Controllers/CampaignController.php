<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hemocentro;
use App\Models\Campanha;
use App\Models\CampanhaTipoSangue;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
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
        $hemocentro = Hemocentro::where('user', Auth::id())->first();
        $campanhas = Campanha::where('hemocentro', $hemocentro->id)->get();

        return view('hemocentro.campaigns', ['campanhas'=>$campanhas]);
        return view('hemocentro.campaigns', ['hemocentro'=>$hemocentro]);
    }

    public function index1()
    {
        //$hemocentro = Hemocentro::where('user', Auth::id())->first();
        return view('hemocentro.campaigns_new');
    }
    public function create(Request $request)
    {
        //$hemocentro = Hemocentro::where('hemocentro', Auth::id())->first();
        $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'tipoSang' => 'required|array',
           
        ]);

        $hemocentro = Hemocentro::where('user', Auth::id())->first();

        $campanha = new Campanha();
        $campanha->titulo = $request->titulo;
        $campanha->texto = $request->texto;
        $campanha->hemocentro = $hemocentro->id;
        $campanha ->save();
        

        foreach($request->tipoSang as $tipoSangue){
            $campanhaTipoSangue = new CampanhaTipoSangue();
            $campanhaTipoSangue->tipoSang = $tipoSangue;
            $campanhaTipoSangue->campanha = $campanha->id;
            $campanhaTipoSangue->save();           
        }

      
       
        return view('hemocentro.campaigns');
    }

    

    public function edit(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'state' => 'required|string',
            'email' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|numeric'
        ]);
        
        $hemocentro = Hemocentro::where('user', Auth::id())->first();
       
        if($hemocentro->id != $request->id){
            return back()->with('alert_layout', 'alert-danger')->with('alert_message', 'Sem permissão para alterar os dados deste hemocentro.');
        }

        $hemocentro->name = $request->name;
        $hemocentro->email = $request->email;
        $hemocentro->phone = $request->phone;
        $hemocentro->state = $request->state;
        $hemocentro->city = $request->city;
        $hemocentro->address = $request->address;
        $hemocentro->save();

        
        return redirect()->route('hemocentro.dashboard')->with('alert_layout', 'alert-success')->with('alert_message', 'Dados alterados com Sucesso!');
    }

    
}
