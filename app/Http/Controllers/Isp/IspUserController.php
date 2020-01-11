<?php

namespace App\Http\Controllers\Isp;

use App\Models\Isp\Isp;
use App\Models\Isp\IspUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IspUserController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['title'] = 'Manage ISP User';
        $this->data['i'] = 1;
    }

    public function index()
    {
        $this->data['ispUsers'] = IspUser::all();
        return view('isp.user.index', $this->data);
    }

    public function create()
    {
        $this->data['isps'] = Isp::all();
        return view('isp.user.create', $this->data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'ip' => 'required',
            'phone' => 'required',
            'isp_id' => 'required',
            'address' => 'nullable|min:3',
        ]);

        $ispUser = new IspUser;

        $ispUser->name = $request->name;
        $ispUser->email = $request->email;
        $ispUser->ip = $request->ip;
        $ispUser->phone = $request->phone;
        $ispUser->address = $request->address;
        $ispUser->isp_id = $request->isp_id;
        $ispUser->save();

        return redirect()->route('isp.user.index')->with(['message' => 'Save Successfully!']);
    }


    public function edit(IspUser $ispUser)
    {
        $this->data['ispUser'] = $ispUser;
        $this->data['isps'] = Isp::all();
        return view('isp.user.edit', $this->data);
    }


    public function update(Request $request, IspUser $ispUser)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'ip' => 'required',
            'phone' => 'required',
            'isp_id' => 'required',
            'address' => 'nullable|min:3',
        ]);

        $ispUser->name = $request->name;
        $ispUser->email = $request->email;
        $ispUser->ip = $request->ip;
        $ispUser->phone = $request->phone;
        $ispUser->address = $request->address;
        $ispUser->isp_id = $request->isp_id;
        $ispUser->save();

        return redirect()->route('isp.user.index')->with(['message' => 'Save Successfully!']);
    }


    public function destroy(IspUser $ispUser)
    {
        $ispUser->delete();
        return redirect()->back()->with('message', 'Delete Successfully!');
    }
}
