
<div class="row">
    <div class="col-md-6">
        <label for="title">Nome do Cliente</label>
        <input type="text" class="form-control" name="name" id="name"  value="{{ old('name',isset($costumer->name)? $costumer->name : '')}} ">

    </div>

    <div class="col-md-6">
        <label for="telephone">Contacto</label>
        <input type="text" class="form-control" name="telephone" id="telephone"  value="{{old('telephone', isset($costumer->telephone)? $costumer->telephone : '')}}">
    </div>

    <div class="col-md-6">
        <label for="type">Tipo de Cliente</label>
        <select class="form-control" name="type" id="type">
            <option value="Empresa" {{ old('type', isset($costumer->type) && $costumer->type=="Empresa")? 'selected' : '' }}>Empresa</option>
            <option value="Independente" {{ old('type',isset($costumer->type) && $costumer->type=="Independente"  )? 'selected' : '' }}>Independente</option>
        </select>
    </div>

</div>


