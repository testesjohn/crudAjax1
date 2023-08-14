<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();

        return view('home', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'matter' => 'required|string',
            'teacher_name' => 'required|string',
        ]);

        Activity::create($data);

        $create['message'] = "Activity created successfully!";
        $create['route_next'] = route('activity.index');
        $create['success'] = true;

        return response() -> json($create);
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        return view('edit', ['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        $activity->update($request->all());

        $update['message'] = "Activity updated succesfully";
        $update['success'] = true;
        $update['route_next'] = route('activity.index');

        return response() -> json($update);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        $destroy['message'] = "Activity deleted succesfully";
        $destroy['success'] = true;
        $destroy['route_next'] = route('activity.index');

        return response() -> json($destroy);
    }
}
