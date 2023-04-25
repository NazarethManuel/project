
<div class="row">
    <div class="col-md-6">
        <label for="title">Nome do Cliente</label>
        <input type="text" class="form-control" name="name" id="name"  value={{ isset($costumer->name)? $costumer->name : ''}} >

    </div>
    <div class="col-md-6">
        <label for="telephone">Contacto</label>
        <input type="text" class="form-control" name="telephone" id="telephone"  value={{ isset($costumer->telephone)? $costumer->telephone : ''}}>

    </div>
   {{--<div class="col-md-6">
        <label for="type">Tipo de Função</label>
        <select class="form-control" name="type" id="type">
            <option value="administrator" {{(isset($role->type)&& $role->type=="administrator" )? 'selected' : '' }}>Administrador</option>

        </select>
    </div>--}}



</div>


