<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $results = Result::all();
        return view('welcome', ['results' => $results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'course_name' => ['required', 'string'],
            'course_code' => ['required', 'string', 'alpha_num'],
            'time' => ['required', 'date']
        ]);

        Result::create($data);

        return redirect(route('results.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $result
     * @return \Illuminate\View\View
     */
    public function show(Result $result)
    {
        return view('results.show', ['result' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $result
     * @return \Illuminate\View\View
     */
    public function edit(Result $result)
    {
        return view('results.edit', ['result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, Result $result)
    {
        $data = $request->validate([
            'course_name' => ['required', 'string'],
            'course_code' => ['required', 'string', 'alpha_num'],
            'time' => ['required', 'date']
        ]);
        $result->update($data);

        return redirect(route('results.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $result
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return redirect(route('results.index'));
    }
}
