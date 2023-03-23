<?php

namespace App\Http\Controllers;

use App\Models\Spinner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SpinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TotalSpinners()
    {
        $spinners = Spinner::sum('wallet_address');
        return response()->json([
            'status' => 200,
            'message' => 'Total spinners',
            'data' => $spinners
        ]);
    }

    public function countSpinners()
    {
        $spinners = Spinner::count();
        return response()->json([
            'status' => 200,
            'message' => 'Total spinners',
            'data' => $spinners
        ]);
    }

    public function index()
    {
        // $spinners = Spinner::all();
        $spinners = Spinner::orderBy("id", "desc")->get();
        return response()->json([
            'status' => 200,
            'message' => 'All spinners',
            'data' => $spinners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spinner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'wallet_address' => 'unique:spinners|required',
        // ]);
        // if ($validator->fails()) {
        //     return response()->json([
        //         'status' => 400,
        //         'message' => 'You have already submitted your wallet address',
        //         'errors' => $validator->errors()
        //     ]);
        // }
        //input validation
        $spinner = new Spinner;
        $spinner->wallet_address = $request->input('wallet_address');
        $spinner->save();
        return response()->json([
            'status' => 200,
            'message' => 'Congratulations! You have successfully submitted your wallet address',
        ]);
    }

    public function CreateSpinner(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wallet_address' => 'unique|required| min:42 | max:42',
        ]);

        //input validation
        $spinner = new Spinner;
        $spinner->wallet_address = $request->input('wallet_address');
        $spinner->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spinner  $spinner
     * @return \Illuminate\Http\Response
     */
    public function show(Spinner $spinner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spinner  $spinner
     * @return \Illuminate\Http\Response
     */
    public function edit(Spinner $spinner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spinner  $spinner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spinner $spinner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spinner  $spinner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spinner $spinner)
    {
        Spinner::destroy($spinner->id);
        return redirect()->back();
    }
}
