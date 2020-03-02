<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="Description" content="" >

        <title> {{ config('app.name', 'Tech & Solution') }} </title>

         <!-- Scripts defer 
    <script src="{{ asset('js/app.js') }}" ></script>
-->
<!-- Icons -->
     <link  href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <!-- Styles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
 -->
        <link rel="stylesheet" href="/css/materialize.min.css"/>
    <link rel="stylesheet" href="/css/styles.css"/>



    <!-- foto icon in tab -->
    <link rel="icon" type="image/jpg" href="/images/coctail.jpg" alt="" />



    <style>

html, body {
    min-height: 100%;
  }

      hr {
        width: 30%;
        border: 1px solid rgba(4, 4, 151, 0.664);
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
        text-align: center;
        color: white;
        margin-top: -64px;
      }

      .pushpin{
        width: 100%;
        z-index: 5;
        background-color: black;
      }

/* e shtuar */
      @font-face {
        font-display: swap;
        }

      @media screen and (max-width: 700px)
      {
        #show-more{
          display: none;
        }
        
      }
  </style>

    </head>
    <body >

 <!--  Fillon navbar   -->  <!-- rregullo linqet pushpin-->
 <div class="row " style="margin-bottom: 0px; ">       
    @include('navbar')
</div>    
     
 <!--  Mbaron navbar -->

<div class="row" style=" margin-bottom: 5%; " id="wall-img" > 
    <div class="col s12 writing-wall " style=" padding: 0px; ">
      <img alt=""  src="/images/back.jpeg" width="100%"/>

      <div class="center-align" style=" position: absolute; top: 25%; left: 25%;  "  > <!-- display:flex; flex-direction: column; -->

        <span id="mywritings-onwall" style="font-size: 40px; " >  Technology breaks the walls </span>
        <br/>
        <a id="show-more" href="#about" style="padding-top: 0px; ">   <i class="large material-icons">expand_more</i>   </a> 

      </div>
    </div>
</div>  

<!-- Fillon About  -->
  <div class="row" id="about" >
    <div class="col s12">   <h3 class=" movement "  > About Us! </h3>   </div>
  </div>

  <div class="row" style="padding-bottom: 10%;  " >

    <div class="col s12 l6"  > <!-- Fillon divi 1 -->

      <div   >      
        <h4 class=" movement "> What we do? </h4> 

        <hr/>
       
          <p class="move-paragraph black-text" >
            The main goal of “Tech & Solutions” is 
            to provide the best solution that 
            is available for the best price, and that 
            is because it believes in your dreams.  
            <br/>
            <a style="margin-left: 7px; color: #165b7d; " href="/about"> Learn more... </a>
          </p>
        
       
       
      </div>
      
    </div>  <!-- Mbaron divi 1 -->

    <div class="col s12 l6"  > <!-- Fillon divi 2 -->

      <div >
        <h4 class=" movement "> Who we are? </h4> 

        <hr/>
        <p class="move-paragraph black-text" >
          We are a small teem of freelance developers that 
          aim to provide high quality
          quality services.
          <br/>
          <a style="margin-left: 7px; padding-bottom: 10px; color: #165b7d; " href="/about"> Learn more... </a>
        </p>
        
      </div>
      
    </div>   <!-- Mbaron divi 2 -->

  </div>

  <div class="row"  style="padding-bottom: 10%;  " >

    <div class="col s12 l6 " >  <!-- Fillon divi 3 -->
      <div  >
        <img id="paragraphmove" class="responsive-img"  alt="" src="/images/imagefront.jpeg"  width="100%" />

      </div>
      
    </div>    <!-- Mbaron divi 3 -->

    <div class="col s12 l6 ">  <!-- Fillon divi 4 -->

      <h4 > Why Us? </h4> 
        <hr/>

      <div class="black-text" id="paragraph-move" style="padding-top: 10px;">
      <p>
        “Tech & Solution” has gathered 
        best technologies and adopted 
        best practices to be able to 
        provide nothing else except 
        only high quality services.
      </p>
      
      <p>
        “Tech & Solutions” believes in your dreams. 
        It loves to help clients to fulfill their dreams. 
        It doesn’t meter how big or small is your dream it 
        has his own importance. 
        For “Tech & Solutions” your dream is like a 
        bird that just born from the egg.

      </p>

    </div>

    </div>    <!-- Mbaron divi 4 -->
    
  </div>
 <!-- Mbaron About  -->


 <!-- Fillon Serviset -->

 <div class="row" id="services" >
    <div class="col s12 " > <h3> Services </h3> </div>
 </div>

 <div class="row" style="padding-bottom: 15%;">

  <div class="col s12 m6 l3 center-align" >  <!--  Fillon service 1 -->

    <i class="medium material-icons black-text">build</i>
    <br/>
    <h5 class="black-text" > Web Development </h5>
    <br/>
    <hr/>
    <p class="service-text black-text">
     Build dynamic website
    </p>

  </div>   <!--  Mbaraon service 1 -->

  <div class="col s12 m6 l3 center-align" >  <!--  Fillon service 2 -->

    <i class="medium material-icons black-text">edit</i>
    <br/>
    <h5 class="black-text" > Web Designe </h5>
    <br/>
    <hr/>
    <p class="service-text black-text">
      Designe beautiful website

    </p>

  </div>   <!--  Mbaraon service 2 -->

  <div class="col s12 m6 l3 center-align" >  <!--  Fillon service 3 -->

    <i class="medium material-icons black-text">filter_drama</i>
    <br/>
    <h5 class="black-text" > API </h5>
    <br/>
    <hr/>
    <p class="service-text black-text">
      Fuel with data.
    </p>

  </div>   <!--  Mbaraon service 3 -->

  <div class="col s12 m6 l3 center-align" >  <!--  Fillon service 4 -->

    <i class="medium material-icons black-text">code</i>
    <br/>
    <h5 class="black-text" > CMS </h5>
    <br/>
    <hr/>
    <p class="service-text black-text">
      Make beginer friendly website.

    </p>

  </div>   <!--  Mbaraon service 4 -->

 </div>
<!-- Mbaron Serviset -->


<div class="row" id="arritje" >         <!-- Fillon pjesa e arritjeve -->
<div class="achivements col s12 show-on-small hide-on-med-and-up " style="padding-bottom: 15%;  " >  
 <div class="parallax-container show-on-small	 " style=" height: 900px; " >  
  <div class="parallax">

    <img src="/images/achivements.jpeg" alt="" >

      <div class="row" style=" margin-top: 5%; " >    <!-- ska mbaruar  -->
      
        <div class="col s12 m6 l3 custom-icon  " > <!-- Fillon Card 1 -->

          <i class="medium material-icons">code</i>
          <br/>
          <h5> CMS </h5>
          <br/>
          <span class="CMS" > 5 </span>

        </div>   <!-- Mbaron Card 1 -->

        <div class="col s12 m6 l3 custom-icon " > <!-- Fillon Card 2 -->

          <i class="medium material-icons">filter_drama</i>
          <br/>
          <h5> API </h5>
          <br/>
          <span class="API" > 2 </span>

        </div>   <!-- Mbaron Card 2 -->

        <div class="col s12 m6 l3 custom-icon  " > <!-- Fillon Card 3 -->

          <i class="medium material-icons">build</i>
          <br/>
          <h5> Web Development </h5>
          <br/>
          <span class="WD" > 20 </span>

        </div>   <!-- Mbaron Card 3 -->

        <div class="col s12 m6 l3 custom-icon  " > <!-- Fillon Card 4 -->

          <i class="medium material-icons">edit</i>
          <br/>
          <h5> Web Designe </h5>
          <br/>
          <span class="WDE" > 20 </span>

        </div>   <!-- Mbaron Card 4 -->

      </div>
  </div>

</div>   
</div>  
</div>    <!-- Mbaron pjesa e arritjeve -->

<div id="arritje1"  class="achivements col l12 hide-on-small-only show-on-medium-and-up" style="padding-bottom: 15%; " >   <!-- Fillon pjesa e arritjeve -->
<div class="parallax-container " >  
  <div class="parallax">

    <img src="/images/achivements.jpeg" alt="" >

      </div>
      
      <div class="row" style=" margin-top: 5%; " >    <!-- ska mbaruar  -->
      
        <div class="col s12 m6 l3 custom-icon  " > <!-- Fillon Card 1 -->

          <i class="medium material-icons">build</i>
          <br/>
          <h5> Web Development </h5>
          <br/>
          <span class="WD" > 20 </span>

        </div>   <!-- Mbaron Card 1 -->

        <div class="col s12 m6 l3 custom-icon " > <!-- Fillon Card 2 -->

          <i class="medium material-icons">edit</i>
          <br/>
          <h5> Web Designe </h5>
          <br/>
          <span class="WDE" > 20 </span>

        </div>   <!-- Mbaron Card 2 -->

        <div class="col s12 m6 l3 custom-icon  " > <!-- Fillon Card 3 -->

          <i class="medium material-icons">filter_drama</i>
          <br/>
          <h5> API </h5>
          <br/>
          <span class="API" > 2 </span>

        </div>   <!-- Mbaron Card 3 -->

        <div class="col s12 m6 l3 custom-icon  " > <!-- Fillon Card 4 -->

          <i class="medium material-icons">code</i>
          <br/>
          <h5> CMS </h5>
          <br/>
          <span class="CMS" > 5 </span>

        </div>   <!-- Mbaron Card 4 -->

  </div>

</div>   
</div>   <!-- Mbaron pjesa e arritjeve -->


<div class="row" id="portofoli" >      <!-- Fillon partial portofolio -->

  <div class="col s12" > <h3> OUR WORKS </h3> </div>
</div>   

<div class="row" style=" margin-bottom: 0px; " >  
  <div class="col s12 m6 l3 center-align " >  <img class="responsive-img" src="/images/myblog.PNG" alt="" width="300" style=" margin-right: 3%; "  />  </div>
  <div class="col s12 m6 l3 center-align " >  <img class="responsive-img"  src="/images/universitysystem.PNG" alt="" width="300" style=" margin-right: 3%; "  />  </div>
  <!--
  <div class="col s12 m6 l3 center-align " >  <img class="responsive-img"  src="/images/reviews.jpeg" alt="" width="300" style=" margin-right: 3%; "  />  </div>
  <div class="col s12 m6 l3 center-align " >  <img class="responsive-img"  src="/images/back.jpeg" alt="" width="300" style=" margin-right: 3%; "  />  </div>
-->
</div>  

<div class="row " style="background-color: black; height: 200px; margin-bottom: 15%;" > 
  <div class="col s12 m8 l8 center-align " style=" margin-top: 50px; " > 
    <h5 style="color: white;     font-size: 1.5rem; " > WANT TO SEE MORE WORKS? </h5>
    <span style="color: white; font-size: 0.9rem; " > WE ARE ALWAYS OPEN TO INTERESTING PROJECTS. </span> 
  </div>
  <div class="col m4 l4 center-align hide-on-small-only " style=" margin-top: 80px; " > <a  class="btn blue darken-2"  href="/portofolio" style="  border-radius: 10px; " > SEE ALL WORKS </a> </div>
  <div class="col s12 center-align hide-on-med-and-up " style=" margin-top: 20px; " > <a  class="btn blue darken-2"  href="/portofolio" style="  border-radius: 10px; " > SEE ALL WORKS </a> </div>

</div>
<!-- Mbaron partial portofolio -->


<!--  Fillon  pjesa pyetje pergjigje dhe grafiku njohurive -->
<div class="row" id="knouldige" style=" margin-bottom : 15%;" >
  <div class="col s12 m5 l5 offset-m1 offset-l1" >  
    <h5 class="black-text"  style=" padding-bottom: 18px; " > Why do you need a website for your business? </h5>

    <ul class="collapsible">
      <li>
        <div class="collapsible-header black-text " style=" background-color: #efeeee; " >  You can reach at your potential clients evrywere they are. </div>
        <div class="collapsible-body black-text">
        <span> Now days most of the people use internet in everyday life. Every product needs at least some marketing.  
        Through your website you can reach at your potential clients worldwide. </span></div>
      </li>
      <li>
        <div class="collapsible-header black-text " style=" background-color: #efeeee; " > Whith a Website you can save money. </div>
        <div class="collapsible-body black-text "><span>
        If you use traditional media to promote your products and services, 
        it will cost you a lot of money. 
        But if you use your own website to promote your products and services 
        it will cost you almost nothing, and remember it is always there 24/7.
        </span></div>
      </li>

      <li>
        <div class="collapsible-header black-text " style=" background-color: #efeeee; " > It will improve the image of your brand. </div>
        <div class="collapsible-body black-text ">
        <span>
        It will improve the reputation of your brand. 
        Let’s face it people are spending more and more time online. 
        If you make a champagne to promote
         your brand offline in some states, 
        you will get success in those states but if 
        you use internet for this purpose you 
        will have success in all the world. How to 
        achieve this cheaper and better then promoting 
        your products and services in your website with a good SEO?
        </span></div>
      </li>

      <li>
        <div class="collapsible-header black-text " style=" background-color: #efeeee; " > People can reach you 24/7, during all the year long. </div>
        <div class="collapsible-body black-text">
        <span>People can reach you 24/7. 
        Imagine yourself with a business that never closes. 
         If it is a traditional business like a shop for example it will 
        cost you a fortune, but through your 
        site you can sell 24/7 all year long with no extra expenses. 
        </span>
        </div>
      </li>

    </ul>

  </div>

  <div class="col s12 m5 l5 " >

    <h5 class="black-text" style=" padding-bottom: 18px; " > OUR EXPERTISES </h5>

    <!-- Ska mbaruar duhet te behet me animim lvizja e progres bar-->
      <span class="left black-text" > <i class="tiny material-icons " style=" color : #0a4573 !important ; " >build</i> Web Development </span>
      <span class="right perdent-val black-text">  90% </span>
      <div class="progress">
        <div class="determinate perdent-val-d" style="width: 0%"></div>
      </div>

      <span class="left black-text" > <i class="tiny material-icons " style=" color : #0a4573 ; " >edit</i> Web Designe </span>
      <span class="right perdent black-text ">  80% </span>
      <div class="progress">
        <div class="determinate perdent-d" style="width: 0%"></div>
      </div>

      <span class="left black-text" > <i class="tiny material-icons " style=" color : #0a4573 ; " >filter_drama</i> API </span>
      <span class="right val black-text">  90% </span>
      <div class="progress">
        <div class="determinate val-d" style="width: 0%"></div>
      </div>

        <span class="left black-text" > <i class="tiny material-icons " style=" color : #0a4573 ; " >code</i> CMS </span>
        <span class="right perdentval black-text">  90% </span>
        <div class="progress">
          <div class="determinate perdentval-d" style="width: 0%"></div>
        </div>

  </div>

</div>

<!--  Mbaron  pjesa pyetje pergjigje dhe grafiku njohurive -->


<div class="row" id="pershtypje" >
  <div class="col s12 " >  <h3> Testimonials </h3>  </div>
</div>

<div class=" row" style="margin-bottom: 15%;" >  

    <div class="carousel carousel-slider center " id="rev-container"  >

      <div class="parallax-container"  >
        <div class="parallax newparallax" style=" min-height: 100%; background-attachment: fixed; "> 
        <img  src="/images/achivements.jpeg" width="100%" alt="" /> 
        </div>
      </div>

      <div class="carousel-item black-text center  " href="#!" > <!-- one two three four -->
            <h2> Emri </h2>
            <p class="black-text"> Pershtypja </p>
      </div>

      <div class="carousel-item black-text" href="#!" >
        <h2> Emri </h2>
            <p class="black-text"> Pershtypja </p>

      </div>

      <div class="carousel-item black-text  " href="#!">


            <h2> Emri </h2>
            <p class="black-text"> Pershtypja </p>

      </div>

      <div class="carousel-item black-text" href="#!">

            <h2> Emri </h2>
            <p class="black-text"> Pershtypja </p>

      </div>
    
</div>
</div>
<!--  Mbarojne Komentet -->

<!--  Fillon Shkruaj mesazhin dhe kontakt -->
<div class="row" id="sms" >
  <h4 class=" movement " > Write a Mesage ! </h4>
</div>

<div class="row" style="margin-bottom: 15%;">

  <div class="col s12 " >  <!-- Fillon mesazhi  -->
      <span style=" float: left; color: white; font-weight: 400; border-radius : 10%; "  class=" badge red darken-3 ">  Meages temporarly deactivated for maintace purpose! </span> <br>
      <span style=" float: left; color: white; font-weight: 400; margin-top : 7px; border-radius : 20%; "  class=" badge green darken-3 ">  Meages us at : rapajglen96@gmail.com </span> <br>
         
      <!-- 
      <div id="posting-data-form">
        
                action="mesazhet"  
        -->
                  <form action="#"  method="post" >
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                  
                    <div class="input-field col s12 l6">
                      <input type="text" name="Subjekti" id="subjekti" />
                      <label for = "subjekti" style=" color : #0a4573 ; " >  <i class="tiny material-icons" style=" color : #0a4573 ; " >email</i>   Subject </label> 
                    </div>
                 
        
                      <div class="input-field col s12 l6">
                        <input id="mesazhi" type="text" class="validate" name="mesazhi" >
                        <label for="mesazhi" style=" color : #0a4573 ; " > <i class="tiny material-icons" style=" color : #0a4573 ; ">create</i>   Mesage </label>
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

<!--
<script src="https://code.jquery.com/jquery-3.3.1.min.js" >  </script>
--> 
     <script src="/js/jquery-2.2.3.min.js"></script>  
     <script src="/js/materialize.min.js"></script>  
     <script src="/js/popmotion.global.min.js"></script>  
         <script src="/js/welcome.js"></script>  
 
</body>
</html>
