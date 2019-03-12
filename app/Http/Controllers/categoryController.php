<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Category;
use App\subCategory;
use Response;
use DB;
use Validator;



class categoryController extends Controller
{
	

	public function categoryStore (Request $request)
	{
		
		$rules = [
			'name' => 'required| min:3 | unique:categories,category_name',
			
		];


		$messages = [
			'name.required' => 'Name is required!',
			'name.unique' => 'This Category already exists.',

		];
		

		$validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}
		/*echo '<pre>';
		print_r($request->all());
		echo '</pre>';
		exit; */
		$category = new Category;
		$category->category_name = $request->name;
		$category->category_details = $request->details;
		
		if($category->save()){
			DB::commit();
			return Response::json(array('success' => TRUE, 'data' => $category), 200);
		}else{
			DB::rollBack();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Category could not be created!'), 400);
		}
		
	}

	
	public function getAllategory(Request $request){

		$docTypes = Category::select('categories.*')->get();
		return Response::json(['success' => true, 'data' => $docTypes], 200);
	}

	
}