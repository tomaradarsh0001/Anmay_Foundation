@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Send WhatsApp Message</h2>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-600 text-white rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('whatsapp.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Message Body -->
        <div>
            <label class="block font-medium mb-2 text-gray-700 dark:text-gray-300">Message</label>
            <textarea name="message_body" rows="6" maxlength="5000"
                class="w-full border border-gray-300 dark:border-gray-600 
                       rounded p-2 bg-white dark:bg-gray-800 
                       text-gray-900 dark:text-gray-100
                       focus:ring focus:ring-indigo-300 dark:focus:ring-indigo-600"
                required>{{ old('message_body') }}</textarea>
        </div>

        <!-- Media File -->
        <div>
            <label class="block font-medium mb-2 text-gray-700 dark:text-gray-300">Attach Media (optional)</label>
            <input type="file" name="attachments[]" multiple
                class="w-full border border-gray-300 dark:border-gray-600 
                       rounded p-2 bg-white dark:bg-gray-800 
                       text-gray-900 dark:text-gray-100">
            <p class="text-sm text-gray-500 dark:text-gray-400">You can upload images, videos, or audio files.</p>
        </div>

        <!-- Select Contacts -->
        <div>
            <label class="block font-medium mb-2 text-gray-700 dark:text-gray-300">Select Contacts</label>

            <!-- Select All Checkbox -->
            <div class="mb-2">
                <label class="flex items-center space-x-2 text-indigo-600 font-semibold">
                    <input type="checkbox" id="select-all" class="h-4 w-4 border-gray-300 rounded">
                    <span>Select All</span>
                </label>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 border 
                        border-gray-300 dark:border-gray-600 
                        p-3 rounded bg-white dark:bg-gray-800">
                @foreach($contacts as $contact)
                    <label class="flex items-center space-x-2 text-gray-800 dark:text-gray-100">
                        <input type="checkbox" name="contacts[]" value="{{ $contact->id }}" 
                               class="contact-checkbox h-4 w-4 border-gray-300 dark:border-gray-600 
                                      bg-white dark:bg-gray-700 
                                      text-indigo-600 focus:ring-indigo-500">
                        <span>{{ $contact->person_name }} ({{ $contact->phone_number }})</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Submit -->
        <div>
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow-md
                       focus:outline-none focus:ring-2 focus:ring-offset-2 
                       focus:ring-green-500 dark:focus:ring-offset-gray-900">
                Send Message
            </button>
        </div>
    </form>
</div>

<!-- JS for Select All -->
<script>
    document.getElementById('select-all').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.contact-checkbox');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
</script>
@endsection
