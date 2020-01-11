<?php

namespace App\Http\Controllers\Isp;

use App\Models\Isp\Isp;
use App\Models\Isp\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['title'] = 'Manage Package';
        $this->data['i'] = 1;
    }

    public function index()
    {
        $this->data['packages'] = Package::all();
        return view('isp.package.index', $this->data);
    }

    public function create()
    {
        $this->data['isps'] = Isp::all();
        return view('isp.package.create', $this->data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'isp_id' => 'required',
            'name' => 'required|min:3',
            'price' => 'required'
        ]);

        $package = new Package;

        $package->isp_id = $request->isp_id;
        $package->name = $request->name;
        $package->price = $request->price;
        $package->save();

        return redirect()->route('package.index')->with(['message' => 'Save Successfully!']);
    }


    public function edit(Package $package)
    {
        $this->data['package'] = $package;
        $this->data['isps'] = Isp::all();
        return view('isp.package.edit', $this->data);
    }


    public function update(Request $request, Package $package)
    {
        $request->validate([
            'isp_id' => 'required',
            'name' => 'required|min:3',
            'price' => 'required'
        ]);


        $package->isp_id = $request->isp_id;
        $package->name = $request->name;
        $package->price = $request->price;
        $package->save();

        return redirect()->route('package.index')->with(['message' => 'Save Successfully!']);
    }


    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->back()->with('message', 'Delete Successfully!');
    }
}
