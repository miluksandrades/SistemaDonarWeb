@extends('layouts.hemocentro')
@section('title')
Perfil do Hemocentro
@endsection

@section('subtitle')
Painel de Controle do Hemocentro
@endsection

@section('site-content')

<section class="content">

<!-- /.row -->
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Informações do hemocentro</h3>
      </div>
      <!--formulario usuarios -->
      <div class="col-md-13">
      <!-- general form elements -->
      <div class="box box-primary">

                <!-- form start -->
      <form role="form" method="POST" action="{{ route('hemocentro.campaigns.create') }}">
        @csrf
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Titulo</label>
                <input type="text"name="titulo" class="form-control" placeholder="Insira o titulo da Campanha">
                
                                @if ($errors->has('titulo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                
            </div>
            <div class="form-group" >
                <label for="exampleInputEmail1">Texto</label>
                <input type="text" name="texto" class="form-control" placeholder="Insira o texto sobre a campanha">
                
                                @if ($errors->has('texto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('texto') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Selecione os tipos sanguíneo: </label>
                <br/>
                <select name="tipoSang[]" class="form-control" multiple id="tipo-sangue">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB+</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    {{--
                     //@foreach($category as category)
                    //    <option value="{{$category}}">{{$category}}</option>
                    //@endforeach
                    --}}
               
                </select>
                
                                @if ($errors->has('tipoSang'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tipoSang') }}</strong>
                                    </span>
                                @endif
            </div>

        </div>  
        <div class="box-footer">
           <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
  </div>  
</div>
</section>
@endsection
