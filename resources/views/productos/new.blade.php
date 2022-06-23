

@extends('layouts.menu')
@section ('contenido')
@if(session('mensajito'))
<div class="">
<p>{{ session('mensajito')}}</p>
</div>
@endif


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
          <strong>{{$errors->first('nombre')}}</strong>
        </div>
    </div>
    <div class="row">
        <div class="col s8 input-field">
          <i class="material-icons prefix"> assignment</i>
          <input id="icon_prefix"  id="descripcion" type="text" class="validate" name="descripcion" placeholder="Escribe la Descripcion">
          <label for="icon_prefix" for="precio" class="fingerprint" >Descripcion</label>
          <strong>{{$errors->first('descripcion')}}</strong>
        </div>
    </div>
   
    <div class="row">
        <div class="col s8 input-field">
          <i class="material-icons prefix">attach_money</i>
          <input id="icon_prefix"  id="precio" type="text" class="validate" name="precio" placeholder="Escribe el precio de producto">
          <label for="icon_prefix" for="precio" class="fingerprint" >Precio</label>
          <strong>{{$errors->first('precio')}}</strong>
        </div>
    </div>

    <div class="row">
        <div class="col s8 file-field input-field">
            <div class="btn">
            <img class="boxed" src="https://lidianet.com/ldnt/wp-content/uploads/2020/03/FileUpLoad_lidianet.gif"><span>Importar imagen</span>
                <input type="file" name="imagen">
            </div>
            <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
            </div>
            
        </div>
        <strong>{{$errors->first('imagen')}}</strong>
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
            <option value="" >Seleccione categoria</option>
@foreach($categorias as $categoria)
<option value="{{$categoria->id}}">
    {{ $categoria->nombre }}
</option>
@endforeach
    </select>
    <label>Seleccione la categoria</label>
    <strong>{{$errors->first('categoria')}}</strong>
  </div>
</div>

    <div class="row"></div>

    
    <div class="row">
    <!--<button class="btn waves-effect waves-light" type="submit" name="action">Guardar Producto
    <i class="material-icons right">shopping_basket</i></button>-->
    <button class="guardar">
  <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
      </svg>
    </div>
  </div>
  <span>Guardar Producto</span>
</button>
    </div>
</form>
</div>

@endsection