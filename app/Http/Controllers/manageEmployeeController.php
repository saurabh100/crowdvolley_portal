<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\SalaryStructure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class manageEmployeeController extends Controller
{
    public function addEmployee()
    {
        $departments = Department::all();
        $designations = Designation::all();
        $salaries = SalaryStructure::all();
        return view('admin.pages.manageEmployee.addEmployee', compact('departments', 'designations', 'salaries'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'employee_id' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            'salary_structure_id' => 'required',
            'date_of_birth' => 'required|date',
            'hire_date' => 'required|date',
            'email' => 'required|email|max:255|unique:employees,email',
            'phone' => ['required', 'numeric', 'regex:/^[0-9]{11}$/'],
            'joining_mode' => 'required',
            'location' => 'required|string|max:100',
        ]);

        if ($validate->fails()) {

            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $fileName = null;
        if ($request->hasFile('employee_image')) {
            $file = $request->file('employee_image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

            $file->storeAs('/uploads', $fileName);
        }


        Employee::create([
            'name' => $request->name,
            'employee_id' => $request->employee_id,
            'employee_image' => $fileName,
            'department_id' => $request->department_id,
            'salary_structure_id' => $request->salary_structure_id,
            'designation_id' => $request->designation_id,
            'date_of_birth' => $request->date_of_birth,
            'hire_date' => $request->hire_date,
            'email' => $request->email,
            'phone' => $request->phone,
            'joining_mode' => $request->joining_mode,
            'location' => $request->location,
        ]);
        notify()->success('New Employee created successfully.');
        return redirect()->route('manageEmployee.ViewEmployee');
    }
}
