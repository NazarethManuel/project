<div class="row">
    <div class="col-md-6">
        <label for="name">Nome do Funcionário</label>
        <input type="text" class="form-control" name="name" id="name" value={{ isset($employer->name)? $employer->name : '' }}>

    </div>
    <div class="col-md-6">
        <label for="telephone">Contacto</label>
        <input type="text" class="form-control" name="telephone" id="telephone" value={{ isset($employer->telephone)? $employer->telephone : '' }}>

    </div>

    <div class="col-md-6">
        <label for="address">Morada</label>
        <input type="text" class="form-control" name="address" id="address" value={{ isset($employer->address)? $employer->address : '' }}>

    </div>

    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" value={{ isset($employer->email)? $employer->email : '' }}>

    </div>

    <div class="col-md-6">
        <label for="nif">NIF</label>
        <input type="text" class="form-control" name="nif" id="nif" value={{ isset($employer->nif)? $employer->nif : '' }}>

    </div>

    <div class="col-md-6">
        <label for="role">Função</label>
        <select class="form-control" name="role" id="role">
            <option value="administrator" {{(isset($employer->role)&& $employer->role=="administrator"  )? 'selected' : '' }}>Administrador</option>
            <option value="registrator" {{(isset($employer->role)&& $employer->role=="registrator"  )? 'selected' : '' }}>Operador de Caixa</option>
        </select>
    </div>



</div>
