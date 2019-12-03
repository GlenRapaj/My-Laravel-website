<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Portofolio Site') }} </title>

         <!-- Scripts defer -->
    <script src="{{ asset('js/app.js') }}" ></script>

          <!-- Font Awesome Icons -->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


            <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 <!-- Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

    <!-- foto icon in tab -->
    <link rel="icon" type="image/jpg" href="images/coctail.jpg" />

 <!-- foto icon in tab -->
    <link rel="icon" type="image/jpg" href="images/coctail.jpg" />


    </head>
    <body>

    <div style=" color: darkcyan; " >  Response here : {{ $res }}
    
   
    </div>


<ul style =" display: inline-flex;     width: 100%; padding-top: 7%; " >

        <li  style="width: 100%; " >
            <a class="nav-link " href="/dashboard"> <!-- active -->

                <i class="fa fa-home"></i> Dashboard 
            </a>
        </li>

        <li  style="width: 100%;" >
            <a class="nav-link" href="/logout">
               <i class="fa fa-user-circle"></i> Log Out
            </a>
        </li>

        <li  style="width: 100%; " >
            <a class="nav-link" href="/">
                Faqja Kryesore
            </a>
        </li>


</ul>


    </body>
</html>
