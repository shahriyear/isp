<?php

namespace App\Http\Controllers\Administration\Settings;

use App\Http\Controllers\Controller;
use App\Models\Administration\Settings\Branch;
use App\Traits\AppTools;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['i'] = 1;
        $this->data['title'] = 'Manage Branch';
    }

    public function index()
    {
        $this->data['branches'] = Branch::all();
        return view('administration.settings.branch.index', $this->data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
        ]);
        $branch = new Branch;
        $branch->company_id = 1;
        $branch->code = AppTools::getCode(Branch::class);
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->status = 'a';
        $branch->type = $request->type;
        $branch->save();
        return redirect()->back()->with(['message' => 'Save Successfully!']);
    }

    public function edit(Branch $branch)
    {
        $this->data['branch'] = $branch;
        $this->data['branches'] = Branch::all();
        return view('administration.settings.branch.edit', $this->data);
    }

    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
        ]);
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->type = $request->type;
        $branch->save();
        return redirect()->route('branch.index')->with(['message' => 'Save Successfully!']);
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branch.index')->with(['message' => 'Delete Successfully!']);
    }
}
