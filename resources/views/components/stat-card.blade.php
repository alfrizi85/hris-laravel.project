@props([
    'title',
    'value',
    'icon' => '📊',
    'subtitle' => '',
    'color' => 'bg-[#5C4033]'
])

<div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-gray-100">

    <div class="flex items-center justify-between">

        <div>
            <p class="text-gray-500 text-sm font-medium">
                {{ $title }}
            </p>

            <h2 class="text-4xl font-bold text-gray-800 mt-2">
                {{ $value }}
            </h2>

            @if($subtitle)
                <p class="text-sm text-gray-400 mt-2">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        <div class="{{ $color }} w-14 h-14 rounded-xl flex items-center justify-center text-white text-2xl shadow-lg">
            {{ $icon }}
        </div>

    </div>

</div>