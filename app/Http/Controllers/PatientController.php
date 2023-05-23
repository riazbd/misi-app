<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
            'First Name',
            'Last Name',
            'Status',
            // ['label' => 'Phone', 'width' => 40],
            'Email',
            'Phone',
            'Alternative Phone',
            'Emergency Contact',
            'Sex',
            'Date of Birth',
            'Maritual Status',
            'Patient Source',
            'Blood Group',
            'Country',
            'Residential Address',
            'Insurance Number',
            'Occupation',
            'City/State',
            'Area',
            'DOB Number',
            'BSN Number',
            'Remarks'


        ];



        $data = [];

        foreach ($patients as $patient) {
            $items = [];

            array_push($items, '<nobr><a class="btn btn-xs btn-default text-primary mx-1 shadow" href="' . route('users.edit', ['user' => $patient->id]) . '">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </a><a class="btn btn-xs btn-default text-danger mx-1 shadow" href="' . route('users.destroy', ['user' => $patient->id]) . '">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </a><a class="btn btn-xs btn-default text-teal mx-1 shadow" href="' . route('users.index', ['user' => $patient->id]) . '">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a></nobr>', $patient->id, $patient->user()->first()->first_name, $patient->user()->first()->last_name, $patient->user()->first()->status, $patient->user()->first()->email, $patient->user()->first()->phone, $patient->alternative_phone, $patient->emergency_contact, $patient->user()->first()->sex, $patient->user()->first()->date_of_birth, $patient->user()->first()->marital_status, $patient->patient_source, $patient->blood_group, $patient->country, $patient->residential_address, $patient->insurance_number, $patient->occupation, $patient->city_or_state, $patient->area, $patient->DOB_number, $patient->BSN_number, $patient->remarks);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];

        return view('patients.index', compact('heads', 'config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
            $patient = new Patient();
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
            // $user->age = $data['age'];
            $user->status = $data['status'];
            $user->marital_status = $data['marital-status'];

            $user->save();

            // save patient
            $patient->user_id = $user->id;
            $patient->blood_group = $data['blood-group'];
            $patient->country = $data['country'];
            $patient->residential_address = $data['residential-address'];
            $patient->medical_history = $data['medical-history'];
            $patient->insurance_number = $data['insurance-number'];
            $patient->occupation = $data['occupation'];
            // $patient->status = $data['status'];
            $patient->alternative_phone = $data['alt-phone-number'];
            $patient->emergency_contact = $data['emergency-contact'];
            $patient->remarks = $data['remarks'];
            $patient->city_or_state = $data['city-state'];
            $patient->area = $data['area'];
            $patient->DOB_number = $data['dob-number'];
            $patient->BSN_number = $data['bsn-number'];
            $patient->file_type = $data['file-type'];
            // $patient->file = $data[''];


            $patient->save();



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
