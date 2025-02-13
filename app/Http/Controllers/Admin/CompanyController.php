<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //go to page company.index  
        $company = Company::first();
        return view('admin.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //go to create page company.create
        $company = Company::first();
        if(!$company){
            return view('admin.company.create');
        }
        else{
            return redirect()->route('company.index');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //save data in database company.store
        $request->validate  ([
            "name" => "required|max:80",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "tel" => "required",
            "logo" => "required|mimes:jpg,png,jpeg|max:2048",
            
        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->tel = $request->tel;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $company->logo = 'images/'. $fileName;
        }
        $company->save();

        toast('Record saved successfully', 'success');

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //go to edit page company.edit
        $company = Company::find($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update data in database company.update

        $request->validate([
            "name" => "required|max:80",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "tel" => "required",
            "logo" => "mimes:jpg,png,jpeg|max:2048",
            
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->tel = $request->tel;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $company->logo = 'images/'. $fileName;
        }
        $company->update();

        toast('Record updated successfully', 'success');
        return redirect()->route('company.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete database data company.destroy
        
        $company = Company::find($id);
        $company->delete();

        toast('Record deleted successfully', 'success');
        return redirect()->back();
    }

}