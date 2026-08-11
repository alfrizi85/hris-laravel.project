@extends('layouts.hris')

@section('content')

<div class='p-6 max-w-3xl mx-auto'>

<div class='mb-6'>
    <h1 class='text-3xl font-bold text-gray-800'>Tambah Pegawai</h1>
    <p class='text-sm text-gray-500'>Isi data pegawai baru</p>
</div>

<div class='bg-white rounded-2xl shadow border border-gray-100 p-6'>

    <form action='{{ route('employees.store') }}' method='POST' class='space-y-6'>
        @csrf

        <div>
            <label class='block text-sm font-medium text-gray-700 mb-1'>
                NIK
            </label>
            <input type='text' name='nik' value='{{ old('nik') }}'
                class='w-full rounded-xl border-gray-300 focus:border-[#6B2147] focus:ring-[#6B2147]'>
            @error('nik')
                <p class='text-sm text-red-600 mt-1'>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class='block text-sm font-medium text-gray-700 mb-1'>
                Nama Lengkap
            </label>
            <input type='text' name='nama_lengkap' value='{{ old('nama_lengkap') }}'
                class='w-full rounded-xl border-gray-300 focus:border-[#6B2147] focus:ring-[#6B2147]'>
            @error('nama_lengkap')
                <p class='text-sm text-red-600 mt-1'>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class='block text-sm font-medium text-gray-700 mb-1'>
                Email Kantor
            </label>
            <input type='email' name='email_kantor' value='{{ old('email_kantor') }}'
                class='w-full rounded-xl border-gray-300 focus:border-[#6B2147] focus:ring-[#6B2147]'>
            @error('email_kantor')
                <p class='text-sm text-red-600 mt-1'>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class='block text-sm font-medium text-gray-700 mb-1'>
                No. HP
            </label>
            <input type='text' name='no_hp' value='{{ old('no_hp') }}'
                class='w-full rounded-xl border-gray-300 focus:border-[#6B2147] focus:ring-[#6B2147]'>
            @error('no_hp')
                <p class='text-sm text-red-600 mt-1'>{{ $message }}</p>
            @enderror
        </div>
        
         <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Divisi</label>
        <select name="division_id" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
            <option value="">Pilih Divisi</option>
            @foreach($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->nama_divisi }}</option>
            @endforeach
        </select>
    </div>

     <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Jabatan</label>
        <select name="position_id" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
            <option value="">Pilih Jabatan</option>
            @foreach($positions as $position)
                <option value="{{ $position->id }}">{{ $position->nama_jabatan }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
            <option value="">Pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
        <textarea name="alamat" rows="3" class="w-full rounded-xl border border-gray-300 px-4 py-3" required></textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
        <select name="agama" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Lainnya">Lainnya</option>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">NPWP</label>
        <input type="text" name="npwp" class="w-full rounded-xl border border-gray-300 px-4 py-3">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">BPJS</label>
        <input type="text" name="bpjs" class="w-full rounded-xl border border-gray-300 px-4 py-3">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
    </div>

     <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Status Pegawai</label>
        <select name="status_pegawai" class="w-full rounded-xl border border-gray-300 px-4 py-3" required>
            <option value="">Pilih Status</option>
            <option value="Tetap">Tetap</option>
            <option value="Kontrak">Kontrak</option>
            <option value="Magang">Magang</option>
        </select>
    </div>

        <div class='flex items-center gap-3 pt-4'>
            <button type='submit'
                class='px-5 py-2.5 rounded-xl bg-[#6B2147] text-white font-medium hover:opacity-90 transition'>
                Simpan Pegawai
            </button>

            <a href='{{ route('employees.index') }}'
                class='px-5 py-2.5 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50 transition'>
                Batal
            </a>
        </div>
    </form>

</div>

</div>
@endsection
