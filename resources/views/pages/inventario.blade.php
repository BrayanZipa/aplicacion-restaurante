@extends('menu')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center">
                    <h1>Inventario</h1>
                </div><br>
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Ingresar producto a inventariar</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-2">
                                <label for="inputNombre" class="form-label">Ingrese el nombre del producto</label>
                                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                            </div>
                            <div class="mb-2">
                                <label for="inputCodigo" class="form-label">Ingrese el código del producto</label>
                                <input type="text" class="form-control" id="inputCodigo" placeholder="Código">
                            </div>
                            <div class="mb-2">
                                <label for="inputPrecio" class="form-label">Ingrese el costo unitario</label>
                                <input type="text" class="form-control" id="inputPrecio" placeholder="Precio">
                            </div>
                            <div class="mb-2">
                                <label for="inputUnidad" class="form-label">Ingrese la unidad de medidad</label>
                                <input type="text" class="form-control" id="inputUnidad" placeholder="Unidad">
                            </div>
                            <div class="mb-2">
                                <label for="inputProveedor" class="form-label">Ingrese al proveedor del producto</label>
                                <input type="text" class="form-control" id="inputProveedor" placeholder="Proveedor">
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
    </div>
@endsection