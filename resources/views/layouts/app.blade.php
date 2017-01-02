<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <title>SMB Test - Projects and Tasks</title>
    </head>

    <body>
        <div class="container">
            @yield('content')

            @if (Session::has('message'))
                <div class="flash alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class='flash alert-danger'>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
</div>
    </body>
</html>
