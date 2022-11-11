@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('penting') ? 'alert-important' : ''}}">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
    </div>
@endif
