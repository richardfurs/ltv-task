<?php

namespace App\Http\Controllers;

use App\Rules\AgeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $inputData = $request->only(['name', 'surname', 'birth_date']);

        //VALIDATION
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'birth_date' => ['required', new AgeValidation()],
            'image' => 'required|image|size:2048',
        ]);


        //ADDING PERSON INFO INTO JSON
        $imgHash = $request->image->hashName();
        $inputData['image'] = $imgHash;

        $textData = json_encode($inputData, JSON_UNESCAPED_SLASHES);
        $textFile = $inputData['name'].'_'.$inputData['surname'].'.json';
        $textDestinationPath = storage_path('app/public/json/');

        File::put($textDestinationPath.$textFile,$textData);


        //ADDING IMAGE TO STORAGE
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->store('public/images');
        }

        return redirect('/')->with('success', 'Success, form data stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
