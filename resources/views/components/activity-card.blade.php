@props([
    'title',
    'time',
    'icon' => '📌',
])

<div class="flex items-start gap-4 py-4 border-b border-gray-100 last:border-b-0">

    <div class="w-12 h-12 rounded-xl bg-[#F5EFEA] flex items-center justify-center text-xl">
        {{ $icon }}
    </div>

    <div class="flex-1">

        <h4 class="font-semibold text-gray-800">
            {{ $title }}
        </h4>

        <p class="text-sm text-gray-500 mt-1">
            {{ $time }}
        </p>

    </div>

</div>