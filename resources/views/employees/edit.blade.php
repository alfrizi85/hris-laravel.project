@extends('layouts.hris')

@section('content')

<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Edit Pegawai</h1>
            <p class="text-gray-500 mt-2">Perbarui data pegawai NovaCore HRIS.</p>
        </div>

```
    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-700">
            <ul class="list-disc list-inside space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">NIK</label>
                <input type="text" name="nik" value="{{ old('nik', $employee->nik) }}"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email Kantor</label>
                <input type="email" name="email_kantor" value="{{ old('email_kantor', $employee->email_kantor) }}"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">No. HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp', $employee->no_hp) }}"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Divisi</label>
                <select name="division_id"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}" @selected(old('division_id', $employee->division_id) == $division->id)>
                            {{ $division->nama_divisi }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jabatan</label>
                <select name="position_id"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}" @selected(old('position_id', $employee->position_id) == $position->id)>
                            {{ $position->nama_jabatan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                <select name="jenis_kelamin"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
                    <option value="Laki-laki" @selected(old('jenis_kelamin', $employee->jenis_kelamin) == 'Laki-laki')>Laki-laki</option>
                    <option value="Perempuan" @selected(old('jenis_kelamin', $employee->jenis_kelamin) == 'Perempuan')>Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk"
                    value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}" 
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status Pegawai</label>
                <select name="status_pegawai"
                    class="w-full rounded-xl border-gray-300 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]">
                    <option value="Tetap" @selected(old('status_pegawai', $employee->status_pegawai) == 'Tetap')>Tetap</option>
                    <option value="Kontrak" @selected(old('status_pegawai', $employee->status_pegawai) == 'Kontrak')>Kontrak</option>
                    <option value="Magang" @selected(old('status_pegawai', $employee->status_pegawai) == 'Magang')>Magang</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('employees.index') }}"
                class="px-5 py-3 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50">
                Batal
            </a>

            <button type="submit"
                class="px-5 py-3 rounded-xl bg-[#7A1F5C] text-white font-semibold hover:bg-[#64184c] transition">
                Update Pegawai
            </button>
        </div>
    </form>
</div>
```

</div>
@endsection
