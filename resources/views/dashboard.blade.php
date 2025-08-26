@extends('layouts.app')

@section('content')
 <div class="py-16"> <!-- Increased from py-12 to py-16 -->
    <div class="max-w-7xl mx-auto sm:px-6 mt-12"> <!-- Added mt-12 -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl">
            <div class="p-10">
                <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-100 tracking-wide">
                    {{ __("Welcome to the Dashboard!") }}
                </h1>
                <div class="mt-3 h-1 w-24 bg-indigo-500 mx-auto rounded-full"></div>
            </div>
        </div>
    </div>
</div>
@endsection
