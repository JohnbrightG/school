<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Role::create([
				'name'            => $request->name,
				
				'status'          => $request->status
			]);
			
			$id        = Auth::user()->id;
			$userAgent = osBrowser();
			$ip        = getIpInfo();
			$macInfo   = macInfo();
			
			$Activity = Activity::all()->last();
			
			$Log = new Log();
			$Log->user_id        =  $id;
			$Log->user_ip        =  $ip;
			$Log->user_name      =  Auth::user()->name;
			$Log->activity_id    =  $Activity->id;
			$Log->event          =  $Activity->event;
			$Log->changes        =  json_encode($Activity->changes,JSON_PRETTY_PRINT);
			$Log->browser        =  @$userAgent['browser'];
			$Log->os             =  @$userAgent['os_platform'];
			$Log->mac            =  $macInfo;
			$Log->controller     = 'RoleController';
			$Log->method         = 'store';
			$Log->save();
			
			/*Activity Log Section*/
			
			$json = [
				'message' => 'You have Created the Role.',
				'status' => 1,
			];
		
		
		return response()->json($json, 200);
    }
	
	
	function managajax(Request $request)
    {
        if($request->ajax())
        {
            $Roles = Role::where('name', 'like', "%{$request->search}%")->orderBy($request->column,$request->type)->paginate(2);
            return view('setting.roledata', compact('Roles'))->render();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id        = $request->id;
		if($id){
		 Role::where('id',$id)->delete();
		 $notify[] = ['success', 'You have deleted successfully'];
			return 'success';
		}
    }
}
