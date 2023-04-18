                   <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Nome do Cliente</label>
                                    <input type="text" class="form-control" name="name" id="name" value={{ isset($costumer->name)? $costumer->name : ''}}  >

                                </div>
                                <div class="col-md-6">
                                    <label for="telephone">Nº Telefone</label>
                                    <input type="text" class="form-control" name="telephone" id="telephone" value={{ isset($costumer->telephone)? $costumer->telephone : ''}} >
                                </div>
                            </div>
                    </div>
