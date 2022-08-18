<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use App\Http\Controllers\SendEmailController;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Leave::all();
        $response = [
            'success' => true,
            'data' => $data,
            'status' => 200,
            'message' => 'Get leaves successfully'
        ];
        return Response()->json($response, 200);
    }

    /**
     * Display a listing of the resource with user.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLeavesUser()
    {
        $data = Leave::with('user')->get();
        $response = [
            'success' => true,
            'data' => $data,
            'status' => 200,
            'message' => 'Get leaves with user successfully'
        ];
        return Response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leave = new Leave();
        $leave->user_id = $request->user_id;
        $leave->start_date = $request->start_date;
        $leave->start_time = $request->start_time;
        $leave->end_date = $request->end_date;
        $leave->end_time = $request->end_time;
        $leave->duration = $request->duration;
        $leave->leave_type = $request->leave_type;
        $leave->reason = $request->reason;
        $leave->status = 'Pending';
        $leave->is_review = false;
        $leave->save();

<<<<<<< HEAD
        // Send Mail Request
        $sendMail = (new SendEmailController)->sendMailRequest($request);

        return response()->json(['message'=>'Leave created successfully']);
=======
        $response = [
            'success' => true,
            'data' => $leave,
            'status' => 200,
            'message' => 'Create leave successfully'
        ];
        return Response()->json($response, 200);
>>>>>>> 5dd92b3e15dec38b56833a5d09a7d6d1c7c8949b
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        $response = [
            'success' => true,
            'data' => $leave,
            'status' => 200,
            'message' => 'Get leave successfully'
        ];
        return Response()->json($response, 200);
    }

    /**
     * Display the specified resource with user.
     *
     * @param  \App\Models\Leave  $id
     * @return \Illuminate\Http\Response
     */
    public function getLeaveUser($id)
    {
        $leave =  Leave::with('user')->findOrFail($id);
        $response = [
            'success' => true,
            'data' => $leave,
            'status' => 200,
            'message' => 'Get leave with user successfully'
        ];
        return Response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, Leave $leave)
    {
        $leave->status = $request->status;
        $leave->save();

        $response = [
            'success' => true,
            'data' => $leave,
            'status' => 200,
            'message' => 'Update leave status successfully'
        ];
        return Response()->json($response, 200);
    }

    /** Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Leave  $leave
    * @return \Illuminate\Http\Response
    */
    public function updateAsViewed(Request $request, Leave $leave)
    {
        $leave->is_review = true;
        $leave->save();

        $response = [
            'success' => true,
            'data' => $leave,
            'status' => 200,
            'message' => 'Update leave as reviewed successfully'
        ];
        return Response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        $leave->delete();
        $response = [
            'success' => true,
            'data' => $leave,
            'status' => 200,
            'message' => 'Delete leave successfully'
        ];
        return Response()->json($response, 200);
    }
}
