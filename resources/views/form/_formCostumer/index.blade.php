
<div class="row">
    <div class="col-md-6">
        <label for="name">Nome do Cliente</label>
        <input type="text" class="form-control" name="name" id="name"  value={{ isset($costumer->name)? $costumer->name : ''}} >

    </div>
    <div class="col-md-6">
        <label for="telephone">Contacto</label>
        <input type="text" class="form-control" name="telephone" id="telephone"  value={{ isset($costumer->telephone)? $costumer->telephone : ''}}>
    </div>

    <div class="col-md-6">
        <label for="type">Tipo de Cliente</label>
        <select class="form-control" name="type" id="type">
            <option value="business" {{ isset($costumer->type) && $costumer->type=="business" ? 'selected' : ''}}>Empresa</option>
            <option value="individual" {{ isset($costumer->type) && $costumer->type=="individual" ? 'selected': ''}}>Individual</option>
        </select>
    </div>

 <div class="col-md-6">
        <label for="typePayment">Tipo de Pagamento</label>
        <select class="form-control" name="typePayment" id="typePayment">
            <option value="cash" {{isset($costumer->type) && $costumer->typePayment=="cash"? 'selected' : ''}}>Cash</option>
            <option value="tpa" {{isset($costumer->type) && $costumer->typePayment=="tpa"? 'selected': ''}}>TPA</option>
            <option value="banktransfer" {{isset($costumer->type) && $costumer->typePayment=="bankTransfer"? 'selected': ''}}>Transferência</option>
            <option value="internetBanking" {{isset($costumer->type) && $costumer->typePayment=="internetBanking"? 'selected': ''}}>Internet Banking</option>
        </select>
    </div>



</div>


