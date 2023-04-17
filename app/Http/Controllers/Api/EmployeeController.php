<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Employee\StoreEmployeeRequest;
use App\Http\Requests\Api\Employee\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return EmployeeResource::collection(Employee::paginate());
    }

    public function store(StoreEmployeeRequest $request)
    {
        $employee = new Employee;

        $employee->name = $request->get('name');
        $employee->role_id = $request->get('role_id');
        $employee->email = $request->get('email');
        $employee->password = bcrypt($request->get('password'));
        $employee->manger_id = $request->get('manger_id');

        $employee->save();

        return new EmployeeResource($employee);
    }

    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->name = $request->get('name');
        $employee->role_id = $request->get('role_id');
        $employee->email = $request->get('email');
        $employee->manger_id = $request->get('manger_id');

        if ($request->filled('password')) {
            $employee->password = bcrypt($request->get('password'));
        }

        $employee->save();

        return new EmployeeResource($employee);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json([
            'message' => 'Deleted successfully',
        ]);
    }
}
