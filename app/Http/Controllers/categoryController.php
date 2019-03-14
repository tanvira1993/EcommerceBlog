<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Category;
use App\subCategory;
use App\addproduct;
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
	
	public function subCategoryStore (Request $request)
	{
		
		$rules = [
			'idCategory' => 'required | numeric',
			'name' => 'required| min:3 | unique:sub_categories,sub_categories_name',
			
		];


		$messages = [
			'idCategory.required' => 'Select A Category!',
			'name.required' => 'Name is required!',
			'name.unique' => 'This Sub Category already exists.',

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
		$subcategory = new subCategory;
		$subcategory->sub_categories_name = $request->name;
		$subcategory->sub_categories_details = $request->details;
		$subcategory->id_categories = $request->idCategory;
		
		if($subcategory->save()){
			DB::commit();
			return Response::json(array('success' => TRUE, 'data' => $subcategory), 200);
		}else{
			DB::rollBack();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Sub Category could not be created!'), 400);
		}
		
	}

	
	public function getAllCategory(Request $request){

		$docTypes = Category::select('categories.*')->get();
		return Response::json(['success' => true, 'data' => $docTypes], 200);
	}

	public function getAllSubCategory(Request $request){

		$docTypes = subCategory::select('sub_categories.*')->get();
		return Response::json(['success' => true, 'data' => $docTypes], 200);
	}
	
	public function getSelectedSubCategoryList(Request $request, $idCategory){

		$docTypes = subCategory::select('sub_categories.*')
		->where('id_categories',$idCategory)
		->get();
		return Response::json(['success' => true, 'data' => $docTypes], 200);
	}
	
	public function getSearchedCategoryList(Request $request, $id){

		$docTypes = addproduct::select('product_lists.*')
		->where('id_sub_categories',$id)
		->get();
		return Response::json(['success' => true, 'data' => $docTypes], 200);
	}
}