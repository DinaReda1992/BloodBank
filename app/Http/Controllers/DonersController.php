<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use Illuminate\Http\Request;

class DonersController extends Controller
{
    public function index()
    {
        $donor = Doner::all();
        return view ('doners', ['doners' => $donor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    public function store(Request $request, Doner $doner)
    {
        $request->validate([
            'firstName' => 'required',
            'secondName' => 'required',
            'thirdName' => 'required',
            'age' => 'required|numeric|gte:16|lte:60',
            'bloodType' => 'required',
            'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
            'lastDonate' => 'required'
        ]);
        $doner = new Doner;
        $doner->firstName = $request->firstName;
        $doner->secondName = $request->secondName;
        $doner->thirdName = $request->thirdName;
        $doner->lastName = $request->lastName;
        $doner->age = $request->age;
        $doner->bloodType = $request->bloodType;
        $doner->mobile = $request->mobile;
        $doner->address = $request->address;
        $doner->lastDonate = $request->lastDonate;
        $request->session()->flash('addition','  تمت الإضافة بنجاح');
        $doner->save();
        return redirect('/doners');
    }

    public function edit(Doner $doner)
    {
        return view('edit')->with('doner',$doner);
    }

    public function update(Request $request, Doner $doner)
{
    $request->validate([
        'firstName' => 'required|alpha',
        'secondName' => 'required|alpha',
        'thirdName' => 'required|alpha',
        'age' => 'required|numeric|gte:16|lte:60',
        'bloodType' => 'required',
        'mobile' => 'required|digits:11',
        'lastDonate' => 'required'
    ]);
        $doner->firstName = $request->firstName;
        $doner->secondName = $request->secondName;
        $doner->thirdName = $request->thirdName;
        $doner->lastName = $request->lastName;
        $doner->age = $request->age;
        $doner->bloodType = $request->bloodType;
        $doner->mobile = $request->mobile;
        $doner->address = $request->address;
        $doner->lastDonate = $request->lastDonate;
        $doner->save();
        $request->session()->flash('success','  تم التعديل بنجاح');
        return redirect('doners');
    }

    public function destroy(Doner $doner)
    {
        $doner->delete();
        session()->flash('deletion','  تم الحذف بنجاح');
        return redirect('/doners');
    }
}
