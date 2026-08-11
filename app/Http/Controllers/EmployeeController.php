<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees =  \App\Models\Employee::with(['division', 'position'])
        ->latest()
        ->paginate(10);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = \App\Models\Division::orderBy('nama_divisi', 'asc')->get();
        $positions = \App\Models\Position::orderBy('nama_jabatan', 'asc')->get();

        return view('employees.create', compact('divisions', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'division_id' => 'required|exists:divisions,id',
            'position_id' => 'required|exists:positions,id',
            'nik' => 'required|string|max:50|unique:employees,nik',
            'nama_lengkap' => 'required|string|max:255',
            'email_kantor' => 'required|email|max:255|unique:employees,email_kantor',
            'no_hp' => 'nullable|string|max:20',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:1000',
            'agama' => 'required|string|max:50',
            'npwp' => 'nullable|string|max:50',
            'bpjs' => 'nullable|string|max:50',
            'tanggal_masuk' => 'required|date',
            'status_pegawai' => 'required|in:Tetap,Kontrak,Magang',
        ]);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $employee = new Employee();
        $employee->user_id = Auth::id();
        $employee->division_id = $validated['division_id'];
        $employee->position_id = $validated['position_id'];
        $employee->nik = $validated['nik'];
        $employee->nama_lengkap = $validated['nama_lengkap'];
        $employee->email_kantor = $validated['email_kantor'];
        $employee->no_hp = $validated['no_hp'] ?? null;
        $employee->jenis_kelamin = $validated['jenis_kelamin'];
        $employee->tanggal_lahir = $validated['tanggal_lahir'];
        $employee->alamat = $validated['alamat'];
        $employee->agama = $validated['agama'];
        $employee->npwp = $validated['npwp'] ?? null;
        $employee->bpjs = $validated['bpjs'] ?? null;
        $employee->tanggal_masuk = $validated['tanggal_masuk'];
        $employee->status_pegawai = $validated['status_pegawai'];
        $employee->is_active = true;
        $employee->save();

        return redirect()->route('employees.index')
            ->with('success', 'Data Pegawai Berhasil DiTambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
