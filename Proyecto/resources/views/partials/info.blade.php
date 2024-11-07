@if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"></i> Exitoso! </h4>
        {{ Session::get('mensaje') }}
    </div>
@endif