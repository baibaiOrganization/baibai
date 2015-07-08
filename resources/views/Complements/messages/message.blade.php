@if( Session::get('message'))
    <div class="message">
        {{ Session::get('message') }}
    </div>
@endif
@if( Session::get('message_error'))
    <div class="messageError">
        {{ Session::get('message_error') }}
    </div>
@endif