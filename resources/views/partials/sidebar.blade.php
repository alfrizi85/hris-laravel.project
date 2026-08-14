@php
    $dashboardActive = request()->routeIs('dashboard');
    $employeeActive = request()->routeIs('employees.*');
@endphp

<aside class="w-72 bg-[#3B2A2A] text-white flex flex-col min-h-screen shadow-2xl">

    <!-- Logo -->
    <div class="px-7 py-6 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-2xl bg-[#6D2E46] flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>

            <div>
                <h1 class="text-lg font-bold leading-tight">
                    NovaCore Technologies
                </h1>
                <p class="text-xs text-gray-300">
                    Human Resource Information System
                </p>
            </div>
        </div>
    </div>

    <!-- Main Menu -->
    <div class="px-5 pt-6">
        <p class="text-[11px] uppercase tracking-[0.25em] text-gray-400 mb-3">
            Main Menu
        </p>

        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-2x1 transition
            {{ $dashboardActive
               ? 'bg-[#6B2147] text-white shadow-lg'
               : 'text-gray-200 hover:bg-white/10 hover:text-white' }}">
               
            <i data-lucide="home" class="w-5 h-5"></i>
            <span>Dashboard</span>
        </a>
    </div>

    <!-- Master Data -->
    @foreach ([
    ['Pegawai', route('employees.index'), 'users', request()->routeIs('employees.*')],
    ['Divisi', route('divisions.index'), 'building-2', request()->routeIs('divisions.*')],
    ['Jabatan', '#', 'briefcase', request()->is('positions*')],
] as [$label, $url, $icon, $active])

<a href="{{ $url }}"
   class="flex items-center gap-3 px-4 py-3 rounded-2x1 transition
   {{ $active
     ? 'bg-[#6B2147] text-white shadow-lg'
     : 'text-gray-200 hover:bg-white/10 hover:text-white' }}">

    <i data-lucide="{{ $icon }}" class="w-5 h-5"></i>
    <span>{{ $label }}</span>

</a>

@endforeach

    <!-- Transaksi -->
    <div class="px-5 pt-6">
        <p class="text-[11px] uppercase tracking-[0.25em] text-gray-400 mb-3">
            Transaksi
        </p>

        @foreach ([['Absensi', 'calendar-check'], ['Izin', 'file-text'], ['Lembur', 'clock-3'], ['Payroll', 'wallet']] as [$label, $icon])
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-200 hover:bg-white/10 hover:text-white transition-all duration-200">

                <i data-lucide="{{ $icon }}" class="w-5 h-5"></i>
                <span>{{ $label }}</span>
            </a>
        @endforeach
    </div>

    <!-- User Info -->
    <div class="mt-auto px-5 py-6 border-t border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-full bg-[#6D2E46] flex items-center justify-center font-bold">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>

            <div>
                <p class="font-semibold text-sm">{{ Auth::user()->name }}</p>

                <div class="flex items-center gap-2 text-xs text-green-300">
                    <span class="w-2 h-2 rounded-full bg-green-400"></span>
                    Online
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf

            <button type="submit"
                class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-white/10 hover:bg-red-500/20 text-gray-100 hover:text-red-200 transition-all duration-200">

                <i data-lucide="log-out" class="w-4 h-4"></i>
                Logout
            </button>
        </form>
    </div>

</aside>