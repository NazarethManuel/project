<div class="row">
    <div class="col-md-6">
        <label for="name">Nome de Fornecedor</label>
        <input type="text" class="form-control" name="name" id="name"  value="{{old('name', isset($supplier->name)? $supplier->name : '')}}" >

    </div>
    <div class="col-md-6">
        <label for="telephone">Nº Telefone</label>
        <input type="text" class="form-control" name="telephone" id="telephone"  value="{{old('telephone', isset($supplier->telephone)? $supplier->telephone : '')}}">

    </div>
    <div class="col-md-6">
        <label for="manager">Gerente</label>
        <input type="text" class="form-control" name="manager" id="manager"  value="{{old('manager', isset($supplier->manager)? $supplier->manager : '')}}">

    </div>
    <div class="col-md-6">
        <label for="nif">NIF</label>
        <input type="text" class="form-control" name="nif" id="nif"  value="{{ old('nif',isset($supplier->nif)? $supplier->nif : '')}}">
    </div>
    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email"  value="{{old('email',isset($supplier->email)? $supplier->email : '')}}">

    </div>
    <div class="col-md-6">
        <label for="type">Tipo de Fornecedor</label>
        <select class="form-control" name="type" id="type">
            <option value="Empresa" {{old('type',isset($supplier->type)&& $supplier->type=="Empresa")? 'selected' : '' }}>Empresa</option>
            <option value="Independente" {{old('type',isset($supplier->type)&& $supplier->type=="Independente"  )? 'selected' : '' }}>Independente</option>
        </select>
    </div>

</div>
