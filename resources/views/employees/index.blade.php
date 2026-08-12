@extends('layouts.hris')

@section('content')

<div class='p-6'>

```
<div class='flex items-center justify-between mb-6'>
    <div>
        <h1 class='text-3xl font-bold text-gray-800'>Data Pegawai</h1>
        <p class='text-sm text-gray-500'>Daftar seluruh pegawai perusahaan</p>
    </div>

    <a href="{{ route('employees.create')  }}"
       class='px-4 py-2 rounded-xl bg-[#6B2147] text-white text-sm font-medium hover:opacity-90 transition'>
        + Tambah Pegawai
    </a>
</div>

@if(session('success'))
    <div class="mb-6 rounded-xl bg-green-100 border border-green-200 px-4 py-3 text-green-800">
        {{ session('success') }}
    </div>
@endif

<div class='overflow-hidden rounded-2xl bg-white shadow border border-gray-100'>
    <form method="GET" action="{{ route('employees.index') }}" class="mb-6">
    <div class="flex gap-3">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari NIK, nama, atau email..."
            class="flex-1 rounded-xl border border-gray-300 px-4 py-3 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]"
        >

        <button
            type="submit"
            class="px-5 py-3 rounded-xl bg-[#7A1F5C] text-white font-medium hover:opacity-90 transition"
        >
            Cari
        </button>

        @if(request('search'))
            <a
                href="{{ route('employees.index') }}"
                class="px-5 py-3 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50 transition"
            >
                Reset
            </a>
        @endif
    </div>
</form>

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
                    <th class='px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500'>Aksi</th>
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
                        <td class='px-6 py-4 text-right text-sm font-medium'>
                            <a href="{{ route('employees.edit', $employee->id) }}"
                               class='text-[#6B2147] hover:underline'>Edit</a>

                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class='text-red-600 hover:underline ml-4'
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">Hapus</button>
                            </form>
                        </td>
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
