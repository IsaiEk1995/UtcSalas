@extends('layouts.administrador')
@section('titulo','Salas')
@section('contenido')


<div id="sals" class="container" >

     <div class="container"> 
       <div class="row">
        <div class="col-xs-12">


          <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>

          <br>
          <br>
        
          <div class="row">
            <div class="col-xs-12 col-xs-12">

            <input type="text" placeholder="Buscar Por Nombre" v-model="buscar" class="form-control">

            <br>

            <div class="table-responsive" >
            <table class="table">
              <thead style="background-color:#207197" >
              <th><font color="white"><center>No. Sala</center></font></th>
              <th><font color="white"><center>Nombre Sala</center></font></th>
              <th><font color="white"><center>Capacidad</center></font></th>
              <th><font color="white"><center>Opciones</center></font></th>
            
            </thead>
            <tbody>
              <tr v-for="(salas,index) in filtroSala">
                <td><center>@{{res_espacios.id_espacio}}</center></td>
                <td><center>@{{res_espacios.nombre}}</center></td>
                <td><center>@{{res_espacios.cupo}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarSala" v-on:click="guardarSala(res_espacios.id_espacio)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarSala(res_espacios.id_espacio)"></span></center>

                </td>
              </tr>
            </tbody>
          </table>
          </div>
          
        </div>

      </div>

    </div>
        

                    <!-- Modal Agregar -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:#207197">
            <!-- <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Agregar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">
              

              <label>No. Sala</label>
              <input type="number" name="No" v-model="id_espacios" class="form-control"><br> 

              <label>Nombre Sala</label>
              <input type="text" name="Nombre Sala" placeholder="Nombre Sala" v-model="nombre" class="form-control" ><br> 

              <label>cupo</label>
              <input type="number" name="cupo" v-model="cupo" class="form-control"><br> 

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarSala(id_espacio)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarDep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:#207197">
            <!-- <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Editar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">
              
              <label>No. Sala</label>
              <input type="number" name="No. sala" v-model="id_espacio" class="form-control" disabled=""><br> 

              <label>Nombre Sala</label>
              <input type="text" name="Nombre Sala" v-model="nombre" class="form-control"><br> 

              <label>Cupo</label>
              <input type="number" name="cupo" v-model="cupo" class="form-control"><br> 

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarSala(id_espacio)">Guardar cambios</button>
           </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->
  </div>
</div>

@endsection

@push('scripts')
<script src="js/vue-resource.js"></script>
<script src="js/salas/salas.js"></script>
@endpush