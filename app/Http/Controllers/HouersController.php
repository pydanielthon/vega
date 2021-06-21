<?php

namespace App\Http\Controllers;
use App\Models\Houers;
use App\Models\Workers;
use App\Models\Contrahents;

use Illuminate\Http\Request;

class HouersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houers = Houers::all()->sortBy('id');
        return view('houers.list',
    ['houers' => $houers
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workers = Workers::all();
        $contrahents = Contrahents::all();

        return view('houers.create',
         [
             'workers' => $workers,
             'contrahents' => $contrahents


         ]
        );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Houers();
        $comment->contrahents_id = $request['contrahentID'];
        $comment->workers_id = $request['workerID'];
        $comment->data = $request['data'];;
        $comment->houers = $request['houers'];;
$comment->corrections = true;
        $comment->save();
        $request->validate([
            'data' => 'required',
            'houers' => 'required',
        ]);


        // Houers::create($request->all());

        return view('home')->with('success','Post created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Houers $houers)
    {
        return view('houers.show',compact('houers'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Houers $houers)
    {
        return view('houers.edit',compact('houers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Houers $houers)
    {
        $request->validate([
            'data' => 'required',
            'houers' => 'required',
        ]);

        $houers->update($request->all());

        return redirect()->route('houers.list')->with('success','Post updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Houers $houers)
    {
        $houers->delete();

        return view('houers.list')
                        ->with('success','post deleted successfully');

    }
}
