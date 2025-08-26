@extends('layouts.app')

@section('content')
<div class="py-16"> <!-- Increased from py-12 to py-16 -->
    <div class="max-w-7xl mx-auto sm:px-6 mt-12"> <!-- Added mt-12 -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl">
            <div class="p-10">
                <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-100 tracking-wide">
                    {{ __("Message History!") }}
                </h1>
                <div class="mt-3 h-1 w-24 bg-indigo-500 mx-auto rounded-full"></div>
            </div>
        </div>
    </div>
</div>
<div class="max-w-6xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-xl p-6">
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-600 text-white rounded">
            {{ session('success') }}
        </div>
    @endif
<div class=" px-4">

    <table class="w-full border-collapse mt-6">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700">
                <th class="p-3 text-left dark:text-white">Contacts</th>
                <th class="p-3 text-left dark:text-white">Message</th>
                <th class="p-3 text-left dark:text-white">Media</th>
                <th class="p-3 text-left dark:text-white">Sent At</th>
                <th class="p-3 text-left dark:text-white">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $msg)
                <tr class="border-b dark:border-gray-700">
                    <!-- Contacts -->
                    <td class="p-3 dark:text-white">
                        @php
                            $persons = $msg->persons;
                            $total = $persons->count();
                        @endphp

                        @foreach($persons->take(3) as $person)
                            <span class="inline-block bg-gray-200 dark:bg-gray-600 text-sm px-2 py-1 rounded mr-1 mb-1">
                                {{ $person->person_name }} ({{ $person->phone_number }})
                            </span>
                        @endforeach

                        @if($total > 3)
                            <span class="inline-block bg-indigo-500 text-white text-sm px-2 py-1 rounded">
                                +{{ $total - 3 }} more
                            </span>
                        @endif
                    </td>


                    <!-- Message -->
                    <td class="p-3 dark:text-white">{{ Str::limit($msg->message_body, 50) }}</td>

                    <!-- Media -->
                    <td class="p-3">
                        @if($msg->attachments)
                            @foreach(json_decode($msg->attachments, true) as $file)
                                <a href="{{ asset('storage/'.$file) }}" target="_blank"
                                   class="text-indigo-500 underline">View</a><br>
                            @endforeach
                        @else
                            <span class="text-gray-500">No Media</span>
                        @endif
                    </td>

                    <!-- Sent At -->
                    <td class="p-3 dark:text-white">{{ $msg->created_at->format('d M Y, h:i A') }}</td>

                    <!-- Actions -->
                    <td class="p-3">
                        <form action="{{ route('whatsapp.destroy', $msg) }}" method="POST"
                              onsubmit="return confirm('Delete this message?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-3 text-center text-gray-500 dark:text-gray-400">
                        No messages found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
    <div class="mt-4">
        {{ $messages->links() }}
    </div>
</div>
@endsection
