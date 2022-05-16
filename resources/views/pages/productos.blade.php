@extends('menu')

@section('contenido')
    <div class="container-fluid">
        <div class="text-center">
            <h1>Productos</h1>
        </div><br>

        <div class="row">
            <div class="col-3">
                <div class="card text-white bg-dark" style="max-width: 23rem;">
                    <div class="card-header text-center">
                        <h4>Ingresar nuevo producto</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('crearProductos') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="inputNombre" class="form-label">Ingrese el nombre del producto</label>
                                <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="mb-2">
                                <label for="inputCodigo" class="form-label">Ingrese el código del producto</label>
                                <input type="text" class="form-control" id="inputCodigo" name="codigo" placeholder="Código">
                            </div>
                            <div class="mb-2">
                                <label for="inputPrecio" class="form-label">Ingrese el costo unitario</label>
                                <input type="text" class="form-control" id="inputPrecio" name="costo" placeholder="Precio">
                            </div>
                            <div class="mb-2">
                                <label for="inputUnidad" class="form-label">Ingrese la unidad de medidad</label>
                                <input type="text" class="form-control" id="inputUnidad" name="unidad" placeholder="Unidad">
                            </div>
                            <div class="mb-2">
                                <label for="inputProveedor" class="form-label">Ingrese al proveedor del producto</label>
                                <input type="text" class="form-control" id="inputProveedor" name="proveedor" placeholder="Proveedor">
                            </div>
                            <div class="mt-3 text-center">                        
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Costo</th>
                                        <th scope="col">Unidad</th>
                                        <th scope="col">Proveedor</th>
                                        <th scope="col">Usuario que lo crea</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($productos as $producto)
                                        <tr> 
                                            <th scope="row">{{ $producto->idProductos }}</th>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->codigo }}</td>
                                            <td>{{ $producto->costo }}</td>
                                            <td>{{ $producto->unidad }}</td>
                                            <td>{{ $producto->proveedor }}</td>
                                            <td>{{ $producto->name }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{  route('eliminarProducto', ['id' => $producto->idProductos]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-primary" href="{{ route('mostrarProducto', ['id' => $producto->idProductos]) }}">Editar</a>
                                                    <button type="submit" class="btn btn-danger" >Eliminar</button>
                                                </form>
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
@endsection