

@extends('layouts.menu')
@section ('contenido')


<div class="row">
    <h1 class="grey-text text-darken-1">Nuevos productos</h1>
</div>

<div class="row">
    <form action="{{ route('productos.store') }}" class="col s8" method="POST" enctype="multipart/form-data" >
        @csrf
    <div class="row">
        <div class="col s8 input-field">
            
        
          
            <i class="material-icons prefix">shopping_cart</i>
          <input id="icon_prefix"  id="nombre" type="text" class="validate" name="nombre" placeholder="Escribe el nombre de producto">
          <label for="icon_prefix" for="nombre" class="fingerprint" >Nombre de producto</label>
        </div>
    </div>
    <div class="row">
        <div class="col s8 input-field">
          <i class="material-icons prefix"> assignment</i>
          <input id="icon_prefix"  id="descripcion" type="text" class="validate" name="descripcion" placeholder="Escribe la Descripcion">
          <label for="icon_prefix" for="precio" class="fingerprint" >Descripcion</label>
        </div>
    </div>
   
    <div class="row">
        <div class="col s8 input-field">
          <i class="material-icons prefix">attach_money</i>
          <input id="icon_prefix"  id="precio" type="text" class="validate" name="precio" placeholder="Escribe el precio de producto">
          <label for="icon_prefix" for="precio" class="fingerprint" >Precio</label>
        </div>
    </div>

    <div class="row">
        <div class="col s8 file-field input-field">
            <div class="btn">
            <img class="boxed" src="https://lidianet.com/ldnt/wp-content/uploads/2020/03/FileUpLoad_lidianet.gif"><span>Importar imagen</span>
                <input type="file" name="imagen">
            </div>
            <!--<div class="file-path-wrapper">
            <input class="file-path validate" type="text">
            </div>-->
            
        </div>
    </div>
    <div class="row">
        <div class="col s8 input-field">
        <select name="marca" id="marca">
@foreach($marcas as $marca)
<option value="{{$marca->id}}">
    {{ $marca->nombre }}
</option>
@endforeach
    </select>
    <label>Seleccione la marca</label>
  </div>
</div>
<div class="row">
        <div class="col s8 input-field">
        <select name="categoria" id="categoria">
@foreach($categorias as $categoria)
<option value="{{$categoria->id}}">
    {{ $categoria->nombre }}
</option>
@endforeach
    </select>
    <label>Seleccione la categoria</label>
  </div>
</div>

    <div class="row"></div>

    
    <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="action">Guardar Producto
    <i class="material-icons right">shopping_basket</i></button>
    </div>
</form>
</div>

@endsection