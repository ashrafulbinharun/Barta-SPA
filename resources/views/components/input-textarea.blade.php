@props(['hasError' => false])

<div class="mt-2">
    <textarea
        {{ $attributes->merge([
            'class' =>
                'block w-full rounded-md border p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6',
            'border-red-600 focus:ring-red-600' => $hasError,
        ]) }}>{{ $slot }}</textarea>
</div>
