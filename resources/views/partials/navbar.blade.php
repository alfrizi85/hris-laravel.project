<header class="bg-white shadow-sm border-b border-gray-200 px-8 py-5 flex justify-end items-center">

    <div class="flex items-center gap-4">

        <div class="text-right">
            <h3 class="font-semibold text-xl text-gray-800">
                {{ Auth::user()->name }}
            </h3>

            <p class="text-gray-500 text-sm">
                {{ now()->translatedFormat('l, d F Y') }}
            </p>
        </div>

        <img
            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=5C4033&color=fff"
            class="w-12 h-12 rounded-full"
        >

    </div>

</header>