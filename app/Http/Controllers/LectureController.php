<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateLectureRequest;
use App\Lecture;
use App\Group;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Group $group)
    {
        $lectures = Lecture::where('group_id', $group->id)->get();

        return view('lectures.index', compact('group', 'lectures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Group $group)
    {
        return view('lectures.create', compact('group'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLectureRequest $request, Group $group)
    {
        $lecture = new Lecture;
        $lecture->group_id = $group->id;
        $lecture->date = $request->input('date');
        $lecture->name = $request->input('name');
        $lecture->description = $request->input('description');
        $lecture->save();

        $lectures = Lecture::where('group_id', $group->id)->get();

        return view('lectures.index', compact('group', 'lectures'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $lectures = Lecture::where('group_id', $group->id)->get();

        return view('lectures.index', compact('group', 'lectures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group, Lecture $lecture)
    {
        return view('lectures.edit', compact('group', 'lecture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateLectureRequest $request, Group $group, Lecture $lecture)
    {
        $lecture->group_id = $group->id;
        $lecture->date = $request->input('date');
        $lecture->name = $request->input('name');
        $lecture->description = $request->input('description');
        $lecture->save();

        $lectures = Lecture::where('group_id', $group->id)->get();

        return view('lectures.index', compact('lectures', 'group'));
    }

    public function delete(Group $group, Lecture $lecture)
    {
        return view('lectures.destroy', compact('group', 'lecture'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group, Lecture $lecture)
    {
        $lecture->delete();
        $lectures = Lecture::where('group_id', $group->id)->get();

        return redirect()->route('lectures.index', compact('group', 'lectures'));
    }
}
