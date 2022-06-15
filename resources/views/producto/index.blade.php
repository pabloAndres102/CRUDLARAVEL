@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">PRODUCTOS</h3> <br>
          <a href="{{ url('/producto/crear')}}" class="btn btn-secondary">Crear</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 2%">
                          ID: 
                      </th>
                      <th style="width: 20%">
                          CODIGO
                      </th>
                      <th style="width: 30%">
                          NOMBRE
                      </th>
                      <th style="width: 20%" >
                          PRECIO
                      </th>
                  </tr>
              </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td class="project-actions text-right">
                    <form action="{{ url ('/producto/eliminar',$producto )}}" method="post">
                        @csrf
                            <a class="btn btn-info btn-sm" href="{{url ('/producto/editar', $producto->id )}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit">
                              <i class="fas fa-trash">
                              </i>
                              Eliminar
                          </button>  
                          </a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

</table>
@endsection