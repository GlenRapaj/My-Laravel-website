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


 <!-- Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <!-- Styles 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
-->
    <!-- foto icon in tab -->
    <link rel="icon" type="image/jpg" href="images/coctail.jpg" />

        <style>

                .div-container{
                    width: 90%;
                    margin-left: 5%;
                margin-right: auto;
                padding-top: 7%;
                font-size: larger;
                font-family: initial;
                }

        h4{
                 padding-bottom: 3%;
                 margin-left: 20%;
                width: 60%;
                margin-right: auto;
                text-align: center;
                font-style: italic;
                font-family: serif;
                color: darkslateblue;
        }

          h3{
                 padding-bottom: 3%;
                 margin-left: 20%;
                width: 60%;
                margin-right: auto;
                text-align: center;
                font-style: italic;
                font-family: serif;
                color: darkslateblue;
        }

        .flex-container{

                display: flex;
                padding-bottom: 10%; 

        }

        .list-container{

         width: 45%;
        padding-left: 2%;
        margin-left: 3%;
        border-style: outset;
        border-radius: 9%;
        border-color: #678c1b;
        }

            .card-review{
                width: 450px;
                border: #1f6669;
                border-style: solid;
            }

            .card-content-paragraf{

                text-align: center; 
                margin-top: 5%; 
                height: 350px;
                /* min-height: 350px; */
                
            }

        .prev{
                float: left; 
                size: 10em;
                position: relative; 
                right: 0; 
                bottom: -175px;

                margin-left: -1rem;
                border: solid;
                border-color: #1f6669;
                border-radius: 30%;
                background-color: #1f6669;
                
        }   /*  margin-top: -10.5rem; 
                   */

        .next{
                float: right; 
                size: 10em;   
                position: relative;  
                left: 0; 
                bottom: 185px;
                margin-right: -1rem;
                border: solid;
                border-color: #1f6669;
                border-radius: 30%;
                background-color: #1f6669;
              
               
        }

            .main-btn{
                margin-top: -30rem;
                color : white;
                background-color: transparent;
            }

        /*    */

        .dropdown-cont {
  display: none;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
background-color: black;
      width: 100%;
    
}
.dropdown-cont a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
    color: cornflowerblue;
    text-align: -webkit-center;
    font-style: italic;
    font-size: 1.3em;
    font-family: serif;
}
.show {display: block;}

.dropbtn{
   display: none;
}

.page-footer{
            color: #eef1f3;
    background-color: #29793b;
        padding-top: 0px;
    margin-top: 5%;
}

.carousel-item{
        margin-top: -5.9em;
        margin-left: -7em;
}

   .parallax {
    
    background-image: url("http://mywebsite.com/images/back.jpeg");
  

    
    min-height: 100%; 
  
     
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    padding-bottom: 10px;


  }

      .par-txt{

        text-align: center;
        padding-top: 30%;
 
    }

    .par-txt > h1{
          margin-bottom: 30%;
        }


        ::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 7px #090973; 
    border-radius: 15px;
}

::-webkit-scrollbar-thumb {
    border-radius: 15px;
    -webkit-box-shadow: inset 0 0 6px #0c4e4e; 
    
}

::-webkit-scrollbar-thumb:hover {
  background: #5454dc; 
}

::-webkit-scrollbar-button{
     border-radius: 5px;
    -webkit-box-shadow: inset 0 0 6px #0c4e4e; 
}

::-webkit-scrollbar-button:decrement{
     background: red;
    -webkit-box-shadow: inset 0 0 6px #0c4e4e; 
    content: "UP";
}

::-webkit-scrollbar-button:increment{
     background: red;
    -webkit-box-shadow: inset 0 0 6px #0c4e4e; 
    content: "DOWN";
}





         /*  
                
                 */


        /*  Pjesa responsive */

        @media screen and (max-width: 700px) {
  body {
    font-size: 1.2rem;
  }

   h3{
         font-size: 1.9rem;   
   }

    h4{
         font-size: 1.7rem; 
         padding-top: 7%;
         margin-top: 2%;
         margin-bottom: 5%;    
    }

          .flex-container{
                display: flex;
                flex-direction: column;
                padding-bottom: 10%; 

        }

  .list-container{
         width: 90%;
        padding-left: 5%;
        border-style: outset;
        border-radius: 9%;
        border-color: #678c1b;
        margin-bottom: 7%;
        padding-bottom: 3%;
        padding-right: 2%;

        }

         .card-review{
                width: 300px;
                border: #1f6669;
                border-style: solid;
            }

               .main-btn{
                margin-top: -20rem;
                color : white;
                background-color: transparent;
            }

            .dropbtn{
                 display: block;
           }

           .carousel-item{
        margin-top: -5.0em;
        margin-left: -7em;
        }

        
}


/**/

 
.movement{
  position: relative;
  -webkit-animation-name: move;
  -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
  animation-name: move;
  animation-duration: 7s;
}

@-webkit-keyframes move {

 0% { opacity: 0;   }
 10% { opacity: 0.1;  }
 20% { opacity: 0.2; }
 30% { opacity: 0.3;  }
 40% { opacity: 0.4; }
 50% { opacity: 0.5;  }
 60% { opacity: 0.6; }
 70% { opacity: 0.7;  }
 80% { opacity: 0.8;  }
 90% { opacity: 0.9;  }
 100% { opacity: 1; }

}

@keyframes move{

  0% { opacity: 0;}
 100% { opacity: 1;}
 }


/* Turn off parallax scrolling for all tablets and phones. Increase/decrease the pixels if needed */
@media only screen and (max-width: 600px) {
  .parallax {
    background-attachment: scroll;
  }
}
       

        </style>

    </head>
    <body>

 
<div class="parallax">

       <div class="navigim" >  @include('inc.navbar')  </div>


                <div class="par-txt"> 
                        <h1 style=" color: white; ">   Technology breaks the wall   </h1>
                        <br>  <a class="btn main-btn btn-floating pulse" href="#about" style="  border-radius: 50%;" >  <i class="fa fa-angle-double-down" style=" color: white;     font-size: 3em; " ></i>  </a>
                                     
               

                </div>
                
        </div>
</div>






<div style=" color: black;">
        
        <div id="about" class="div-container"  >
                <h3 class=" movement " > Rreth meje! </h3>

                <div>
                     
                <div class="flex-container"  >
                        <div class="list-container" >

                                <h4 class=" movement " > Sherbimet qe ofrojme </h4>

                                <ul style=" margin-left: 30%; margin-top: 10%; " >

                                        <li > Faqe interneti  </li>
                                        <li> Modifikimin e faqeve aktuale  </li>
                                        <li> Web site  </li>
                                        <li> Web apps ( SPA ) </li>

                                </ul>

                        </div>


                        <div class="list-container" >

                                <h4 class=" movement " > Gjuhet e programimit dhe teknologjite qe perdorim </h4>

                                <ul style=" margin-left: 30%; margin-top: 2%; " >

                                        <li> Java  </li>
                                        <li> JavaScript  </li>
                                        <li> HTML  </li>
                                        <li> CSS </li>
                                        <li> Php </li>

                                </ul>

                        </div>
                </div>

                <div>
                        <h4 class=" movement "> Perse duhet te na zgjidhni si bashkpuntoret tuaj?  </h4>

                        <p> Ne sigurohemi qe gjithmone t'i ofrojme sherbime sa me cilesore klienteve tane.
                                <br/>
                            Ne sigurohemi qe sherbimi i ofruar te jete sa me i shpejte  , dhe qjithmone duke ndjekur teknologjite dhe praktikat me te fundit. 
                         </p>

                </div>

                </div>
        </div>

         <div id="project" class="div-container" >
                <h4 class=" movement "> Punet e mija! </h4>

                 <div id="write-project" >
                  



                </div>
        </div>

         <div id="pershtypjet" class="div-container" >
                <h4 class=" movement " > Pershtypjet e bashkpuntoreve! </h4>

               
         <!--  -->

 

  <div style=" min-height: 250px; "  class=" carousel" id="rev-container" >
                 
 
                  <div class="carousel-item" > 
                 <div class="card card-review " style=" margin-bottom: 3%;   border-radius: 7%; min-height: 50px; " > 
                
                <p class="card-content card-content-paragraf" style=" text-align: center; margin-top: 2%;  "> 
                pershtypja  <br>  <span style=" font-family: serif;  " class="grey-text text-darken-4">  emri  </span> </p> 
                </div>
           </div>

                 <div class="carousel-item" > 
                 <div class="card card-review " style=" margin-bottom: 3%;   border-radius: 7%; min-height: 50px; " > 
                
                <p class="card-content card-content-paragraf" style=" text-align: center; margin-top: 2%;  "> 
                pershtypja 1 <br>  <span style=" font-family: serif;  " class="grey-text text-darken-4">  emri 1 </span> </p> 
                </div>
           </div>

                 <div class="carousel-item" > 
                 <div class="card card-review " style="  margin-bottom: 3%;   border-radius: 7%; min-height: 50px; " > 
                
                <p class="card-content card-content-paragraf" style=" text-align: center; margin-top: 2%;  "> 
                pershtypja 2  <br>  <span style=" font-family: serif;  " class="grey-text text-darken-4">  emri 2  </span> </p> 
                </div>
           </div>

                 <div class="carousel-item" > 
                 <div class="card card-review " style="  margin-bottom: 3%;   border-radius: 7%; min-height: 50px; " > 
                
                <p class="card-content card-content-paragraf" style=" text-align: center; margin-top: 2%;  "> 
                pershtypja 3  <br>  <span style=" font-family: serif;  " class="grey-text text-darken-4">  emri 3  </span> </p> 
                </div>
           </div>
              <!--    -->

</div>

</div>

         <div class="div-container" id="send-mesage" >
                <h4 class=" movement " > Shkruani nje mesazh ! </h4>

               <span style=" float: left; color: white; font-weight: 400; "  class=" badge red darken-3 ">  Dergimi i mesazheve eshte caktivizuar perkohsisht!  </span> <br>
                                    
<!-- mesazhi  -->
        <div id="posting-data-form">
<!-- 
        action="mesazhet"  
-->
          <form action="#"  method="post" >
             <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
             
          <div class="row" >
            <div class="input-field col s12">
              <input type="text" name="Subjekti" id="subjekti" />
              <label for = "subjekti" >  <i class="fa fa-envelope-o " style=" color: blue;"></i> Subjekti </label> 
            </div>
          </div>

             <div class="row">
              <div class="input-field col s12">
                <input id="mesazhi" type="text" class="validate" name="mesazhi" >
                <label for="mesazhi"  > <i class="fa fa-pencil" style=" color: blue;" ></i> Mesazhi </label>
              </div>
            </div>
          	
            <button id="send-sms" class="btn waves-effect waves-light blue darken-3" type="submit" name="action" style=" color: whitesmoke; ">
              Posto mesazhin
                <i class="fa fa-arrow-circle-o-up" ></i>  
            </button>

           
            </form>

        </div>

        <!--   -->


        </div>

         <footer class="page-footer" >
         
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text

            <a style=" padding-left: 5%; font-size: x-large; " class="grey-text text-lighten-4 right" href="#!"> <i class="fa fa-facebook"></i> </a>
             <a style=" padding-left: 5%; font-size: x-large; " class="grey-text text-lighten-4 right" href="#!"> <i class="fa fa-youtube-play"></i> </a>
               <a style=" padding-left: 5%; font-size: x-large;  " class="grey-text text-lighten-4 right" href="#!"> <i class="fa fa-instagram"></i> </a>

           </div>
          </div>

        </footer>






<script src="https://code.jquery.com/jquery-3.3.1.min.js" >  </script>
    <!--   Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <!--  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>       
   -->
  <script type="text/javascript">
//


function myFunction() {
 document.querySelector('#myDropdown').classList.toggle("show");;
 
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {

  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.querySelector('.dropdown-cont');
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//


       //   send-sms
        var Sms = document.querySelector('#send-sms');
         Sms.addEventListener( "click", ( e ) => {

                  e.preventDefault();  
         });
 

      

             fetch('/project' )
                .then( ( response ) => {

                       return response.json();
                  })
                  .then( (data) =>{
                         //  console.log( data );
                        var textData = '' ;

                           data.forEach( ( value )=>{  

                                textData =   textData + ' <div class="card " style=" margin-bottom: 3%;  border-radius: 7%; min-height: 200px; " > ';
                                textData =   textData + ' <div class="card-content"> ' ;
                                textData =   textData + ' <span class="card-title  grey-text text-darken-4 movement" style=" font-family: serif; " > ' + value.Titulli + ' <i class="fa fa-file-image-o  activator right clickshow " style=" font-size: xx-large; color: #088208; " ></i>   <a target="_blank" href="https://github.com/GlenRapaj/' + value.Titulli + '"> <i class="fa fa-github right " style=" font-size: xx-large; color: #088208; " > </i>  </a>    </span> ' ;  
                                textData =   textData + ' </div>  <div class="card-action card-hide "> ' ;

                                var txt = value.pershkrimi.split( " " );
                                for( let i = 0 ; i< txt.length ; i++ ){
                                       textData =   textData + ' <span style=" float: left; border-radius: 50%; color: white; font-weight: 400; font-family: cursive; " class=" badge blue darken-3 "> ' + txt[ i ] + ' </span> ' ;
                                  
                                }
                     
                                textData =   textData + ' </div> <div class="card-reveal"> ' ;
                                textData =   textData + ' <span style=" font-family: serif; " class="card-title grey-text text-darken-4"> ' + value.Titulli + '  <i class="fa fa-times right xbuton "></i> </span> ' ;
                                textData =   textData + ' <div class="card-image waves-effect waves-block waves-light"> ' ;
                                textData =   textData + ' <img style=" height: 200px;  width: auto; " class="activator" src="http://mywebsite.com/' + value.pathi + '" >   </div> </div> </div> ';
                                   // console.log( value.pathi );                                                                             //  <img src='src="{{ asset('value.pathi') }}"' >
                           });

                           document.querySelector('#write-project').innerHTML = textData ;

                  })
                  .catch(error => console.error('Error:', error));
        




                   
                     
                      
 /* 
      merr  pershtypjet nga db
 */

                         

 




                 $(document).ready( function(){

                             $.ajax({
            async: false,
            type: "GET",
            url: "/pershtypjet",
            dataType: "json",
            success: function (data) {
              //  console.log( data );

                var textData = '';

     if( data.length > 0 ){
                                 



               for( let i = 0 ; i< data.length ; i++ ){         

                                
                textData = textData + '  <div class="carousel-item" > ';
                textData = textData + ' <div class="card card-review " style=" margin-bottom: 3%;   border-radius: 7%; min-height: 50px; " > ';
                
                textData = textData + '<p class="card-content card-content-paragraf" style=" text-align: center; margin-top: 2%;  "> ';
                textData = textData + ' ' + data[i].pershtypja + '  <br>  <span style=" font-family: serif;  " class="grey-text text-darken-4">  ' + data[i].emri + '  </span> </p> ';
                textData = textData + '</div> </div> ';


               }             
                                  
                       
                         

     } else{
                               // console.log( " No data avaible" );
                                textData = textData + '  No data avaible ';
                               }

                          // document.querySelector('#rev-container').innerHTML = textData ;
                        $( "#rev-container" ).html( textData ) ;

            }
        });


 

      $('.carousel').carousel();
     // $('.materialboxed').materialbox();


      
    });
  

      


    </script>



    </body>
</html>
