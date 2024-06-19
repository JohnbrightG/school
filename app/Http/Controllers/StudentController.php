<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\Models\Students;
use App\Models\StudentClass;
use App\Models\Subject;
use App\Models\Marks;

class StudentController extends Controller
{
    public function index(Request $request)
    {
		$page_title = "Manage Student";
		$search = '';
		$student = '';
		
		
		
		//$student = Navigation::paginate(25);
		
        return view('students.index', compact('student','page_title'));
    }
	
	
	
	public function getStudents(Request $request)
	{
		
		$draw = $request->draw;
        $start = $request->start;
        $rowperpage = $request->length; // Rows display per page

        $columnIndex_arr = $request->order;
        $columnName_arr = $request->columns;
        $order_arr = $request->order;
        $search_arr = $request->search;
		//$created_at = $request->created_at;

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $request->searchByName; // Search value

        // Total records
        $totalRecords = Students::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Students::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        
			  
			  
			  $records = Students::leftJoin('student_classes', 'student_classes.id', '=', 'students.class')
			->leftJoin('subjects', 'subjects.id', '=', 'students.subject')
			->select('students.id AS s_id','students.name AS s_name', 'subjects.name as sj_name', 'student_classes.name as c_name',)
			->where('students.name', 'like', "%{$searchValue}%")
			->paginate(10);
			  
			  

        $data_arr = array();

        foreach($records as $record){
		
		   $id 			    = $record->s_id;
           $name 			= $record->s_name;
           $sj_name 	    = $record->sj_name;
		   $c_name       	= $record->c_name;
		   
		   
           
           $data_arr[] = array(
			   "id" 				=> $id,
               "s_name" 			=> $name,
			  
               "c_name" 			=> $c_name,
               
               "sj_name" 	    	=> $sj_name,
			   'marks'              => sum_marks($id),
			   

           );
        }

        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );

        return response()->json($response); 
		
	}
	
	
	
	
	
	
	
	
}
