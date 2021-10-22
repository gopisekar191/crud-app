<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SearchController extends Controller
{
    
   public function index(){

        return view('search.search');
   }

   public function search(Request $request){

        $output ="";
        $students = Student::where('name', 'LIKE','%' .$request->search. '%')
        ->orwhere('department', 'LIKE','%' .$request->search. '%')->get();
        
        //get();

        if($students)
        {
            foreach ($students as $key => $student) {
            $output.='<tr>'.
            '<td>'.$student->id.'</td>'.
            '<td>'.$student->name.'</td>'.
            '<td>'.$student->department.'</td>'.
            '<td>'.$student->marks.'</td>'.
            '</tr>';
            }
        }
        $json = json_encode($output, true);
        print_r($json);exit;    
        return Response($output);
   }
}
