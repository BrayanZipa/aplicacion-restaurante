@extends('menu')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center">
                <h1>Proveedores</h1>
            </div><br>
            <div class="card">
                <div class="card-header text-center">
                    <h4>Ingresar proveedores</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-2">
                            <label for="inputNombreProveedor" class="form-label">Ingrese el nombre del proveedor</label>
                            <input type="text" class="form-control" id="inputNombreProveedor" placeholder="Nombre">
                        </div>
                        <div class="mb-2">
                            <label for="inputCodigoProveedor" class="form-label">Ingrese el código del proveedor</label>
                            <input type="text" class="form-control" id="inputCodigoProveedor" placeholder="Código">
                        </div>
                        <div class="mb-2">
                            <label for="inputTelefonoProveedor" class="form-label">Ingrese el teléfono del proveedor</label>
                            <input type="text" class="form-control" id="inputTelefonoProveedor" placeholder="Teléfono">
                        </div>
                        <div class="mb-2">
                            <label for="inputDireccionProveedor" class="form-label">Ingrese la dirección del proveedor</label>
                            <input type="text" class="form-control" id="inputDireccionProveedor" placeholder="Dirección">
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