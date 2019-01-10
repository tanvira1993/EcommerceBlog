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
		$rules = [
			
			'image' => 'required |max:51200|mimes:jpg,jpeg,png,pdf,gif'
		];

		$messages = [

			'image.required' => 'Attachment is required',

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
		$fileName = null;
		if(!empty($request->file('image'))){

			$fileName = str_replace(" ", "_", $documentTypeInfo->name).'_'.time().'.'.$request->file('image')->extension();
			$request->file('image')->move(public_path() . '/uploads/', $fileName);
		}

		//exit;
		$document = new addproduct;
		$document->product_file = !empty($fileName) ? $fileName : null;
		
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
}