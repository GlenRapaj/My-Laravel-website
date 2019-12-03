@extends('pages.app')

@section('content')


<!-- ska mbaruar -->
  <h4 style=" margin-left: 25%; margin-bottom: 10%; margin-top: 7%; "> Edito projektin </h4> 

 <div style=" margin-bottom: 3%; " >
    <ul>

      <li id="projid" class="line" id="ID" > ID :  {{ $projects[0]->id }} </li>

      <li id="projtitle" class="line" > Titulli :  {{ $projects[0]->Titulli }} </li>

        <li > <br> <br> </li>
        
      <li id="projbody" >   {{ $projects[0]->pershkrimi }} </li>

      </ul>
  </div>


    
  <div style=" margin-bottom: 3%; " >

      	<form action="/upload"  method="post" enctype="multipart/form-data" style=" margin-top: 9%; margin-bottom: 4%; " >
            {{ csrf_field() }}
					<input type="file" name="img"  >
					<!--
					 <input   value = "upload" class= " btn btn-success" > 
            -->
              
              <button id="file-upload" type = "submit" class="btn-floating btn-medium waves-effect waves-light teal darken-3" > <i class="material-icons">add</i> </button>
					</form>

  </div>
 


   <div style=" margin-bottom: 3%; " >  <!--  method = "post"  -->
   
        <form action ="#"  style=" margin-top: 9%; margin-bottom: 4%; " >

         <fieldset>
        <legend> Edito projektin </legend>

             <div> 
                <label for = "title" > Titulli </label> <br>
                <input style=" width: 100%; " type="text" id="title" autofocus  placeholder = "title" />
                <br /> 
            </div>

            <div>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <br /> <br /> <br /> <br /> 
            </div>

          <!-- 
              <div> 
                    <label for = "pershkrimi" > Pershkrimi  </label><br>
                   <textarea class="md-textarea form-control" id="pershkrimi" rows="10" cols="20" >
                   </textarea>
                   <br /> 
              </div>
          -->

                  <div class="row">
                      <div class="input-field col s12">

                         <i class="material-icons prefix">mode_edit</i>
          
                        <textarea id="pershkrimi" class="materialize-textarea"  rows="10" cols="20" ></textarea>
                        <label for="pershkrimi"> Pershkrimi </label>

                      </div>     <br /> 
                  </div>


                <button type = "reset" class="btn waves-effect waves-light teal darken-2 red-text text-darken-4" > <i class="fa fa-repeat"></i> RESET 
                </button>

                 <input id="edit-proj" type ="submit" value ="posto" class=" btn btn-success" class="btn waves-effect waves-light teal darken-2 red-text text-darken-4" /> 
            <!--     
                   <button  class="btn waves-effect waves-light teal darken-2 red-text text-darken-4" type = "submit" name="action"> posto
                       <i class="material-icons right">send</i>
                  </button>
                -->
                </fieldset>
        </form>
   
  </div>




@endsection

