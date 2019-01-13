<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addproduct;
use Response;
use DB;
use Validator;



class addProductController extends Controller
{
	public function save(Request $request)
	{
		//echo '<pre>';
		//print_r($request->all());
		// exit;
		$files = $request->file('image'); 
		
		$rules = [
			
			'image' => 'required |max:51200|mimes:jpg,jpeg,png,pdf,gif',
			'name' => 'required',
			'unit' => 'required',
			'cost' => 'required'



		];

		$messages = [

			'image.required' => 'Attachment is required',
			'name.required' => 'Name is required',
			'unit.required' => 'Unit Name is required',
			'cost.required' => 'Cost is required',


		];

		$validation = Validator::make($request->all(), $rules, $messages);

		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
            // change below as required
			
			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}
		$nameonly = preg_replace('/\..+$/', '', $files->getClientOriginalName());

		$path = public_path().'/uploads/';
		if (!is_dir($path)) {
			\File::makeDirectory($path, $mode = 0777, true, true);
		}
		$fileName = null;
		if(!empty($request->file('image'))){

			$fileName = str_replace(" ", "_", $nameonly).'_'.time().'.'.$request->file('image')->extension();
			$request->file('image')->move(public_path() . '/uploads/', $fileName);
		}

		//exit;
		$document = new addproduct;
		$document->product_cost = $request->cost;
		$document->product_unit_name = $request->unit;
		$document->product_file = !empty($fileName) ? $fileName : null;
		$document->product_name = $request->name;
		

		
		$document->save();
		
		if($document){
			DB::commit(); 
			return Response::json(array('success' => TRUE, 'data' => 'Other Document created successfully'), 200);
		}else{
			//If block image already existing it is deleted previous block image
			$filePath = public_path() . '/uploads/'. $document->product_file;
			
			if (file_exists($filePath)) {
				@unlink($filePath);
			}
			DB::rollBack();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Other Document could not be created!'), 400);
		}

		

	}

	public function getFileInfo(Request $request){

		$docTypes = addproduct::select('product_lists.*')->get();
		return Response::json(['success' => true, 'data' => $docTypes], 200);
	}
	public function deleteFile($id){

		//$docTypes = addproduct::select('product_lists.*')->get();
		$docTypes = addproduct::where('id_products', $id)->first();

		$filePath = public_path() . '/uploads/'. $docTypes->product_file;
		

		if (file_exists($filePath)) {
			@unlink($filePath);
		}
		$docTypes->delete();
		
		
		return Response::json(['success' => true, 'data' => $docTypes], 200);
		
	}

	
	public function getProductInfo($id){

		$docTypes = addproduct::where('id_products', $id)->first();

		return Response::json(['success' => true, 'data' => $docTypes], 200);

	}

	
	public function Update(Request $request, $id)
	{
		$target = addproduct::find($id);
		if(empty($target)){
			return Response::json(array('success' => FALSE, 'heading' => 'Bad Request', 'message' => 'Invalid Product ID'), 400);
		}
		$rules = [
			/*'name' => 'required',
			'unit' => 'required',
			'cost' => 'required'*/
		];

		if(!empty($request->file('image'))){
			$rules['image'] = 'required |max:52000|mimes:jpg,jpeg,png,pdf,gif';
		}

		$messages = [
			'image.required' => 'Attachment is required',
			'name.required' => 'Name is required',
			'unit.required' => 'Unit Name is required',
			'cost.required' => 'Cost is required',

		];

		$validation = Validator::make($request->all(), $rules, $messages);

		if ($validation->fails()) {
			$errorMsgString = implode("<br/>",$validation->messages()->all());
            // change below as required

			return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
		}

		$path = public_path().'/uploads/';		
		if (!is_dir($path)) {
			\File::makeDirectory($path, $mode = 0777, true, true);
		}

    	//Finding the document type by Id
		//$documentTypeInfo = addproduct::find($request->idDocumentTypes);

		$fileName = null;
		if(!empty($request->file('image'))){

			$fileName = str_replace(" ", "_", $nameonly).'_'.time().'.'.$request->file('image')->extension();
			$request->file('image')->move(public_path() . '/uploads/', $fileName);

    		//If block image already existing it is deleted previous block image
			$filePath = public_path() . '/uploads/'. $document->product_file;


			if (file_exists($filePath)) {
				@unlink($filePath);
			}
		}

		//exit;
		$document = addproduct::find($id);
		$document->product_cost = $request->cost;
		$document->product_unit_name = $request->unit; 
		$document->product_name = $request->name;
		
		if(!empty($request->file('image'))){
			$document->product_file = $fileName;
		}

		$document->save();

		if($document){
			DB::commit();

			return Response::json(array('success' => TRUE, 'data' => 'Other Document Updated successfully'), 200);
		}else{
			//If block image already existing it is deleted previous block image
			$filePath = public_path() . '/uploads/'. $document->product_file;
			

			if (file_exists($filePath)) {
				@unlink($filePath);
			}
			DB::rollBack();
			return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'Other Document could not be Updated!'), 400);
		}



	}


}