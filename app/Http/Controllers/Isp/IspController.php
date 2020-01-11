<?php

namespace App\Http\Controllers\Isp;

use App\Models\Isp\Isp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IspController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['title'] = 'Manage ISP';
        $this->data['i'] = 1;
    }

    public function index()
    {
        $this->data['isps'] = Isp::all();
        return view('isp.index', $this->data);
    }

    public function create()
    {
        return view('isp.create', $this->data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'nullable|min:5',
            'lat' => 'nullable|min:5',
            'long' => 'nullable|min:5',
        ]);

        $isp = new Isp;

        $isp->name = $request->name;
        $isp->description = $request->description;
        $isp->lat = $request->lat;
        $isp->long = $request->long;
        $isp->save();

        return redirect()->route('isp.index')->with(['message' => 'Save Successfully!']);
    }


    public function edit(Isp $isp)
    {
        $this->data['isp'] = $isp;
        return view('isp.edit', $this->data);
    }


    public function update(Request $request, Isp $isp)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'nullable|min:5',
            'lat' => 'nullable|min:5',
            'long' => 'nullable|min:5',
        ]);

        $isp->name = $request->name;
        $isp->description = $request->description;
        $isp->lat = $request->lat;
        $isp->long = $request->long;
        $isp->save();

        return redirect()->route('isp.index')->with(['message' => 'Save Successfully!']);
    }


    public function destroy(Isp $isp)
    {
        $isp->delete();
        return redirect()->back()->with('message', 'Delete Successfully!');
    }
}
