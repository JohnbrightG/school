<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;


class NavigationController extends Controller
{	   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$page_title = "Manage Navigation";
		$search = '';
		
		
		
		$navigations = Navigation::paginate(25);
		
        return view('navigation.index', compact('navigations','page_title'));
    }
	
	
	
	
	 function managajax(Request $request)
    {
        if($request->ajax())
        {
            $navigations = Navigation::where('name', 'like', "%{$request->search}%")->orderBy($request->column,$request->type)->paginate(25);
            return view('navigation.data', compact('navigations'))->render();
        }
    }
	
	public function getNavigation(Request $request)
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
        $totalRecords = Navigation::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Navigation::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = Navigation::orderBy($columnName,$columnSortOrder)
               ->where('navigations.name', 'like', '%' .$searchValue . '%')
			  
              ->select('navigations.*')
              ->skip($start)
              ->take($rowperpage)
              ->get();

        $data_arr = array();

        foreach($records as $record){
		
		   $id 			    = $record->id;
           $name 			= $record->name;
           $parent 	        = $record->parent;
		   $order       	= $record->order;
           $status      	= $record->status;
		   
		   $encrypted       = Crypt::encryptString($id);
		   
		   if ($parent == 0){
					$parent = 'Parent';										 
		   }else{
				$parent = navigationParent($parent);
		   }
		   
		   
		   if ($status == 0){
			   $status = 'Inactive';
		   }else{
			   $status = 'Active';
		   }
		  
           $data_arr[] = array(
			   "id" 			=> $id,
               "name" 			=> $name,
			   "parent" 	    => $parent,
               "order" 			=> $order,
               "status" 	    => $status,
			   "encrypted" 	    => $encrypted,
              
			   

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
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        $data['page_title']  = "Create Navigation";
		$data['navigations'] =  Navigation::where("parent", 0)->get();
		
	    return view('navigation.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
		
		
		
		
			
			Navigation::create([
				'name'            => $request->name,
				'icon'            => $request->icon,
				'parent'          => $request->parent,
				'slug'            => SlugService::createSlug(Navigation::class, 'slug', $request->name),
				'order'           => $request->order,
				'href'            => $request->href,
				
				'status'          => $request->status,
				
			]);
			
			
			
			
			$json = [
				'message' => 'You have Created the navigation.',
				'status' => 1,
			];
		
		
		return response()->json($json, 200);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data['page_title']  = "Edit Navigation";
		
		//echo base64_decode(urldecode($request->id));
		
		
		
		
		
		$id = Crypt::decryptString($request->id);
		
		
		$data['navigations'] =  Navigation::where("id", $id)->first();
		$data['parents']     =  Navigation::where("parent", 0)->get();
		
	    return view('navigation.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
		
		$Navigation 	   		    = Navigation::findOrFail($request->id);
		
		$Navigation->name  		    = $request->name;
		$Navigation->icon  		    = $request->icon;
		$Navigation->parent  	    = $request->parent;
		$Navigation->slug  	        = SlugService::createSlug(Navigation::class, 'slug', $request->name);
		$Navigation->order  	    = $request->order;
		$Navigation->href  	        = $request->href;
		$Navigation->status         = $request->status;
		$Navigation->save();
		
		
		
		$json = [
				'message' => 'You have updated the navigation.',
				'status' => 1,
			];
		
		return response()->json($json, 200);
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
		
		$id = Crypt::decryptString($request->id);
		if($id){
		 Navigation::where('id',$id)->delete();
		$json = [
				'message' => 'You have deleted successfully..',
				'status' => 1,
			];
			
		
			
			return response()->json($json, 200);
		}
		
    }
}
