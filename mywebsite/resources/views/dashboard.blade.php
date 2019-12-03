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

     <!-- foto icon in tab -->
    <link rel="icon" type="image/jpg" href="images/coctail.jpg" />


       
        <style>

        #posting-data-form{
          margin-top: 7%;
          margin-left: 30%;
          width: 40%;
        }

       #posting-data-form div{
          margin-bottom: 7%;
        }
 
        </style>

    </head>

    <body style="color : black;">
<!--
    <a href="/logout"> logout </a>

    <a href="#" id="postimi"> click me !! </a>
-->
<div class="row" style="min-height: -webkit-fill-available; margin-bottom: 0px;" >
   
   <!--   @yield('content')  -->
           
<nav class="col-md-2 d-none d-md-block navbar-dark  sidebar " style=" height: auto; background-color: black; min-width: 170px; " >  


      <div class="sidebar-sticky">
 
        <ul   class="nav flex-column" style=" width: max-content; " >

          <li class="nav-item" style="width: 100%; background-color: black;">
                       
            <span>  DASHBOARD MENU  </span>

          </li>


          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link " href="/dashboard"> <!-- active -->

                <i class="fa fa-home" style=" color: blue;" ></i> Dashboard 
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/logout">
               <i class="fa fa-user-circle" style=" color: blue;" ></i> Log Out
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#" id="mesazhet">
              
              <i class="fa fa-envelope-open-o" style=" color: blue;" ></i>  Mesazhet
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/pershtypje">
             <i class="fa fa-paper-plane-o" style=" color: blue;" ></i>
                   Posto Pershtypje
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="/">
                Faqja Kryesore
            </a>
          </li>

          <li class="nav-item " id="link-klik" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#">
                <i class="fa fa-file-text" style=" color: blue;" ></i>
              Projektet
            </a>
          </li>

          <li class="nav-item" style="width: 100%; background-color: black;" >
            <a class="nav-link" href="#" id="pershtypjet">
             <i class="fa fa-comments" style=" color: blue;" ></i> Pershtypjet
            </a>
          </li>

        </ul>

          

      </div>

    </nav>

  <!--     -->


     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                 <h4 style=" padding-top: 7%; padding-bottom: 3%; padding-left: 10%; "> Working page!  </h4>

                    <div id="rewrite-container" style=" padding-top: 7%; ">
                
                <h4> Your tables here!  </h4>


                    </div>

                </div>
            </div>
        </div>



         <!-- projekt  -->
  <div id="posting-data-form">   

  <h4 style=" margin-bottom: 4%; " > Posto projektin tend ! </h4> 

   <div style=" margin-bottom: 3%; " >  
   
        <form action ="project" method = "post" enctype="multipart/form-data" >
              
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
             <div  >
                <input type="file" name="img"  >
				      </div>

             <div> 
                <!-- <label for = "title" > Titulli </label> <br>  -->
                <input name="title" style=" width: 100%; " type="text" id="title" autofocus  placeholder = "title" />
                <br /> 
            </div>

            <div>
                
                <br /> <br /> <br /> <br /> 
            </div>

          

                  <div class="row">
                      <div class="input-field col s12">

                        <textarea name="pershkrimi" id="pershkrimi" class="materialize-textarea"  rows="10" cols="20" ></textarea>
                        <label for="pershkrimi">  <i class="fa fa-pencil" style=" color: blue;" ></i> Pershkrimi </label>

                      </div>     <br /> 
                  </div>


                <button type = "reset" class="btn waves-effect waves-light teal darken-2 red-text text-darken-4" > <i class="fa fa-repeat"></i> RESET 
                </button>

                 <input id="edit-proj" type ="submit" value ="posto" class=" btn btn-success" class="btn waves-effect waves-light teal darken-2 red-text text-darken-4" /> 
          
              
        </form>
   
  </div>
</div>



          <!--   -->



         </main>

</div>




<script>
$_token = "{{ csrf_token() }}";



              var getProjBtn = document.querySelector('#link-klik');  
                  getProjBtn.addEventListener( "click", ( e ) => {

                     e.preventDefault();
                     getProjects();
                  });
        


        function getProjects(){

                     fetch('/project', {
                 
                  method: 'GET', 
                  cache: 'no-cache', 
                  credentials: 'same-origin' 
                  
                   } )

                .then( ( response ) => {

                       return response.json();
                  })
                  .then( (data) =>{
                        
                           var textData = ' <table class="table table-striped table-dark">';
                              textData = textData + '<thead><tr>';
                                
                                    textData = textData + ' <th scope="col"> <strong> NR. </strong> </th> ';
                                    textData = textData + ' <th scope="col"> titulli </th> ';
                                    textData = textData + '<th scope="col"> pershkrimi </th>';
                                    textData = textData + '<th scope="col" style=" color : red; " >  Modify  </th> ';
                                    textData = textData + '<th scope="col" style=" color : red; " > <strong> DELETE </strong> </th> </tr> </thead>  <tbody>';
                                  
                                  data.forEach( ( value )=>{

                                      textData = textData + '  <tr> <th scope="row"> ' + value.id  + '</th> ';
                                      textData = textData + ' <td> ' + value.Titulli + ' </td> ';
                                      textData = textData + ' <td> ' + value.pershkrimi + ' </td> ';
                                        textData = textData + ' <td> <a href="/project/' + value.id  + '"> Modify </a> </td> ';  // update link
                                        textData = textData + ' <td> <a class="delete-buton" href="/project/' + value.id  + '"> Delete </a> </td> ';
                                      textData = textData + '</tr> ';
                                      
                                  } );

                           document.querySelector('#rewrite-container').innerHTML = textData ;
                           addEvents();  
                  })
                  .catch(error => console.error('Error:', error));
                  

        }



// funksion qe merret me del link per projektet 
       function addEvents(){

          var delB = document.querySelectorAll('.delete-buton');

          delB.forEach( ( value )=>{

              value.addEventListener( "click", ( e ) => {

                     e.preventDefault();
                      
                      let url = e.target.href.replace( "http://mywebsite.com", "" );
                      delProject( url );
                     // target link click
                      document.querySelector('#link-klik').click(); 
        });

          });

      }


             
 function delProject( url ){

             fetch( url, {
                 
                  method: 'DELETE', 
                  cache: 'no-cache', 
                  credentials: 'same-origin', 
                  headers: {
                      'Content-Type': 'application/json'
                  },
            
                  body: JSON.stringify({ _token: $_token }) 

    } )
    .then( ( data ) =>{
      console.log( data );
    });

 }



      // Pershtypjet blocks 

         var getProjBtn = document.querySelector('#pershtypjet');  
                  getProjBtn.addEventListener( "click", ( e ) => {

                     e.preventDefault();
                     getPershtypjet();
                  }); 


        function getPershtypjet(){

                     fetch('/pershtypjet', {
                 
                  method: 'GET', 
                  cache: 'no-cache', 
                  credentials: 'same-origin' 
                  
                   } )

                .then( ( response ) => {

                       return response.json();
                  })
                  .then( (data) =>{
                          // console.log( data );

                           var textData = ' <table class="table table-striped table-dark">';
                              textData = textData + '<thead><tr>';
                                

                                    textData = textData + ' <th scope="col"> <strong> NR. </strong> </th> ';
                                    textData = textData + ' <th scope="col"> emri </th> ';
                                    textData = textData + '<th scope="col"> pershtypja </th>';
                                    textData = textData + '<th scope="col" style=" color : red; " > <strong> DELETE </strong> </th> </tr> </thead>  <tbody>';
                                  
                                  data.forEach( ( value )=>{

                                     textData = textData + '  <tr> <th scope="row"> ' + value.id  + '</th> ';
                                     textData = textData + ' <td> ' + value.emri + ' </td> ';
                                     textData = textData + ' <td> ' + value.pershtypja + ' </td> ';
                                      textData = textData + ' <td> <a class="delete-buton" href="/pershtypjet/' + value.id  + '"> Delete </a> </td> ';
                                     textData = textData + '</tr> ';
                                     
                                  } );

                           document.querySelector('#rewrite-container').innerHTML = textData ;
                          deletePershtypjet();  
                            
                  })
                  .catch(error => console.error('Error:', error));
                  

        }



       function deletePershtypjet(){  

          
          var delB = document.querySelectorAll('.delete-buton');

          delB.forEach( ( value )=>{

              value.addEventListener( "click", ( e ) => {

                     e.preventDefault();
                    
                     let url = e.target.href.replace( "http://mywebsite.com", "" );  
                       delPershtypje( url );

                       // targeting a link click to refresh the page automatikelly
                 var getProjBtn = document.querySelector('#pershtypjet').click();  

              });

          });

       }


       
 function delPershtypje( url ){

             fetch( url, {
                 
                  method: 'DELETE', 
                  cache: 'no-cache', 
                  credentials: 'same-origin', 
                  headers: {
                      'Content-Type': 'application/json'
                  },
            
                  body: JSON.stringify({ _token: $_token }) 

    } );

 }


    // mesazhet blocks


             var mesazhetBtn = document.querySelector('#mesazhet');  
                  mesazhetBtn.addEventListener( "click", ( e ) => {

                     e.preventDefault();
                      getMesazhet();
                  }); 


        function getMesazhet(){

                     fetch('/mesazhet', {
                 
                  method: 'GET', 
                  cache: 'no-cache', 
                  credentials: 'same-origin' 
                  
                   } )

                .then( ( response ) => {

                       return response.json();
                  })
                  .then( (data) =>{
                          // console.log( data );

                           var textData = ' <table class="table table-striped table-dark">';
                              textData = textData + '<thead><tr>';
                                

                                    textData = textData + ' <th scope="col"> <strong> NR. </strong> </th> ';
                                    textData = textData + ' <th scope="col"> Subjekti </th> ';
                                    textData = textData + '<th scope="col"> mesazhi </th>';
                                    textData = textData + '<th scope="col" style=" color : red; " > <strong> DELETE </strong> </th> </tr> </thead>  <tbody>';
                                  
                                  data.forEach( ( value )=>{

                                     textData = textData + '  <tr> <th scope="row"> ' + value.id  + '</th> ';
                                     textData = textData + ' <td> ' + value.Subjekti + ' </td> ';
                                     textData = textData + ' <td> ' + value.mesazhi + ' </td> ';
                                      textData = textData + ' <td> <a class="delete-buton" href="/mesazhet/' + value.id  + '"> Delete </a> </td> ';
                                     textData = textData + '</tr> ';
                                     
                                  } );

                           document.querySelector('#rewrite-container').innerHTML = textData ;
                            deleteMesazhet();  
                            
                  })
                  .catch(error => console.error('Error:', error));
                  

        }



 function deleteMesazhet(){

    
          var delB = document.querySelectorAll('.delete-buton');

              delB.forEach( ( value )=>{

                    value.addEventListener( "click", ( e ) => {

                          e.preventDefault();
                        
                         let url = e.target.href.replace( "http://mywebsite.com", "" );  
                         delMsg( url );

                         // target mesage link click 
                         document.querySelector('#mesazhet').click(); 
                    });

              });


 }



 
 function delMsg( url ){

             fetch( url, {
                 
                  method: 'DELETE', 
                  cache: 'no-cache', 
                  credentials: 'same-origin', 
                  headers: {
                      'Content-Type': 'application/json'
                  },
            
                  body: JSON.stringify({ _token: $_token }) 

    } );

   
 }
  




</script>
 </body>
 </html>