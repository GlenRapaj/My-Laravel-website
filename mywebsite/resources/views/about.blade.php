
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="Description" content="" >

        <title> TurtelSoftware </title>

         <!-- Scripts defer -->
    <script src="https://immense-caverns-77674.herokuapp.com/js/app.js" ></script>



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

      .writing-wall{
         position: relative;  
        text-align: center;
        color: white;
       /*  margin-top: -64px;   */
      }



    </style>

  </head>
    <body>



 <!--  Fillon navbar  -->  <!-- pushpin -->
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





<div class="row"   id="about">  <!-- Fillon About -->
    <div class="col s12 l5 offset-l1" >
        <img id="paragraphmove" class="responsive-img"  alt="" src="/images/imagefront.jpeg"  width="100%" />
    </div>
    <div class="col s12 l5">
        <h4> Our Purpose is to Help you to Make Dreams Reality </h4>
      
        <div class="container">
            <hr style="margin-left: 0px;">
            <p>
                The main goal of “Tech & Solutions” is to provide the best 
                solution that is available for the best price, and that is because 
                it believes in your dreams.  For that reason, “Tech & Solution” has 
                gathered best technologies and adopted best 
                practices to be able to provide nothing else except 
                only high quality services.


            </p>
        </div>

    </div>
</div>   

<div class="row" style="margin-bottom: 15%;">
    <div class="col s12 " >
            <p style=" margin-top: 3%; margin-left: 9%; margin-right: 8%; " >
              “Tech & Solutions” believes in your dreams. 
              It loves to help clients to fulfill their dreams. 
              It doesn’t meter how big or small is your dream it has his own 
              importance. For “Tech & Solutions” your dream 
              is like a bird that just born from the egg.


            </p>
            <p style=" margin-top: 3%; margin-left: 9%; margin-right: 8%; ">
                If you see the reviews, you will see the good 
                impressions of the clients. This fact demonstrates the 
                devotion of “Tech & Solutions” to the clients and their projects. 
                “Tech & Solutions” is devoted to inform and discus every 
                mile stone of the projects in weekly meeting with the clients.
                
                Always open to new projects and challenges.
                <br> 
                Reach out to rapajglen96@gmail.com to connect!



            </p>
    </div>
</div>   <!-- Mbaron About -->



<div class="row" style="margin-bottom: 0px;" id="work-proces">  <!--  Fillon  Work Process  -->
    <div class="col s12" style=" background-color :#6eac86;">
        <div class="container" >
            <h4 class="white-text" style="margin-top: 4%;">  Work Process </h4>
            <hr style="width: 15%;"/>
            <p class="white-text" style="margin-top: 4%;" >
               Work process goes throw three simple steps. 
               First step is about strategy, 
               pros and cons of the project. 
               Second step is about the design, look, 
               development and project details.  
               Third step is the development, 
               where project comes to life.
            </p>
        </div>
    </div>
</div>


<div class="row" style="margin-bottom: 15%; padding-bottom: 3%; background-color :#6eac86; " > 
    <div class="col s12 l3 offset-l1 center-align">
        <i class="large material-icons white  circle" style=" color : #0a60a5;" >show_chart</i>
        <br/>
        <h5 class="white-text">Strategy</h5>
    </div>

    <div class="col s12 l3 center-align">
        <i class="large material-icons white  circle" style=" color : #0a60a5;" >edit</i>
        <br/>
        <h5 class="white-text">Design</h5>
    </div>

    <div class="col s12 l3 center-align">
        <i class="large material-icons white circle" style=" color : #0a60a5;" >build</i>
        <br/>
        <h5 class="white-text">Development</h5>
    </div>

</div>




<div class="row" id="arritje" >         <!-- Fillon pjesa e arritjeve -->
    <div class="achivements col s12 show-on-small hide-on-med-and-up " style="padding-bottom: 15%;  " >  
     <div class="parallax-container show-on-small	 " style=" height: 900px; " >  
      <div class="parallax">
    
        <img src="/images/achivements.jpeg">
      </div> 
          <div class="row" style=" margin-top: 5%; " >    <!-- ska mbaruar  -->
          
            <div class="col s12 m6 l3 custom-icon center-align" > <!-- Fillon Card 1 -->
    
              <i class="medium material-icons">code</i>
              <br/>
              <h5> CMS </h5>
              <br/>
              <span class="CMS" > 5 </span>
    
            </div>   <!-- Mbaron Card 1 -->
    
            <div class="col s12 m6 l3 custom-icon center-align" > <!-- Fillon Card 2 -->
    
              <i class="medium material-icons">filter_drama</i>
              <br/>
              <h5> API </h5>
              <br/>
              <span class="API" > 2 </span>
    
            </div>   <!-- Mbaron Card 2 -->
    
            <div class="col s12 m6 l3 custom-icon  center-align" > <!-- Fillon Card 3 -->
    
              <i class="medium material-icons">build</i>
              <br/>
              <h5> Web Development </h5>
              <br/>
              <span class="WD" > 20 </span>
    
            </div>   <!-- Mbaron Card 3 -->
    
            <div class="col s12 m6 l3 custom-icon  center-align" > <!-- Fillon Card 4 -->
    
              <i class="medium material-icons">edit</i>
              <br/>
              <h5> Web Designe </h5>
              <br/>
              <span class="WDE" > 20 </span>
    
            </div>   <!-- Mbaron Card 4 -->
    
    
          </div>
      </div>
    
     
    </div>  
    </div>    <!-- Mbaron pjesa e arritjeve -->
    
    
    <div id="arritje1"  class="achivements col l12 hide-on-small-only show-on-medium-and-up" style="padding-bottom: 15%; " >   <!-- Fillon pjesa e arritjeve -->
    <div class="parallax-container " >  
      <div class="parallax">
    
        <img src="/images/achivements.jpeg">
      </div>

          <div class="row" style=" margin-top: 5%; " >    <!-- ska mbaruar  -->
          
            <div class="col s12 m6 l3 custom-icon  center-align" > <!-- Fillon Card 1 -->
    
              <i class="medium material-icons">build</i>
              <br/>
              <h5> Web Development </h5>
              <br/>
              <span class="WD" > 20 </span>
    
            </div>   <!-- Mbaron Card 1 -->
    
            <div class="col s12 m6 l3 custom-icon center-align" > <!-- Fillon Card 2 -->
    
              <i class="medium material-icons">edit</i>
              <br/>
              <h5> Web Designe </h5>
              <br/>
              <span class="WDE" > 20 </span>
    
            </div>   <!-- Mbaron Card 2 -->
    
            <div class="col s12 m6 l3 custom-icon center-align " > <!-- Fillon Card 3 -->
    
              <i class="medium material-icons">filter_drama</i>
              <br/>
              <h5> API </h5>
              <br/>
              <span class="API" > 2 </span>
    
            </div>   <!-- Mbaron Card 3 -->
    
            <div class="col s12 m6 l3 custom-icon center-align " > <!-- Fillon Card 4 -->
    
              <i class="medium material-icons">code</i>
              <br/>
              <h5> CMS </h5>
              <br/>
              <span class="CMS" > 5 </span>
    
            </div>   <!-- Mbaron Card 4 -->
    
    
          </div>
      
    
    </div>   
    </div>   <!-- Mbaron pjesa e arritjeve -->

    





<!--  Fillon Shkruaj mesazhin dhe kontakt -->
<div class="row" style="margin-bottom: 10%;">
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
  

  <script type="text/javascript">




    
  function ChangingValue( borderNumber, clsname ) {

var pos = 0;
clsname = '.' + clsname;
  var id ;

id = setInterval( chaige , 10 );

  function chaige(  ) {
   
      if ( pos == borderNumber ) {
       
   clearInterval(id);
  } else {
    pos++; 
   var mySpanNodes = document.querySelectorAll(clsname);
   
   for( let i = 0 ; i < mySpanNodes.length ; i++ ){
    mySpanNodes[i].innerHTML = pos ;
   }

  }

}
    
}



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
         from: { x: -1000, y: 0 },
         to: { x: 0, y: 0 },
         stiffness: 200,
         mass: 1,
         damping: 40

         }).start(ballXY);


             });
             leftRightFirstTime = false;
           }

 }



// animate paragraphs while scrolling
    window.addEventListener('scroll', (e)=>{

   const positiony = window.scrollY ;

    const smsHeght = $('#mesage').position();
    const aboutHeght = $('#about').position();
    const workHeght = $('#work-proces').position();
    const newArritjeHeght = $('#arritje1').position();
    const arritjeHeght = $('#arritje').position();

/* 
  animating element while scrolling  
*/
let temp = ( aboutHeght.top + workHeght.top ) * 0.7 ;
 

  if( positiony >  aboutHeght.top && positiony < workHeght.top ){
  leftRight('#paragraphmove');
  }

  if( positiony >  workHeght.top ){
 // console.log(' In Work Process ');
  fillBarsChangeNr();

  }



});

var firstTimeCheckAchivements = true ;
let fillBarsChangeNr = () => {

      if( firstTimeCheckAchivements ){
        var elem = $('.CMS'); 
        borderNumber = elem[0].innerText ;
        ChangingValue( borderNumber, elem[0].className);

        elem = $('.API'); 
        borderNumber = elem[0].innerText ;
        ChangingValue( borderNumber, elem[0].className );

        elem = $('.WD'); 
        borderNumber = elem[0].innerText ;
        ChangingValue( borderNumber, elem[0].className );

        elem = $('.WDE'); 
        borderNumber = elem[0].innerText ;
        ChangingValue( borderNumber, elem[0].className );

        firstTimeCheckAchivements = false ;
      }
  }

  $(document).ready( function(){


    // dropdown activation
    $(".dropdown-trigger").dropdown( { hover: true,
    constrainWidth: false } );  

    // Side nav activation
    $('.sidenav').sidenav();

    });



    </script>



    </body>
</html>
