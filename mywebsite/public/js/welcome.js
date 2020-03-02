



/*  
function myFunction() {
 document.querySelector('#myDropdown').classList.toggle("show");
 
}
 */

       //   send-sms
        var Sms = document.querySelector('#send-sms');
         Sms.addEventListener( "click", ( e ) => {

                  e.preventDefault();  
         });
 
  function valueBarChanging( borderNumber, clsname ) {

  var pos = 0;
  clsname = '.' + clsname;
    var id ;

id = setInterval( chaige , 10 );

    function chaige(  ) {
  
        if ( pos == borderNumber ) {
      
      clearInterval(id);
    } else {

     pos++; 
     
      document.querySelector(clsname).innerHTML = pos + "%" ;
      let percentBar = clsname + '-d';
      document.querySelector(percentBar).style.width = pos + "%" ;
       
    }
  
  }
      
  }

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


/* hover */

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
        from: { x: -100, y: 0 },
        to: { x: 0, y: 0 },
        stiffness: 200,
         mass: 1,
         damping: 50

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

        from: { x: 100, y: 0 },
        to: { x: 0, y: 0 },
        stiffness: 200,
        mass: 1,
        damping: 100

        }).start(ballXY);
   });
            rightLeftFirstTime = false;
          }

}



// scroll event adding to the window    ska mbaruar

window.addEventListener('scroll', (e)=>{
   // console.log( ' scrolling  : ', e.clientX , e.clientY ); , window.scrollX 
   
   // console.log( ' scrolling  : ', window.scrollY );
    const positiony = window.scrollY ;

    const scrollable = document.documentElement.scrollHeight ; //- window.innerHeight;
   // console.log( ' scrolable space  : ', scrollable );

    const bodyHeght = $('body').position();
    const wallImgHeght = $('#wall-img').position();
    const aboutHeght = $('#about').position();
    const servicesHeght = $('#services').position();
    const arritjeHeght = $('#arritje').position();
    const arritjeHeght1 = $('#arritje1').position();
    const portofoliHeght = $('#portofoli').position();
    const knouldigeHeght = $('#knouldige').position();
    const pershtypjeHeght = $('#pershtypje').position();
    const smsHeght = $('#sms').position();
    const footerHeght = $('.page-footer').position();

  //animating element while scrolling

  partialHeightBotom = ( servicesHeght.top + aboutHeght.top ) *0.37 ;
 
  if( positiony < partialHeightBotom && positiony >  aboutHeght.top ){
    // console.log( ' You  are in about part first half ' );
    duwnUp('.move-paragraph');
    fillBarsChangeNr();
   // valueBar();
  }

  if( positiony < servicesHeght.top && positiony >  partialHeightBotom ){
  //  console.log( ' You  are in about part near service ' );
     leftRight('#paragraphmove');
     rightLeft('#paragraph-move');
  }

  partialHeightBotom = ( arritjeHeght.top + servicesHeght.top ) * 0.5;

  if( positiony < partialHeightBotom  && positiony > servicesHeght.top  ){
   // console.log( ' You  arritje in services part first half ' );
     duwnUp('.service-text');
  }

  if( positiony < arritjeHeght.top  && positiony > partialHeightBotom ){
  //  console.log( ' You  arritje in services part second half' );
   duwnUp('.move-paragraph');
   fillBarsChangeNr();
  }
 
  partialHeightBotom = ( knouldigeHeght.top + portofoliHeght.top ) * 0.5;

  if( positiony < knouldigeHeght.top  && positiony > partialHeightBotom  ){
    // console.log( ' You  are in knouldige second part ' );
    fillBarsChangeNr();
    valueBar();
  }

  partialHeightBotom = ( pershtypjeHeght.top + knouldigeHeght.top ) * 0.5;

  if( positiony < pershtypjeHeght.top  && positiony > partialHeightBotom  ){
    // console.log( ' You  are in pershtypje second part  ' );
    valueBar();
  }

} );  




// 
  var firstTimeCheck = true ;
  let valueBar = () => {

    if( firstTimeCheck ){

        var elem = $('.perdent-val'); 
        // console.log( 'elem  ; ' , elem[0].classList[1] );
        let borderNumber = elem[0].innerText ;
        borderNumber = borderNumber.replace( '%', '' );

        valueBarChanging( borderNumber, elem[0].classList[1] );


        elem = $('.perdent'); 
        borderNumber = elem[0].innerText ;
        borderNumber = borderNumber.replace( '%', '' );
        valueBarChanging( borderNumber, elem[0].classList[1] );

        elem = $('.val'); 
        borderNumber = elem[0].innerText ;
        borderNumber = borderNumber.replace( '%', '' );
        valueBarChanging( borderNumber, elem[0].classList[1] );

        elem = $('.perdentval'); 
        borderNumber = elem[0].innerText ;
        borderNumber = borderNumber.replace( '%', '' );
        valueBarChanging( borderNumber, elem[0].classList[1] );

        firstTimeCheck = false ;
    }

  }

//
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



                                  $.ajax({
            async: false,
            type: "GET",
            url: "/pershtypjet",
            dataType: "json",
            success: function (data) {
                console.log( data );

                var textData = '';

                var pathfile = '"/images/achivements.jpeg" ';


textData = textData + ' <div class="parallax-container"  > ';
textData = textData + ' <div class="parallax newparallax" style=" min-height: 100%; background-attachment: fixed; " > <img src=' + pathfile + 'width="100%" alt="" /> </div>';
textData = textData + ' </div> ';


     if( data.length > 0 ){
        

               for( let i = 0 ; i< data.length ; i++ ){         

                                
                textData = textData + '  <div class="carousel-item white-text center" href="#!" > ';
                textData = textData + ' <h2> '  + data[i].emri + ' </h2>' ;
                textData = textData + '  <p class="white-text"> '  + data[i].pershtypja + ' </p> ' ;
                textData = textData +  ' </div> ' ;
                

               }             
                       } else{
                               // console.log( " No data avaible" );
                               textData = textData + '  <div class="carousel-item white-text center" href="#!" > ';
                                textData = textData + '  <h2> No data avaible </h2>';
                                textData = textData + '  </div> ';
                               }

                          // document.querySelector('#rev-container').innerHTML = textData ;
                        $( "#rev-container" ).html( textData ) ;

                      }
                   });



        // collapsible
        $('.collapsible').collapsible();

         // dropdown activation
         $(".dropdown-trigger").dropdown( { hover: true,
          constrainWidth: false } );  

        // Side nav activation
        $('.sidenav').sidenav();

        $('.carousel.carousel-slider').carousel({
          fullWidth: true,
          indicators: true

        });
      // $('.materialboxed').materialbox();

     // $('.pushpin').pushpin({ top: 800 });

    });


