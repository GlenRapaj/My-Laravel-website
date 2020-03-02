<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="Description" content="" >

        <title> TurtelSoftware </title>

         <!-- Scripts defer -->
    <script src="https://immense-caverns-77674.herokuapp.com/js/app.js" ></script>

          <!-- Font Awesome Icons 
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
          -->

 <!-- Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- foto icon in tab   -->
    <link rel="icon" type="image/jpg" href="file://C:/Users/user/Desktop/images/coctail.jpg" />


    <link rel="stylesheet" href="/css/materialize.css"/>
    <link rel="stylesheet" href="/css/styles.css"/>

    <style>
      hr {
        width: 20%;
        border: 1px solid rgba(4, 4, 151, 0.664);
        margin-top: 20px;
        /* margin-left: 0px; */
      }

      p{
        margin-top: 7%;
      }

      .service-space{
          margin-bottom: 10%;
          margin-top: 5%;
      }

      .writing-wall{
         position: relative;  
        text-align: center;
        color: white;
       /*  margin-top: -64px;   */
      }
    </style>

    </head>
    <body>


 <!--  Fillon navbar  -->  <!-- rregullo linqet pushpin -->
 <div class="row " style="margin-bottom: 0px; ">       
    @include('navbar')
</div>    
   

<!--  Mbaron navbar -->



<div class="row">  <!-- wall image -->
    <div>
        <img alt="" src="/images/imagefront.jpeg" width="100%"/>

        <div style="position: absolute; top : 20%; left: 5%;">
            <h2> Services  </h2>
            <p style=" font-size: 1.5rem; " >
                What we offer...
            </p>
            <a class="btn-medium green-text darken-4 " href="#short-description" style=" font-size: 1.5rem; " > Learn more... </a>
        </div>

    </div>

</div>

<div class="row" id="short-description" style="margin-top: 5%; margin-bottom: 10%;" >
  <div class="col s12 ">
  <h4> What we offer to clients. </h4>
  <hr style=" margin-bottom: 3%;">
    <div class="container" >
        Do you have an idea in mind? Do you want a high quality website but also, 
        to save money in long term? Do you want to be easy to post new content 
        or update old one?  Do you want DB changes or ERP? It doesn’t meter if you have a 
        small or big site you are in the right place. We offer from a simple site to content 
        management systems like WordPress.  Do you have to fuel with data your website and your
         mobile app in the same time then an API is what you need.
         Our websites are user friendly responsive and looks well in all screens.
         You can find suitable  prices for everyone.
    </div>
  </div>
</div>

<!-- Fillon pjesa e sevices -->

<div class="row service-space" id="Web-Development">  <!-- Fillon sevices 1 -->

    <div class="col s12 l5 offset-l1" >
        <img class="majtas" alt="" src="/images/reviews.jpeg" width="100%"/>

    </div>

    <div class="col s12 l5" >
        <div class="container">
            <h5> Web Development </h5>
            <hr style="margin-left: 0px;"/>
            <p>
                Are you looking for a website that interacts with the user? 
                Do you need user registration in your site? 
                Or you need that data displayed in your website to be different for different users?  
                Than you are looking for dynamic and responsive website.
                We will build a custom website for you.

            </p>
        </div>

    </div>

</div>



<div class="row service-space" id="Web-Designe">   <!-- Fillon sevices 2 -->
    <div class="col s12 l5 offset-l1" >
        <div class="container">
            <h5 class="right-align"> Web Designe </h5>
            <hr style="margin-right: 0px;"/>
            <p>
                Are looking for a simple website just to display content? 
                We have what you are looking for. 
                Simple but very powerful website made with latest technologies. 
                A website that looks good in all screens. 
                A beautiful website with SEO.

            </p>
        </div>
    </div>

    <div class="col s12 l5">
        <img class="djathtas" alt="" src="/images/reviews.jpeg" width="100%"/>

    </div>
</div>


<div class="row service-space" id="Fixing-Bugs">   <!-- Fillon sevices 3 -->

    <div class="col s12 l5 offset-l1" >
        <img class="majtas" alt="" src="/images/reviews.jpeg" width="100%"/>
    </div>

    <div class="col s12 l5" >
        <div class="container">
            <h5> Fixing Bugs </h5>
            <hr style="margin-left: 0px;"/>
            <p>
                Do you have a website, but you have a bug that you can’t fix it by yourself? 
                Then we will fix it for you. You have a website but you don’t like how it looks? 
                Than we will change it to be as good as other sites out there.

            </p>
        </div>
    </div>
</div>



<div class="row service-space" id="Web-App" >    <!-- Fillon sevices 4 -->
    <div class="col s12 l5 offset-l1" >
        <div class="container">
            <h5 class="right-align"> Web App </h5>
            <hr style="margin-right: 0px;"/>
            <p>
                Are you looking for an app but you want to be accessible by all users? 
                You don’t want to make an app for each Mobile OS out there and a separate web site in the same time? 
                Then the right choice for you is web app. 
                An app made for the web. You can access the app through browsers.
        </p>
        </div>
    </div>

    <div class="col s12 l5">
        <img class="djathtas" alt="" src="/images/reviews.jpeg" width="100%"/>
    </div>
</div>


<div class="row service-space" id="Sql-Queries">     <!-- Fillon sevices 5 -->

    <div class="col s12 l5 offset-l1" >
        <img class="majtas" alt="" src="/images/reviews.jpeg" width="100%"/>
    </div>

    <div class="col s12 l5" >
        <div class="container">
            <h5> Sql Queries </h5>
            <hr style="margin-left: 0px;"/>
            <p>
                You want to take some data from DB but don’t know how? We will help you. 
                We will make any query for you in order your site to be as good as the first day.
            </p>
        </div>
    </div>
</div>

<!-- Mbaron pjesa e sevices -->


<!--  Fillon Shkruaj mesazhin dhe kontakt -->
<div class="row" id="send-sms">
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
                       <input type="hidden" name="_token" value="Kj73jFqi9etQ898ohQ6ZYFy4AAtlNKtKEBA37Lso" />
                       
                    
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
 

  <script>
   $(document).ready( function(){


// dropdown activation
$(".dropdown-trigger").dropdown( { hover: true,
 constrainWidth: false } );  

// Side nav activation
$('.sidenav').sidenav();

});

const { styler, spring, stagger, value  } = window.popmotion;

let leftRightFirstTime = true;
 let leftRight = ( id ) => {

 // console.log( id );
 let serviceText = document.querySelectorAll(id);

 if( leftRightFirstTime ){
 serviceText.forEach( (ball) =>{
       // console.log( ' serviceText :  ', ball );

       const divStyler = styler(ball);
       const ballXY = value({ x: 0, y: 0 }, divStyler.set);


         spring({
         from: { x: 1000, y: 0 },
         to: { x: 0, y: 0 },
         stiffness: 200,
         mass: 1,
         damping: 40

         }).start(ballXY);


             });
             leftRightFirstTime = false;
           }

 }



 let rightLeftFirstTime = true;
 let rightLeft = ( id ) => {

 // console.log( id );
 let serviceText = document.querySelectorAll(id);

 if( rightLeftFirstTime ){
 serviceText.forEach( (ball) =>{
       // console.log( ' serviceText :  ', ball );

       const divStyler = styler(ball);
       const ballXY = value({ x: 0, y: 0 }, divStyler.set);


         spring({
         from: { x: -1000, y: 0 },
         to: { x: 0, y: 0 },
         stiffness: 200,
         mass: 1,
         damping: 40

         }).start(ballXY);


             });
             rightLeftFirstTime = false;
           }

 }


 // animate pictures while scrolling
 window.addEventListener('scroll', (e)=>{
   const positiony = window.scrollY ;
    const smsHeght = $('#send-sms').position();

    const workHeght = $('#Web-Development').position();

/* 
  animating element while scrolling
*/
let temp = ( smsHeght.top + workHeght.top ) * 0.7 ;
 
  if( positiony >  workHeght.top && positiony < temp ){
    leftRight('.djathtas');
    rightLeft('.majtas');
  //console.log( ' in service section' );

  }

});


  </script>

    </body>
</html>