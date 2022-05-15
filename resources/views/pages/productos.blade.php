@extends('menu')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center">
                    <h1>Productos</h1>
                </div><br>
                <div class="card">
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
        </div>

        <div class="row">
            <div class="col">
                @foreach($productos as $producto)
                    {{ $producto->nombre }}
                @endforeach
            </div>
        </div>
    </div>
@endsection