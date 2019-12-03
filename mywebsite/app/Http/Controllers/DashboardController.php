<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{

    public function getProject( $id ){ 
        
        $id = $this -> checkCodeInjecten( $id );
        
        $project =  DB::table('projets')->where('id', '=', $id )->get();
         return view('pages.editProj') -> with('projects', $project );
        
    }


    public function getAllProjects(){

       $projects = DB::table('projets')->get();

       return response()->json( $projects ); //->header('Content-Type', 'Aplication/Json'); 
    }


    public function deleteProject( $id ){

        if( auth() -> guest() ){
            return redirect('/');
        }

        $id = $this -> checkCodeInjecten( $id );
       
        $project =  DB::table('projets')->where('id', '=', $id )->get();
        
        $file =  $project[0] -> pathi;
         
         DB::table('projets')->where('id', '=', $id )->delete();
         File::delete( $file );

         return response('Deleted', 200) ;
       // return view("pages.statusResponse") ->with('res', ' Success ' ) ;
     }

     public function updateProject( Request $request, $id ){
        // ska mbaruar

        if( auth() -> guest() ){
            return redirect('/');
        }

        $titulli = $request->input('titulli');
        $pershkrimi = $request->input('pershkrimi');
        $pathi = $request->input('pathi');

        $titulli = $this -> checkCodeInjecten( $titulli );
        $pershkrimi = $this -> checkCodeInjecten( $pershkrimi );
        $pathi = $this -> checkCodeInjecten( $pathi );

        $project =  DB::table('projets')->where('id', '=', $id )->get();
        
       /*  
    if( $titulli != '' && $pershkrimi != '' &&  $pathi != '' ){
            
      $file =  $project[0] -> pathi;
      File::delete( $file );
      
         DB::table('projets')
        ->where( 'id', $id )
        ->update(['Titulli' => $titulli, 'pershkrimi' => $pershkrimi, 'pathi' =>  $pathi]);

    }else if( $pershkrimi != ''  &&  $titulli == '' &&  $pathi != '' ){

        $file =  $project[0] -> pathi;
        File::delete( $file );

        DB::table('projets')
        ->where( 'id', $id )
        ->update([ 'pershkrimi' => $pershkrimi, 'pathi' => $pathi ]);

    }
    else if( $titulli != ''  && $pershkrimi != '' &&  $pathi == '' ){

        DB::table('projets')
        ->where( 'id', $id )
        ->update([ 'pathi' =>  $pathi ]);

    }
    else {
        // nuk funksionon   count( $pershkrimi )== 0
                $file =  $project[0] -> pathi;
              File::delete( $file );
        
             $pershkrimi =  $project[0] -> pershkrimi ;
        
                DB::table('projets')
                ->where( 'id', $id )
                ->update(['Titulli' => $titulli, 'pathi' => $pathi ]);
        
            }

 */

    if( $titulli == '' || $titulli == null ){
                
        $titulli = $project[0] -> Titulli ;
    }

    if( $pershkrimi == '' || $pershkrimi == null ){
                
        $pershkrimi = $project[0] -> pershkrimi ;
    }

    if( $pathi == '' || $pathi == null ){
                
        $pathi = $project[0] -> pathi ;
    }else{

        $file =  $project[0] -> pathi;
        File::delete( $file );
    }

    DB::table('projets')
    ->where( 'id', $id )
    ->update(['Titulli' => $titulli, 'pershkrimi' => $pershkrimi, 'pathi' =>  $pathi]);

  //  echo $project[0] -> Titulli ; 
  //  echo " pergjigje " ; 
  //  echo $project[0] -> pershkrimi ;
    return view("pages.statusResponse") ->with('res', ' Success ' ) ;
     
    }



    // posto projektin
    public function postProject( Request $request ){
        // ska mbaruar

        if( auth() -> guest() ){
            return redirect('/');
        }


        $title = $request->input('title');
        $pershkrimi = $request->input('pershkrimi');

      //  $title = $this -> checkCodeInjecten( $title );
     //   $pershkrimi = $this -> checkCodeInjecten( $pershkrimi );

     /*     
     $request->validate([
        'img' => 'required|image|mimes:png,jpg,gif,svg|max:2048',
    ]);
  */

  $file = $request -> file('img');
   $fileExtension = $file -> getClientOriginalExtension();
  // $fileExtension = $file->getClientMimeType();

  if( $fileExtension == 'png' || $fileExtension == 'jpg' || $fileExtension == 'gif' || $fileExtension == 'svg' ){
     $path = $request -> file('img') -> store('images');
     DB::insert('insert into projets ( Titulli, pershkrimi, pathi) values (?, ?, ?)', [ $title, $pershkrimi, $path ]);

     return view("pages.statusResponse") ->with('res', ' Success ' ) ;
  }else{
    return view("pages.statusResponse") ->with('res', $fileExtension ) ;
  }


        // $path = $request -> file('img') -> store('images');

       // DB::insert('insert into projets ( Titulli, pershkrimi, pathi) values (?, ?, ?)', [ $title, $pershkrimi, $path ]);

     return view("pages.statusResponse") ->with('res', ' Success ' ) ;
    
    }


    // FILE UPLOADING

    public function fileStore( Request $request ){

        if( auth() -> guest() ){
            return redirect('/');
        }

        $path = "" ;
       
        // 'img' => 'required|file|max:1024',jpeg,
        $request->validate([
            'img' => 'required|image|mimes:png,jpg,gif,svg|max:2048',
        ]);

         $file = $request -> file('img');
         // $fileExtension = $file -> getClientOriginalExtension();
          $fileExtension = $file->getClientMimeType();

         if( $fileExtension == 'png' || $fileExtension == 'jpg' || $fileExtension == 'gif' || $fileExtension == 'svg' ){
           // $path = $request -> file('img') -> store('images');
            return  $path;
         }else{
            // $request = null ; // 
            return  "";
         }

    // $path = $request -> file('img') -> store('images');
    // return  $path;
    }



    // Pershtypjet

    public function getPershtypjet(){

        $pershtypjet = DB::table('pershtypjets')->get();
         return response()->json( $pershtypjet );  
    }

    public function deletePershtypje( $id ){

        if( auth() -> guest() ){
            return redirect('/');
        }


        $id = $this -> checkCodeInjecten( $id );
        
         DB::table('pershtypjets')->where('id', '=', $id )->delete();
        
          return view("pages.statusResponse") ->with('res', ' Success ' ) ;
    }

    public function postoPershtypje( Request $request ){
// ska mbaruar

            if( auth() -> guest() ){
                return redirect('/');
            }

        $pershtypja = $request->input('pershtypja');
        $emri = $request->input('emri');

        $pershtypja = $this -> checkCodeInjecten( $pershtypja );
        $emri = $this -> checkCodeInjecten( $emri );

        DB::table('pershtypjets')->insert(
            [ 'pershtypja' => $pershtypja, 'emri' => $emri ]
        );
       

        return view("pages.statusResponse") ->with('res', ' Success ' ) ;
   }



// mesazhet 

    public function getMesazhet(){

        if( auth() -> guest() ){
            return redirect('/');
        }

        $sms = DB::table('mesazhets')->get();
        return response()->json( $sms );
    }


    public function postoMesazh( Request $request ){
        // ska mbaruar

        $Subjekti = $request->input('Subjekti');
        $mesazhi = $request->input('mesazhi');

        $Subjekti = $this -> checkCodeInjecten( $Subjekti );
        $mesazhi = $this -> checkCodeInjecten( $mesazhi );

        DB::table('mesazhets')->insert(
            [ 'Subjekti' => $Subjekti, 'mesazhi' => $mesazhi ]
        );
        
        echo " Success  do kthehet tek faqja kryesore " ; 
      // return view("pages.statusResponse") ->with('res', ' Success ' ) ;
    }


    public function deleteMesazh( $id ){

        if( auth() -> guest() ){
            return redirect('/');
        }

        $id = $this -> checkCodeInjecten( $id );
        
        DB::table('mesazhets')->where('id', '=', $id )->delete();

        return view("pages.statusResponse") ->with('res', ' Success ' ) ;
    }

    // funksion qe merret me Code Injecten
    private function checkCodeInjecten( $stringInput ){

        if( Strlen( $stringInput ) > 0 ){
        // kthehen te gjitha ne te vogla
        $str = strtolower( $stringInput );

        // kontrollon nqs ka apo jo code injection
        $str = str_replace("<script ", "", $stringInput );
        $str = str_replace("</script>", "", $str );

        $str = str_replace("join ", "", $str );
        // $str = str_replace(" JOIN ", "", $str );
        $str = str_replace("union ", "", $str );
        $str = str_replace("where", "", $str );
        $str = str_replace("select ", "", $str );
        $str = str_replace("put ", "", $str );
        $str = str_replace("drop ", "", $str );
        }

        // kthen ne shkronje te madhe cdo shkronje te fillimit te fjales.
        $str = ucwords( $str );

        return $str;
    }


}
