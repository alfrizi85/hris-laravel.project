@extends('layouts.hris')

@section('content')

{{-- Welcome Section --}}
<div class="bg-gradient-to-r from-[#5C4033] to-[#7A5643] rounded-3xl shadow-xl p-8 mb-8 text-white">

    <div class="flex items-center justify-between">

        <div>

            <p class="text-sm text-gray-200 uppercase tracking-wider">
                Dashboard
            </p>

            <h1 class="text-4xl font-bold mt-2">
                Welcome Back, Administrator 👋
            </h1>

            <p class="text-gray-100 mt-4 max-w-xl leading-7">
                Manage employees, attendance, payroll and company operations
                efficiently through NovaCore HRIS.
            </p>
            
                <button class="px-6 py-3 rounded-xl border border-white text-white hover:bg-white hover:text-[#5C4003] transition">
                    Lihat Laporan
                </button>

            </div>

        </div>

        <div class="text-right text-white">

            <p class="text-gray-200">
                {{ now()->format('l') }}
            </p>

            <h2 class="text-4xl font-bold mt-2">
                {{ now()->format('H:i') }}
            </h2>

            <p class="text-gray-100">
                NovaCore Technologies
            </p>

        </div>

    </div>

</div>


@include('partials.stats')
@include('partials.quick-actions')
@include('partials.charts')
@include('partials.activities')

@endsection