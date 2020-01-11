<?php

namespace App\Http\Controllers\Administration\Settings;

use App\Http\Controllers\Controller;
use App\Models\Administration\Settings\Branch;
use App\Models\Administration\Settings\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    protected $data = [];

    public function __construct()
    {
        $this->data['title'] = 'Company Information';
    }

    public function switcher($id)
    {
        session()->put('branch_id', $id);
        $app = Branch::find($id);
        session()->put('app_type', $app->type);
        return redirect()->route('home');
    }

    public function index()
    {
        $this->data['company'] = Company::findOrFail(1);
        return view('administration.settings.company.index', $this->data);
    }

    public function update(Request $request, Company $company)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);


        if ($request->has('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:png',
            ]);
            // Get image file
            $image = $request->file('logo');
            // Make a image name based on user name and current timestamp
            $name = time();
            // Define folder path
            $folder = '/uploads/company/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $image->move(public_path($folder), $filePath);

            // Delete Old Logo
//            unlink(public_path($company->logo));

            $company->logo = $filePath;
        }


        $company->name = $request->name;
        $company->address = $request->address;
        $company->save();

        return redirect()->back()->with(['message' => 'Save Successfully!']);

    }


}
