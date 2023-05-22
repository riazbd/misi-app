<?php

namespace App\Http\Controllers;

use App\Models\Therapist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TherapistController extends Controller
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
        return view('therapists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            $user = new User();
            $therapist = new Therapist();
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $serialLength = 8; // Adjust the length as needed
            $userSerialNo = 'misi';

            for ($i = 0; $i < $serialLength; $i++) {
                $randomChar = $characters[rand(0, strlen($characters) - 1)];
                $userSerialNo .= $randomChar;
            }

            while (User::where('user_serial_no', $userSerialNo)->exists()) {
                $userSerialNo = 'misi';

                for ($i = 0; $i < $serialLength; $i++) {
                    $randomChar = $characters[rand(0, strlen($characters) - 1)];
                    $userSerialNo .= $randomChar;
                }
            }

            // save user
            $user->user_serial_no = $userSerialNo;
            $user->first_name = $data['first-name'];
            $user->last_name = $data['last-name'];
            $user->phone = $data['phone-number'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->sex = $data['sex'];
            $user->date_of_birth = $data['dob'];
            $user->age = $data['age'];
            $user->marital_status = $data['marital-status'];

            $user->save();

            // save patient
            $therapist->user_id = $user->id;
            $therapist->therapist_type = $data['therapist-type'];;
            $therapist->blood_group = $data['blood-group'];
            $therapist->country = $data['country'];
            $therapist->residential_address = $data['residential-address'];
            $therapist->insurance_number = $data['insurance-number'];
            $therapist->status = $data['status'];
            $therapist->alternative_phone = $data['alt-phone-number'];
            $therapist->emergency_contact = $data['emergency-contact'];
            $therapist->remarks = $data['remarks'];
            $therapist->city_or_state = $data['city-state'];
            $therapist->area = $data['area'];
            $therapist->DOB_number = $data['dob-number'];
            $therapist->BSN_number = $data['bsn-number'];
            // $therapist->file = $data[''];


            $therapist->save();



            return response()->json(['message' => 'Data saved successfully']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
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
