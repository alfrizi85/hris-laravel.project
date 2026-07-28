<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Division;
use App\Models\Position;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $totalDivisions = Division::count();
        $totalPositions = Position::count();
        $todayAttendance = 0;

        return view('dashboard.index', compact(
            'totalEmployees',
            'totalDivisions',
            'totalPositions',
            'todayAttendance',
        ));
    }
}