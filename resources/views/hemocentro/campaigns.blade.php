@extends('layouts.hemocentro')

@section('title')
Campanhas
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
        <h3 class="box-title"> Gerencimaento de campanhas</h3>
      </div>
      <!--formulario usuarios -->
      <div>
      <!-- general form elements -->
     <div class="table-responsive col-md-12">
<table class="table table-striped" cellspacing="0" cellpadding="0">
  <thead>
      <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Data de Criação</th>
          <th class="actions">Ações</th>
       </tr>
  </thead>
  <tbody>

      <tr>
          <td>1001</td>
          <td>Salva Anápolis</td>
          <td>19/02/2018</td>
          <td class="actions">
              <a class="btn btn-warning btn-xs" href="alterar_campanha.html">Editar</a>
              <a class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
      </tr>

      <tr>
          <td>1002</td>
          <td>Anápolis Consciente</td>
          <td>20/03/2018</td>
          <td class="actions">
              <a class="btn btn-warning btn-xs" href="alterar_campanha.html">Editar</a>
              <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
      </tr>

      <tr>
          <td>1003</td>
          <td>Anápolis Solidário</td>
          <td>15/04/2018</td>
          <td class="actions">
              <a class="btn btn-warning btn-xs" href="alterar_campanha.html">Editar</a>
              <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
      </tr>

  </tbody>
</table>

</div>
    <div class="box-footer"></div>
</section>
@endsection
