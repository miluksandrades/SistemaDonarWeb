@extends('layouts.hemocentro')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br/>
                    Hemocentro: {{$hemocentro->name}}<br/>
                    Telefone: {{$hemocentro->phone}}<br/>
                    Endereço: {{$hemocentro->address}}<br/>
                    Estado: {{$hemocentro->estate}}<br/>
                    Cidade: {{$hemocentro->city}}
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection