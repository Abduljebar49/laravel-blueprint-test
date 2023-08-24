<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class employeeController extends Controller
{
    public function test(Request $request): Response
    {
        $employees = Employee::all();
    }

    public function test1(Request $request): Response
    {
        $salary = $request->salary;
        $employees = Employee::where('salary', $salary)->orderBy('bonus')->get();
        dd($employees);
    }
}
