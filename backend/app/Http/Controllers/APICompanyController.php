<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class APICompanyController extends Controller
{
// all Companys
    public function index()
    {
        $Companies = Company::all()->toArray();
        return array_reverse($Companies);
    }

    // add Company
    public function add(Request $request): JsonResponse
    {
        $Company = new Company(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'address' => $request->input('address')
            ]
        );
        $Company->save();

        return response()->json('The Company successfully added');
    }

    // edit Company
    public function edit($id)
    {
        $Company = Company::find($id);
        return response()->json($Company);
    }

    // update Company
    public function update($id, Request $request)
    {
        $Company = Company::find($id);
        $Company->update($request->all());

        return response()->json('The Company successfully updated');
    }

    // delete Company
    public function delete($id)
    {
        $Company = Company::find($id);
        $Company->delete();

        return response()->json('The Company successfully deleted');
    }
}
