<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Portofolio Site') }} </title>

         <!-- Scripts defer -->
    <script src="{{ asset('js/app.js') }}" ></script>


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <!-- Font Awesome Icons -->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

       
        <style>

        #posting-data-form{
          margin-top: 10%;
          margin-left: 30%;
          width: 40%;
        }

       #posting-data-form div{
          margin-bottom: 7%;
        }
 
        </style>

    </head>

    <body style="color : black;">
  <!-- -webkit-fill-available;  -->
<div class="row" style=" min-height: 1000px;  margin-bottom: 0px;" >
   
           
<nav class="col-md-2 d-none d-md-block navbar-dark  sidebar " style=" height: auto; background-color: black; min-width: 170px; " >  


      <div class="sidebar-sticky">
 
        <ul   class="nav flex-column" style=" width: max-content; " >

          <li class="nav-item" style="width: 100%; background-color: black;">
                       
            <span>  DASHBOARD MENU  </span>

          </li>


          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link " href="/dashboard"> <!-- active -->

                <i class="fa fa-home" style=" color: blue;"></i> Dashboard 
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/logout">
               <i class="fa fa-user-circle" style=" color: blue;"></i> Log Out
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/pershtypje">
             <i class="fa fa-paper-plane-o" style=" color: blue;"></i>
                   Posto Pershtypje
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/">
                Faqja Kryesore
            </a>
          </li>


        </ul>

          

      </div>

    </nav>



<!-- pershtypja  -->
        <div id="posting-data-form">

          <h4 style=" margin-bottom: 4%; "> Post pershtypjen tende! </h4>

          <form action="pershtypjet"  method="post" >
             <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
             
          <div class="row" >
            <div class="input-field col s12">
              <input type="text" name="emri" id="emri" />
              <label for = "emri" > <i class="fa fa-user" style=" color: darkgreen;"></i> Emri </label> 
            </div>
          </div>

             <div class="row">
              <div class="input-field col s12">
                <input id="pershtypja" type="text" class="validate" name="pershtypja" >
                <label for="pershtypja"  > <i class="fa fa-pencil" style=" color: darkgreen;"></i> Pershtypja </label>
              </div>
            </div>
          	
            <button class="btn waves-effect waves-light blue darken-3" type="submit" name="action" style=" color: whitesmoke; ">
              Posto pershtypje
                <i class="fa fa-arrow-circle-o-up"></i>  
            </button>
           
            </form>

        </div>

    

         </main>

</div>



 </body>
 </html>