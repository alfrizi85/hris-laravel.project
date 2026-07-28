@props([
    'title',
    'subtitle' => null,
])

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">

    <div class="mb-5">

        <h3 class="text-lg font-bold text-gray-800">
            {{ $title }}
        </h3>

        @if($subtitle)
            <p class="text-sm text-gray-500 mt-1">
                {{ $subtitle }}
            </p>
        @endif

    </div>

    <div>
        {{ $slot }}
    </div>

</div>