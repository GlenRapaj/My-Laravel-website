<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Portofolio Site') }} </title>


    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >


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

            .my-container{
                    width: 80%;
                    padding-left: 10%;
                    padding-right: 10%;
                    align-self: center;
                    align-items: center;
                    padding-top: 20%;
            }
 
        </style>

    </head>
    <body>

<!--

    
<div class="container">

                <div class="card-body">
                    <form method="POST" action="/loging">
                      

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">  
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="username"  required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>


-->


<div class="container my-container">

                <div class="card-body">
                    <form method="POST" action="/loging">
                      
                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
               

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"> <i class="fa fa-user " style=" color : #4d4db7; " >  </i>  e-mail : </label>

                            <div class="col-md-6">       <!-- value="{{ old('email') }}"   type="email" -->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="username"  required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"> <i class="fa fa-lock " style=" color : #4d4db7; " >  </i>  password :  </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>
                        </div>

                        <!--
                        <input type="submit" value="Hyre" class="btn green" >
                        -->

                         <button class="btn waves-effect waves-light  " type="submit" style=" color : white; float: right; border-radius: 30%; background-color: #296729;  " > Hyre
                                
                         </button>

                    </form>
                    
                </div>
            </div>



    </body>
</html>