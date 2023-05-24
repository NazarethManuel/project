<div class="row">
    <div class="col-md-6">
        <label for="name">Nome do usuário</label>
        <input type="text" class="form-control" name="name" id="name"  value="{{ old('name',  isset($user->name)? $user->name : '')}}" >

    </div>
    <div class="col-md-6">
        <label for="contact1">Contacto</label>
        <input type="text" class="form-control" name="contact1" id="contact1"  value="{{old('contact1', isset($user->contact1)? $user->contact1 : '')}}">

    </div>
    <div class="col-md-6">
        <label for="address">Morada</label>
        <input type="text" class="form-control" name="address" id="address"  value="{{old('address', isset($user->address)? $user->address : '')}}">

    </div>
    <div class="col-md-6">
        <label for="nif">NIF</label>
        <input type="text" class="form-control" name="nif" id="nif"  value= "{{ old('nif',isset($user->nif)? $user->nif : '')}}">
    </div>
    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email"  value="{{old('email', isset($user->email)? $user->email : '')}}">

    </div>
    <div class="col-md-6">
        <label for="password">Palavra-Passe</label>
        <input type="password" class="form-control" name="password" id="password"  value="{{old('password', isset($user->password)? $user->password : '')}}">

    </div>
    <div class="col-md-6">
        <label for="password_confirmation">Confirmar a Palavra-Passe</label>
        <input type="password" class="form-control" name="password_confirmation" id="confirmPassword"  value="{{ old('password_confirmation',isset($user->password_confirmation)? $user->password_confirmation : '')}}">

    </div>

    <div class="col-md-6">
        <label for="role_as">Tipo de utilizador</label>
        <select class="form-control" name="role_as" id="role_as">
            <option value="Administrador" {{old('role_as',isset($user->role_as)&& $user->role_as=="Administrador")? 'selected' : '' }}>Administrador</option>
            <option value="Operador" {{old('role_as',isset($user->role_as)&& $user->role_as=="Operador"  )? 'selected' : '' }}>Operador</option>
        </select>
    </div>

</div>

