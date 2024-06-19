<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Page;

class PagesControllers extends Controller
{
    public function index(Request $request)
    {
		$page_title = "Manage Page";
		$search = '';
		
		$pages    =  Page::where("id", 1)->first();
		return view('Page.index', compact('pages','page_title'));
    }
	
	public function update(Request $request)
    {
		$Page 	   		    			= Page::findOrFail(1);
		$Page->name  		    		= $request->name;
		$Page->description  		    = $request->description;
		$Page->save();
		
		$json = [
				'message' => 'You have updated the Page.',
				'status' => 1,
			];
		
		return response()->json($json, 200);
	}
	
}
