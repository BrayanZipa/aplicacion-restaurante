@extends('menu')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center">
                <h1>Recetas</h1>
            </div><br>
            <div class="card">
                <div class="card-header text-center">
                    <h4>Ingresar recetas</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-2">
                            <label for="inputNombreReceta" class="form-label">Ingrese el nombre de la receta</label>
                            <input type="text" class="form-control" id="inputNombreReceta" placeholder="Nombre">
                        </div>
                        <div class="mb-2">
                            <label for="inputIngredienteReceta" class="form-label">Ingrese los ingredientes de la receta</label>
                            <input type="text" class="form-control" id="inputIngredienteReceta" placeholder="Ingredientes">
                        </div>
                        <div class="mb-2">
                            <label for="inputPrecioReceta" class="form-label">Ingrese el precio de venta de la receta</label>
                            <input type="text" class="form-control" id="inputPrecioReceta" placeholder="Precio de venta">
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