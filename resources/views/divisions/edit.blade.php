@extends('layouts.hris')

@section('content')

<div class="p-6 max-w-3xl mx-auto">

    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            Edit Divisi
        </h1>

        <p class="text-sm text-gray-500">
            Perbarui data divisi perusahaan
        </p>
    </div>

    <div class="bg-white rounded-2xl shadow border border-gray-100 p-6">

        <form action="{{ route('divisions.update', $division) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Kode Divisi
                </label>

                <input
                    type="text"
                    name="kode_divisi"
                    value="{{ old('kode_divisi', $division->kode_divisi) }}"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]"
                    required
                >

                @error('kode_divisi')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Nama Divisi
                </label>

                <input
                    type="text"
                    name="nama_divisi"
                    value="{{ old('nama_divisi', $division->nama_divisi) }}"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]"
                    required
                >

                @error('nama_divisi')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-3 pt-2">

                <button
                    type="submit"
                    class="px-5 py-3 rounded-xl bg-[#7A1F5C] text-white font-medium hover:opacity-90 transition"
                >
                    Update Divisi
                </button>

                <a
                    href="{{ route('divisions.index') }}"
                    class="px-5 py-3 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50 transition"
                >
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection