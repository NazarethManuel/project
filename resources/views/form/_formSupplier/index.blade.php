<div class="row">
    <div class="col-md-6">
        <label for="name">Nome de Fornecedor</label>
        <input type="text" class="form-control" name="name" id="name"  value={{ isset($supplier->name)? $supplier->name : ''}} >

    </div>
    <div class="col-md-6">
        <label for="telephone">Nº Telefone</label>
        <input type="text" class="form-control" name="telephone" id="telephone"  value={{ isset($supplier->telephone)? $supplier->telephone : ''}}>

    </div>
    <div class="col-md-6">
        <label for="manager">Gerente</label>
        <input type="text" class="form-control" name="manager" id="manager"  value={{ isset($supplier->manager)? $supplier->manager : ''}}>

    </div>
    <div class="col-md-6">
        <label for="nif">NIF</label>
        <input type="text" class="form-control" name="nif" id="nif"  value={{ isset($supplier->nif)? $supplier->nif : ''}}>
    </div>
    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email"  value={{ isset($supplier->email)? $supplier->email : ''}}>

    </div>

</div>
