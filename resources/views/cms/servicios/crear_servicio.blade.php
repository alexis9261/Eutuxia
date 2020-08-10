@extends('cms.index')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Servicios</h1>
    <div class="btn-group mr-2">
      <a href="{{route('service.home')}}" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>
    

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif
    <form action="{{route('service.store')}}" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Servicio</h5>
          <input class="form-control" id="input-title" type="text" name="service" value="" placeholder="Titulo" maxlength="191">
        </div> 
        <div class="col-12 mb-4">
          <h5>Imagen</h5>
          <input type="file" name="service_imagen">
        </div>
        <div class="col-12 mb-5">
          <a href="{{route('service.home')}}" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="submit" id="submit_button" class="btn btn-success px-5" value="Crear Servicio">
        </div>
      </div>
    </form>
  </div>
</section>

@endsection
