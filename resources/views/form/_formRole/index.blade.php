
<div class="row">
    <div class="col-md-6">
        <label for="name">Nome da Função</label>
        <input type="text" class="form-control" name="name" id="name"  value={{ isset($role->name)? $role->name : ''}} >

    </div>

    <div class="col-md-6">
        <label for="type">Previlégio da Função</label>
        <input type="text" class="form-control" name="type" id="type"  value={{ isset($role->type)? $role->type : ''}} >

    </div>


</div>


