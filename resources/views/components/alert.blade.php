@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'sucess':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'dark':
            $class = 'text-grey-800 bg-grey-50 dark:bg-gray-800 dark:text-red-400';
            break;

        default:
            $class = '';
            break;
    }
@endphp


<div {{ $attributes->merge(['class' => "p-4 text-sm rounded-lg" . $class]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'info aqui' }}</span> {{ $slot }}
</div>
