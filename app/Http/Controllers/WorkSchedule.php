<?php

namespace App\Http\Controllers;

use App\Models\LeaveSchedule;
use App\Models\Therapist;
use App\Models\WorkDayTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkSchedule extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worktimes = WorkDayTime::all();

        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
            'Therapist',
            'Star Time',
            'End Time',
            'Weekly Off'
        ];



        $data = [];

        foreach ($worktimes as $worktime) {
            $items = [];

            $holidays = json_decode($worktime->weekly_holidays);

            $holidayNames = [];
            $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            foreach ($holidays as $holiday) {
                $dayIndex = intval($holiday);

                // Create a Carbon instance and set the day of the week based on the index
                $date = $days[$dayIndex];


                $holidayNames[] = $date;
            }

            $dayNamesString = implode(', ', $holidayNames);

            $startTime = Carbon::createFromFormat('H:i:s', $worktime->start_time)->format('h:i A');
            $endTime = Carbon::createFromFormat('H:i:s', $worktime->end_time)->format('h:i A');
            array_push($items, '<nobr>
                    <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-worktime-id="' . $worktime->id . '" id="workmodalshow">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button></nobr>', $worktime->id, $worktime->therapist_id, $startTime, $endTime, $dayNamesString);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];

        return view('schedule.work.index', compact('heads', 'config'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function toFetchData(Request $request)
    {
        try {
            $worktime = WorkDayTime::where('id', $request->input('worktimeId'))->first();

            $id = $worktime->id;
            $start_time = $worktime->start_time;
            $end_time = $worktime->end_time;

            $weekly_off = json_decode($worktime->weekly_holidays);

            return response()->json(['id' => $id, 'start_time' => $start_time, 'end_time' => $end_time, 'weekly_off' => $weekly_off]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function updateWorkTime(Request $request, $id)
    {
        try {
            $data = $request->all();
            $worktime = WorkDayTime::where('id', $id)->first();

            $worktime->start_time = Carbon::createFromFormat('g:i A', $data['start-time'])->format('H:i:s');
            $worktime->end_time = Carbon::createFromFormat('g:i A', $data['end-time'])->format('H:i:s');
            $worktime->weekly_holidays = json_encode($data['weeklyoff']);

            $worktime->save();
            return response()->json(['message' => 'Succesfully Saved']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function leaveIndex()
    {
        $leaves = LeaveSchedule::all();
        $therapists = Therapist::all();

        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
            'Therapist',
            'Star Date',
            'End Date',
        ];



        $data = [];


        foreach ($leaves as $leave) {
            $items = [];
            array_push($items, '<nobr>
                    <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-leave-id="' . $leave->id . '" id="leaveUpdatemodalshow">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button></nobr>', $leave->id, $leave->therapist_id, $leave->start_date, $leave->end_date);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];

        return view('schedule.leave.index', compact('heads', 'config', 'therapists'));

    }

    public function leaveCreate(Request $request)
    {
        try {
            $data = $request->all();

            $leave = new LeaveSchedule();

            $leave->therapist_id = $data['therapist'];

            $dates = explode(" - ", $data['dates']);
            $startDate = Carbon::createFromFormat('m/d/Y', $dates[0])->format('Y-m-d');
            $endDate = Carbon::createFromFormat('m/d/Y', $dates[1])->format('Y-m-d');

            $dateRange = [];
            $currentDate = Carbon::createFromFormat('Y-m-d', $startDate);
            while ($currentDate <= $endDate) {
                $dateRange[] = $currentDate->format('Y-m-d');
                $currentDate->addDay();
            }

            $leave->dates = json_encode($dateRange);

            if ($startDate === $endDate) {
                // Partial leave
                $leave->start_time = $data['start-time'];
                $leave->end_time = $data['end-time'];
                $leave->dates = json_encode([$startDate]);
            } else {
                // Full day leave
                $leave->start_time = null;
                $leave->end_time = null;
            }

            $leave->save();

            return response()->json(['message' => 'Leave Created']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }

    public function toFetchLeaves(Request $request)
    {

        $leave = LeaveSchedule::where('id', $request->input('leaveId'))->first();

        $therapist = Therapist::where('id', $leave->therapist_id)->first();

        $therapist_id = $therapist->id;

        $start_date = Carbon::createFromFormat('Y-m-d H:i:s', $leave->start_date)->format('m/d/Y');
        $end_date = Carbon::createFromFormat('Y-m-d H:i:s', $leave->end_date)->format('m/d/Y');

        $therapist_name = $therapist->user()->first()->first_name . " " . $therapist->user()->first()->last_name;

        return response()->json(['leave' => $leave, 'therapist' => $therapist, 'therapist_id' => $therapist_id, 'therapist_name' => $therapist_name, 'start_date' => $start_date, 'end_date' => $end_date]);

    }

    public function UpdateLeaves(Request $request, $id)
    {
        try {
            $data = $request->all();

            $leave = LeaveSchedule::where('id', $id)->first();

            $leave->start_date = Carbon::createFromFormat('m/d/Y', $data['start-date'])->format('Y-m-d');
            $leave->end_date = Carbon::createFromFormat('m/d/Y', $data['end-date'])->format('Y-m-d');

            $leave->save();

            return response()->json(['message' => 'Updated Successfully']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }
}
