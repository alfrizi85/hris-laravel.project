@extends('layouts.hris')

@section('content')

<div class='p-6'>

```
<div class='flex items-center justify-between mb-6'>
    <div>
        <h1 class='text-3xl font-bold text-gray-800'>Data Pegawai</h1>
        <p class='text-sm text-gray-500'>Daftar seluruh pegawai perusahaan</p>
    </div>

    <a href='#'
       class='px-4 py-2 rounded-xl bg-[#6B2147] text-white text-sm font-medium hover:opacity-90 transition'>
        + Tambah Pegawai
    </a>
</div>

@if(session('success'))
    <div class='mb-4 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-700'>
        {{ session('success') }}
    </div>
@endif

<div class='overflow-hidden rounded-2xl bg-white shadow border border-gray-100'>
    <div class='overflow-x-auto'>
        <table class='min-w-full divide-y divide-gray-200'>
            <thead class='bg-gray-50'>
                <tr>
                    <th class='px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500'>NIK</th>
                    <th class='px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500'>Nama Pegawai</th>
                    <th class='px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500'>Email Kantor</th>
                    <th class='px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500'>Divisi</th>
                    <th class='px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500'>Jabatan</th>
                    <th class='px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500'>No. HP</th>
                </tr>
            </thead>

            <tbody class='divide-y divide-gray-100 bg-white'>
                @forelse($employees as $employee)
                    <tr class='hover:bg-gray-50 transition'>
                        <td class='px-6 py-4 text-sm text-gray-700'>{{ $employee->nik }}</td>
                        <td class='px-6 py-4'>
                            <div class='font-medium text-gray-900'>{{ $employee->nama_lengkap }}</div>
                        </td>
                        <td class='px-6 py-4 text-sm text-gray-700'>{{ $employee->email_kantor }}</td>
                        <td class='px-6 py-4 text-sm text-gray-700'>
                            {{ $employee->division->nama_divisi ?? '-' }}
                        </td>
                        <td class='px-6 py-4 text-sm text-gray-700'>
                            {{ $employee->position->nama_jabatan ?? '-' }}
                        </td>
                        <td class='px-6 py-4 text-sm text-gray-700'>{{ $employee->no_hp ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan='6' class='px-6 py-10 text-center text-sm text-gray-500'>
                            Belum ada data pegawai.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class='border-t border-gray-100 px-6 py-4'>
        {{ $employees->links() }}
    </div>
</div>
```

</div>
@endsection
