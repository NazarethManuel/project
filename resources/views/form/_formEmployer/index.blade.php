<div class="row">
    <div class="col-md-6">
        <label for="name">Nome do Funcionário</label>
        <input type="text" class="form-control" name="name" id="name" value="{{old('name', isset($employer->name)? $employer->name : '') }}">

    </div>
    <div class="col-md-6">
        <label for="telephone">Contacto</label>
        <input type="text" class="form-control" name="telephone" id="telephone" value="{{ old('telephone',isset($employer->telephone)? $employer->telephone : '') }}">

    </div>

    <div class="col-md-6">
        <label for="address">Morada</label>
        <input type="text" class="form-control" name="address" id="address" value="{{ old('address ',isset($employer->address)? $employer->address : '' )}}">

    </div>

    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{old('email', isset($employer->email)? $employer->email : '' )}}">

    </div>

    <div class="col-md-6">
        <label for="nif">NIF</label>
        <input type="text" class="form-control" name="nif" id="nif" value="{{ old('nif',isset($employer->nif)? $employer->nif : '')}}">

    </div>

    <div class="col-md-6">
        <label for="role">Função</label>
        <select class="form-control" name="role" id="role">
            <option value="Administrador" {{old('role',isset($employer->role)&& $employer->role=="Administrador")? 'selected' : '' }}>Administrador</option>
            <option value="Operador" {{old('role',isset($employer->role)&& $employer->role=="Operador")? 'selected' : '' }}>Operador</option>
        </select>
    </div>



</div>
