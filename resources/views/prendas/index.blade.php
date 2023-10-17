use App\Models\TallaPrenda;
@extends('layouts.estilo')

@section('tabla')
    <div class="container-xl">

        <section class="section">

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="page__heading">Prendas</h3>
                                    <a class="btn btn-dark ml-auto" href="{{ route('prendas.create') }}">Nuevo</a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead style="background-color:#6777ef">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Color</th>
                                                <th>Precio</th>
                                                <th>Stock</th>
                                                <th>Marca</th>
                                                <th>Categoria</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prenda as $prendas)
                                                <tr>
                                                    <td>{{ $prendas->id }}</td>
                                                    <td>{{ $prendas->name }}</td>
                                                    <td>{{ $prendas->color }}</td>
                                                    <td>{{ $prendas->price }}</td>
                                                    <td>{{ $prendas->stock }}</td>


                                                    @foreach ($marca as $marcas)
                                                        @if ($marcas->id == $prendas->id_marca)
                                                            <td>{{ $marcas->name }}</td>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($categoria as $categorias)
                                                        @if ($categorias->id == $prendas->id_categoria)
                                                            <td>{{ $categorias->name }}</td>
                                                        @endif
                                                    @endforeach
                                                    <td>

                                                        <a class="btn btn-primary"
                                                            href="{{ route('prendas.edit', $prendas->id) }}">Editar</a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'route' => ['prendas.destroy', $prendas->id],
                                                            'style' => 'display:inline',
                                                        ]) !!}
                                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
