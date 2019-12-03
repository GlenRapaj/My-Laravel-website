
@extends('pages.app')

@section('content')


  
  <h4>  Post nje pershtypje </h4> 


   <div>
   
        <form action ="/pershtypjet" method = "post" >

         <fieldset>
        <legend> Edito projektin </legend>

        <div>
                
                <input type="hidden" name="id" value="0" />
                <br /> 
            </div>

             <div> 
                <label for = "emri" > emri </label><br>
                <input type="text" id="emri" autofocus name="emri"  placeholder = "emri" >
                <br /> 
            </div>

            <div>
                
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <br /> 
            </div>

              <div> 
                    <label for = "pershtypja" > pershtypja  </label><br>
                   <textarea type="text" id="pershtypja" name="pershtypja"   placeholder = "pershtypja " >
                    </textarea>
              </div>

                <input type = "reset" class= " btn btn-success" > 
                 <input type = "submit" value = "posto" class= " btn btn-success" > 

                </fieldset>
        </form>
   
  </div>
 


@endsection

