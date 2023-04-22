<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserTaskRequest;
use App\Http\Requests\UpdateUserTaskRequest;
use App\Models\Task;
use App\Models\UserTask;

class TaskUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserTaskRequest $request)
    {
        UserTask::create($request->all());

        return response()->json([
            'status'  => true,
            'message' => "Task successfully assigned to user!",
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTask $userTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTask $userTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserTaskRequest $request, UserTask $userTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTask $userTask)
    {
        //
    }
}
