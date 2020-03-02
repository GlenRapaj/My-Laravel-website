
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="Description" content="" >

        <title> Tech & Solution </title>

         <!-- Scripts defer -->
    <script src="https://immense-caverns-77674.herokuapp.com/js/app.js" ></script>

          <!-- Font Awesome Icons 
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
          -->

 <!-- Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <!-- Styles 
    <link rel="stylesheet" href="https://immense-caverns-77674.herokuapp.com/css/app.css" >
-->


    <!-- foto icon in tab   -->
    <link rel="icon" type="image/jpg" href="/images/coctail.jpg" />


    <link rel="stylesheet" href="/css/materialize.css"/>
    <link rel="stylesheet" href="/css/styles.css"/>

    <style>

html, body {
  min-height: 100%;
  }

      hr {
        width: 30%;
        border: 1px solid rgba(4, 4, 151, 0.664);
        margin-top: 20px;
      }

      p {
        margin-top: 7%;
      }

      .custom-icon{
      
        padding-top: 5% !important;
        padding-bottom: 3% !important;
 
        text-align: center;
        color: #fdfdfd;
        font-size: large;
      }

      .service-text{
        text-align: center;
        margin-right: 3%;
        margin-left: 3%;
        margin-bottom: 4%;
      }

      .writing-wall{
         position: relative;  
        text-align: center;
        color: white;
       /*  margin-top: -64px;   */
      }

       h6{
         margin-top : 4%;
       }

      @media (min-width: 481px) and (max-width: 867px)
      {
       
       h6{
         margin-top : 4%;
       }
         p{
           margin-bottom: 10%;
        }




      }

    </style>

  </head>
    <body>



 <!--  Fillon navbar  -->  <!-- rregullo linqet pushpin -->
 <div class="row " style="margin-bottom: 0px; ">       
     @include('navbar')
</div>    
     

 <!--  Mbaron navbar -->




 <div class="row" style="margin-bottom: 15%;" >  <!-- wall image -->
    <div>
        <img alt="" src="/images/imagefront.jpeg" width="100%"/>

        <div style="position: absolute; top : 20%; left: 5%;">
            <h2> Services  </h2>
            <p style=" font-size: 1.5rem; " >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a class="btn-medium green-text darken-4 " href="#about" style=" font-size: 1.5rem; " > Learn more... </a>
        </div>

    </div>

</div>  



<div class="row" ><!-- style=" margin-bottom: 3%; " Fillon  portofolio -->

  <div class="col s12"  > <h3> OUR WORKS </h3> </div>
</div> 

<div id="work" style=" margin-bottom: 15%; ">         
  

<div class="row" style=" margin-bottom: 7%; " >  

  <div class="col s12  l4 center-align " > <!-- fillon portofolio 1 card -->
       <img class="materialboxed responsive-img center-align " src="/images/back.jpeg" alt=""    /> 
       <h6> PROJECT NAME </h6>
       <hr/>
       <p class="center-align" > Lorem ipsum dolor sit amet, 
           consectetur adipiscing elit. 
           Proin eu augue sit amet sem porttitor 
           convallis tempor vitae ante.
        </p>
  
 </div>   <!-- Mbaron portofolio 1 card -->

 <div class="col s12  l4 center-align " > <!-- fillon portofolio 1 card -->
    <img class="materialboxed responsive-img " src="/images/back.jpeg" alt=""  style=" margin-right: 3%; "  /> 
    <h6> PROJECT NAME </h6>
    <hr/>
    <p class="valign-wrapper" > Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. 
        Proin eu augue sit amet sem porttitor 
        convallis tempor vitae ante.
     </p>

</div>   <!-- Mbaron portofolio 1 card -->

<div class="col s12  l4 center-align " > <!-- fillon portofolio 1 card -->
    <img class="materialboxed responsive-img " src="/images/back.jpeg" alt=""  style=" margin-right: 3%; "  /> 
    <h6> PROJECT NAME </h6>
    <hr/>
    <p class="center-align" > Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. 
        Proin eu augue sit amet sem porttitor 
        convallis tempor vitae ante.
     </p>

</div>   <!-- Mbaron portofolio 1 card -->


</div>  



  <div class="row" style=" margin-bottom: 15%; " >     <!-- rreshti 2  portofolio -->
  
    <div class="col s12  l4 center-align " > <!-- fillon portofolio 1 card -->
         <img class="materialboxed responsive-img " src="/images/back.jpeg" alt=""  style=" margin-right: 3%; "  /> 
         <h6> PROJECT NAME </h6>
         <hr/>
         <p class="center-align" > Lorem ipsum dolor sit amet, 
             consectetur adipiscing elit. 
             Proin eu augue sit amet sem porttitor 
             convallis tempor vitae ante.
          </p>
    
   </div>   <!-- Mbaron portofolio 1 card -->
  
   <div class="col s12  l4 center-align " > <!-- fillon portofolio 1 card -->
      <img class="materialboxed responsive-img" src="/images/back.jpeg" alt=""  style=" margin-right: 3%; "  /> 
      <h6> PROJECT NAME </h6>
      <hr/>
      <p class="center-align" > Lorem ipsum dolor sit amet, 
          consectetur adipiscing elit. 
          Proin eu augue sit amet sem porttitor 
          convallis tempor vitae ante.
       </p>
  
  </div>   <!-- Mbaron portofolio 1 card -->
  
  <div class="col s12  l4 center-align " > <!-- fillon portofolio 1 card -->
      <img class="materialboxed responsive-img " src="/images/back.jpeg" alt=""  style=" margin-right: 3%; "  /> 
      <h6> PROJECT NAME </h6>
      <hr/>
      <p class="center-align" > Lorem ipsum dolor sit amet, 
          consectetur adipiscing elit. 
          Proin eu augue sit amet sem porttitor 
          convallis tempor vitae ante.
       </p>
  
  </div>   <!-- Mbaron portofolio 1 card -->
  
  
  </div>  
</div>
<!-- Mbaron  portofolio -->






<!--  Fillon Shkruaj mesazhin dhe kontakt -->
<div class="row">
  <h4 class=" movement " > Want to work with us? </h4>
  <span style=" margin-left: 40%; " > Send us a Mesage </span>
</div>

<div class="row" style="margin-bottom: 15%;" id="mesage">

  <div class="col s12 " >  <!-- Fillon mesazhi  -->
    
    <span style=" float: left; color: white; font-weight: 400; border-radius : 10%; "  class=" badge red darken-3 ">  Meages temporarly deactivated for maintace purpose! </span> <br>
    <span style=" float: left; color: white; font-weight: 400; margin-top : 7px; border-radius : 20%; "  class=" badge green darken-3 ">  Meages us at : rapajglen96@gmail.com </span> <br>
                
      <!-- 
      <div id="posting-data-form">
        
                action="mesazhet"  
        -->
                  <form action="#"  method="post" >
                     
                
                    <div class="input-field col s12 l6">
                      <input type="text" name="Subjekti" id="subjekti" />
                      <label for = "subjekti" >  <i class="fa fa-envelope-o " style=" color: blue;"></i> Subject </label> 
                    </div>
                 
        
                      <div class="input-field col s12 l6">
                        <input id="mesazhi" type="text" class="validate" name="mesazhi" >
                        <label for="mesazhi"  > <i class="fa fa-pencil" style=" color: blue;" ></i> Mesage </label>
                      </div>
                  <br/>
                    
                    <button id="send-sms" class="btn waves-effect waves-light blue darken-3" type="submit" name="action" style=" color: whitesmoke; ">
                      Send Mesage
                        <i class="fa fa-arrow-circle-o-up" ></i>  
                    </button>
        
                   
                    </form>
        
              

</div>  <!--  Mbaron Shkruaj mesazhin  -->

</div>

<!--  Mbaron Shkruaj mesazhin dhe kontakt -->




<div class="row" style=" margin-bottom: 0px; " >
    @include('footer')
</div>
 

   <script src="/js/jquery-2.2.3.min.js"></script>  
  
   <script src="/js/materialize.js"></script>  
   <script src="/js/popmotion.global.min.js"></script>  
  

  <script type="text/javascript">



       //   send-sms
        var Sms = document.querySelector('#send-sms');
         Sms.addEventListener( "click", ( e ) => {

                  e.preventDefault();  
         });



               let divWriter = (data) =>{
                        
                         let counter = 0;
                        var textData = '' ;
                        

                           data.forEach( ( value )=>{ 
                             let path = '/images/back.jpeg';   // vendos nje path default
                             counter++;
                           // console.log( value );
                          //  console.log( counter );
                          path = value.pathi;

                            if( counter % 3 == 1 ){
                                textData =   textData + '<div class="row" style=" margin-bottom: 10%; " >';
                            }



                                textData =   textData + ' <div class="col s12  l4 center-align " >';
                                textData =   textData + ' <img class="materialboxed responsive-img" src="' + path + '" alt="A simple but powerful project" style=" margin-right: 3%; "  /> ' ;
                               textData =   textData + '   <h6>' + value.Titulli + '</h6> <hr/>' ;  
                               textData =   textData + '  <p class="center-align " >' + value.pershkrimi + ' </p> </div> ' ;

                                if( counter % 3 == 0 ){
                                textData =   textData + '</div>';
                                  }

                            });

                            textData = textData + '</div> ';

                           document.querySelector('#work').innerHTML = textData ;

                  }




         const { styler, spring, stagger, value  } = window.popmotion;

         let douwnUPFirstTime = true;
          let duwnUp = ( id ) => {

          // console.log( id );
          let serviceText = document.querySelectorAll(id);

          if( douwnUPFirstTime ){
          serviceText.forEach( (ball) =>{
                // console.log( ' serviceText :  ', ball );

                const divStyler = styler(ball);
                const ballXY = value({ x: 0, y: 0 }, divStyler.set);

                  spring({
                  from: { x: 0, y: 100 },
                  to: { x: 0, y: 0 },
                  stiffness: 200,
                  mass: 1,
                  damping: 40

                  }).start(ballXY);
                       });
                      douwnUPFirstTime = false;
                    }
               }

          //




   $(document).ready( function(){

             $.ajax({
            async: false,
            type: "GET",
            url: "/project",
            dataType: "json",
            success: function (data) {
                divWriter( data );
            }
             });


         // dropdown activation
         $(".dropdown-trigger").dropdown( { hover: true,
          constrainWidth: false } );  

        // Side nav activation
        $('.sidenav').sidenav();


       $('.materialboxed').materialbox();

     
      
    });

// animate paragraphs while scrolling
    window.addEventListener('scroll', (e)=>{
   const positiony = window.scrollY ;
    const smsHeght = $('#mesage').position();

    const workHeght = $('#work').position();

/* 
  animating element while scrolling
*/
let temp = ( smsHeght.top + workHeght.top ) * 0.7 ;
 
  if( positiony >  workHeght.top && positiony < temp ){
   duwnUp('.valign-wrapper');

  }

});




    </script>



    </body>
</html>
