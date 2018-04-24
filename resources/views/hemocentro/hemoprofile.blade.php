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
      <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">

                <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Hemocentro</label>
            <input type="text" class="form-control" name="name" id="exampleInputHemocentro1" placeholder="Insira o nome hemocentro">
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Endereço</label>
            <input type="text" class="form-control" name="address" id="exampleInputPassword1" placeholder="Insira o endereço onde se localiza o hemocentro">
          </div>
          <div>
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Insira um email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cidade</label>
            <input type="text" class="form-control" name="city"  id="exampleInputPassword1" placeholder="Insira a cidade onde se localiza o hemocentro">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
            <select name="state" >
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO" selected>Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
            </select>
          </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Telefone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira o telefone do hemocentro">
          </div>
      </div>
        
    </form>
  </div>  
</div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
</section>

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$hemocentro->id}}">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $hemocentro->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="telefone" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="email" value="{{ $hemocentro->telefone }}" required>

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
