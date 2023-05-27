<!DOCTYPE html>
<html>
    <body>
        @if(!Session::has('user'))
            <h1>test html</h1>
        @else
            <h1>logged in as {{Session::get('user')->name}}</h1>
        @endif
    </body>
</html>