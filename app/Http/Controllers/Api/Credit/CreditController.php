<?php

namespace App\Http\Controllers\Api\Credit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CreditModel;

use Validator;

class CreditController extends Controller
{
  public function credit() {
          return response()->json(CreditModel::get(), 200);
  }

  public function creditById($id) {
      $credit = CreditModel::find($id);
      if ( is_null($credit) ) {
          return response()->json(['error' => true, 'message' => 'Not found'], 404);
      }
      return response()->json($credit, 200);
  }

  public function creditSave(Request $req) {
      $rules = [
          'surname'=>'required|min:2|max:40',
          'name'=>'required|min:2|max:40',
          'patronymic'=>'required|min:2|max:40',
          'birthDate'=>'nullable|date',
          'birthPlace'=>'required|min:2|max:40',
          'sex'=>'required',
          'resident'=>'required|boolean',
          'snils'=>'required|min:11|max:11',
          'education'=>'required|min:2|max:40',
          'SumCredit'=>'required|min:2|max:40',
          'CreditTerm'=>'required|min:2|max:40',
          'telephoneNumber'=>'required|min:2|max:12',
      ];
      $validator = Validator::make($req->all(), $rules);
      if ($validator->fails()) {
          return response()->json($validator->errors(), 400);
      }
      $credit = CreditModel::create($req->all());
      return response()->json($credit, 201);
  }

  public function creditEdit(Request $req, $id) {
      $rules = [
        'surname'=>'required|min:2|max:40',
        'name'=>'required|min:2|max:40',
        'patronymic'=>'required|min:2|max:40',
        'birthDate'=>'nullable|date',
        'birthPlace'=>'required|min:2|max:40',
        'sex'=>'required',
        'resident'=>'required|boolean',
        'snils'=>'required|min:11|max:11',
        'education'=>'required|min:2|max:40',
        'SumCredit'=>'required|min:2|max:40',
        'CreditTerm'=>'required|min:2|max:40',
        'telephoneNumber'=>'required|min:2|max:12',
      ];
      $validator = Validator::make($req->all(), $rules);
      if ($validator->fails()) {
          return response()->json($validator->errors(), 400);
      }
      $credit = CreditModel::find($id);
      if ( is_null($credit) ) {
          return response()->json(['error' => true, 'message' => 'Not found'], 404);
      }
      $credit->update($req->all());
      return response()->json($credit, 200);
  }

  public function creditDelete(Request $req, $id) {
      $credit = CreditModel::find($id);
      if ( is_null($credit) ) {
          return response()->json(['error' => true, 'message' => 'Not found'], 404);
      }
      $credit->delete();
      return response()->json('', 204);
  }
}
