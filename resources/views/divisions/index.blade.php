@extends('layouts.hris')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Data Divisi
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Kelola data divisi perusahaan
            </p>
        </div>

        <a href="{{ route('divisions.create') }}"
           class="px-5 py-3 rounded-xl bg-[#7A1F5C] text-white font-medium hover:opacity-90 transition">
            + Tambah Divisi
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-xl bg-green-100 border border-green-200 px-4 py-3 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET"
          action="{{ route('divisions.index') }}"
          class="mb-6">
        <div class="flex gap-3">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari kode atau nama divisi..."
                class="flex-1 rounded-xl border border-gray-300 px-4 py-3 focus:border-[#7A1F5C] focus:ring-[#7A1F5C]"
            >

            <button
                type="submit"
                class="px-5 py-3 rounded-xl bg-[#7A1F5C] text-white font-medium hover:opacity-90 transition">
                Cari
            </button>

            @if(request('search'))
                <a
                    href="{{ route('divisions.index') }}"
                    class="px-5 py-3 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50 transition">
                    Reset
                </a>
            @endif
        </div>
    </form>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                            KODE
                        </th>

                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                            NAMA DIVISI
                        </th>

                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                            AKSI
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    @forelse($divisions as $division)

                        <tr class="hover:bg-gray-50 transition">

                            <td class="px-6 py-4 text-sm font-medium text-gray-700">
                                {{ $division->kode_divisi }}
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-700">
                                {{ $division->nama_divisi }}
                            </td>

                            <td class="px-6 py-4">
                                <a
                                    href="{{ route('divisions.edit', $division) }}"
                                    class="px-3 py-2 rounded-lg bg-yellow-100 text-yellow-700 hover:bg-yellow-200 text-sm font-medium transition">
                                    Edit
                                </a>
                                <form action="{{ route('divisions.destroy', $division) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        class="px-3 py-2 rounded-lg bg-red-100 text-red-700 hover:bg-red-200 text-sm font-medium transition"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus divisi ini?')">
                                        Hapus
                                    </button>
                                </form> 
                            </td>
                            

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="px-6 py-8 text-center text-gray-500">
                                Belum ada data divisi.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="px-6 py-4">
            {{ $divisions->links() }}
        </div>

    </div>

</div>

@endsection