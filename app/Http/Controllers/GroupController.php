<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateGroupRequest;
use App\User;
use App\Course;
use App\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::get();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderBy('name', 'asc')->get();
        $users = User::where('type', 1)->orderBy('name', 'asc')->get();

        return view('groups.create', compact('courses', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroupRequest $request)
    {
        $group = new Group;
        $group->course_id = $request->input('course_id');
        $group->lector_id = $request->input('lector_id');
        $group->name = $request->input('name');
        $group->start_date = $request->input('start_date');
        $group->end_date = $request->input('end_date');
        $group->save();

        return redirect('/groups');
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
    public function edit(Group $group)
    {
        $courses = Course::orderBy('name', 'asc')->get();
        $users = User::where('type', 1)->orderBy('name', 'asc')->get();

        return view('groups.edit', compact('group', 'courses', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateGroupRequest $request, Group $group)
    {
        $group->name = $request->input('name');
        $group->course_id = $request->input('course_id');
        $group->lector_id = $request->input('lector_id');
        $group->start_date = $request->input('start_date');
        $group->end_date = $request->input('end_date');
        $group->save();

        return redirect('/groups');
    }

    public function delete(Group $group)
    {
        return view('groups.destroy', compact('group'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect('/groups');
    }
}
