<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Portofolio Site') }} </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!-- Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome Icons -->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

         <!-- Scripts defer -->
    <script src="{{ asset('js/app.js') }}" ></script>

    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

       
        <style>

        body{
            color: black;
        }

        ul{
            list-style-type: none;
        }

        .line{
                display: inline;
                margin-right: 7%;
        }
 
        </style>

         
    </head>
    <body>

        <div class="row" style="min-height: -webkit-fill-available; margin-bottom: 0px;" >
    
    <nav class="col-md-2 d-none d-md-block navbar-dark  sidebar " style=" height: auto; background-color: black; min-width: 170px; " >  


      <div class="sidebar-sticky">
 
        <ul   class="nav flex-column" style=" width: max-content; " >

          <li class="nav-item" style="width: 100%; background-color: black;">
               
            <span>  DASHBOARD MENU  </span>
              
          </li>


          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link " href="/dashboard"> <!-- active -->

                <i class="fa fa-home"></i> Dashboard 
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/logout">
               <i class="fa fa-user-circle"></i> Log Out
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#" id="mesazhet">
              
              <i class="fa fa-envelope-open-o"></i>  Mesazhet
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/pershtypje">
             <i class="fa fa-paper-plane-o"></i>
                   Posto Pershtypje
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#">
              <i class="fa fa-envelope-o"></i>  Posto Mesazh
            </a>
          </li>

          <li class="nav-item " id="link-klik" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#">
                <i class="fa fa-file-text"></i>
              Projektet
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#" id="pershtypjet">
             <i class="fa fa-comments"></i> Pershtypjet
            </a>
          </li>

        </ul>

          

      </div>

    </nav>


     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div id="rewrite-container" >

                            
                                    <div class="container" >
                                            @yield('content')

                                    </div>
                       

                    </div>

                </div>
            </div>
        </div>

         </main>

</div>




  <script>

function UPDATING( photoPath = '' ){

    let $_token = "{{ csrf_token() }}"; 
    var editProj = document.querySelector('#edit-proj');

      editProj.addEventListener( "click", ( e ) => {
         
                     e.preventDefault();

                     // var ID = document.querySelector('#projid');
                     // let url = '/proj/' + ID;  
                     let url = '/proj/' + "{{ $projects[0]->id }}";  

                        //  console.log( url );

                    let pershkrimi = document.querySelector('#pershkrimi');
                    let title = document.querySelector('#title');
                  /* 
                   if( photoPath == '' ){
                        console.log( 'empty  foto path' );
                     
                   }else{
                     console.log( 'foto path is not empty' , photoPath  );
                   }
                  */
                    let projbody = document.querySelector('#projbody');
                    let projTitle = document.querySelector('#projtitle');

                   if( pershkrimi.value != '' && pershkrimi.value != null && title.value == '' ){

                      updateProject( url, {
                        titulli :  projTitle,
                        pershkrimi : pershkrimi.value,
                        pathi : photoPath ,
                          _token: $_token
                      } );
                   }

                    if( title.value != '' && pershkrimi.value == '' || pershkrimi.value == null ){

                      
                      updateProject( url, {
                        titulli : title.value,
                        pershkrimi :  projbody,
                        pathi : photoPath,
                          _token: $_token
                      } );

                    }

                     if( title.value != '' && pershkrimi.value != '' || title.value != null ){

                       
                      updateProject( url, {
                        titulli : title.value,
                        pershkrimi : pershkrimi.value,
                        pathi : photoPath,
                          _token: $_token
                      } );
                     }
                   
      });
}

// UPDATING( );

  function updateProject( url, data={} ){
     //   console.log( url );
    
   // '/proj/1'

      fetch( url, {

          method: 'PUT', 
          body: JSON.stringify(data), 
          
          headers:{
            'Content-Type': 'application/json'
          }
          
        }).then( response => response.text() )
    .then( ( response ) => { 
          console.log( 'Success:', JSON.stringify(response) );
    });

  }

  // ska mbaruar
  var fileupl  = document.querySelector('#file-upload');
  fileupl.addEventListener( "click", ( e ) => {
         
                     e.preventDefault();

                     filePath()
                     
                     .then( ( res ) => {
                            console.log( res );
                            UPDATING( res );
                     } );

                
  });


   filePath = async () => {

    $_token = "{{ csrf_token() }}";

    let path = '';

    var formData = new FormData();
    var fileField = document.querySelector('input[type="file"]');

    formData.append('img', fileField.files[0]);


    
   let res = await fetch(  "/upload", {

      method: 'POST',
      body: formData,
       headers: {
                      'X-CSRF-TOKEN': $_token
                  }
    });

/* 
    .then( response => response.text() )
    .then( ( response ) => { 
         // console.log( 'Success:', JSON.stringify(response) );
          // path =  JSON.stringify(response);
        return response;
      } )
    .catch( error => console.error('Error:', error) );
 */

    path = await res.text();
   

    return path;

  }


  </script>

    </body>
</html>
