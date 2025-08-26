@extends('layouts.app')

@section('content')
<div class="py-16"> <!-- Increased from py-12 to py-16 -->
    <div class="max-w-7xl mx-auto sm:px-6 mt-12"> <!-- Added mt-12 -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl">
            <div class="p-10">
                <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-100 tracking-wide">
                    {{ __("Whatsapp Contact List!") }}
                </h1>
                <div class="mt-3 h-1 w-24 bg-indigo-500 mx-auto rounded-full"></div>
            </div>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto sm:px-6">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl p-8">

<!-- Success Message -->
@if(session('success'))
    <div id="alert-success"
         class="mb-4 flex items-center justify-between p-3 bg-green-700 text-white rounded transition-opacity duration-500">
        <span>{{ session('success') }}</span>
        <button onclick="document.getElementById('alert-success').remove()" class="ml-4">
            <span class="material-icons">close</span>
        </button>
    </div>
@endif

<!-- Error Message -->
@if(session('error'))
    <div id="alert-error"
         class="mb-4 flex items-center justify-between p-3 bg-red-700 text-white rounded transition-opacity duration-500">
        <span>{{ session('error') }}</span>
        <button onclick="document.getElementById('alert-error').remove()" class="ml-4">
            <span class="material-icons">close</span>
        </button>
    </div>
@endif

        <!-- Create Form -->
        <h2 class="text-xl font-bold mb-4 text-gray-700 dark:text-gray-200">Add New Contact</h2>
        <form action="{{ route('persons.store') }}" method="POST" class="space-y-4 mb-8">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-300">Name</label>
                <input type="text" name="person_name" class="w-full mt-1 p-2 border rounded-md dark:bg-gray-700 dark:text-white" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-300">Whatsapp</label>
                <input type="text" name="phone_number" class="w-full mt-1 p-2 border rounded-md dark:bg-gray-700 dark:text-white" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Save</button>
        </form>

     
<h2 class="text-xl font-bold mb-4 text-gray-700 dark:text-gray-200">Contacts</h2>
<table class="w-full text-left border-collapse">
    <thead>
        <tr class="bg-gray-100 dark:bg-gray-700">
            <th class="p-3 dark:text-white">Name</th>
            <th class="p-3 dark:text-white">Whatsapp</th>
            <th class="p-3 dark:text-white">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($persons as $person)
            <tr class="border-b dark:border-gray-700" data-row-id="{{ $person->id }}">
                <td class="p-3">
                    <input
                        type="text"
                        name="person_name"
                        value="{{ $person->person_name }}"
                        form="form-{{ $person->id }}"
                        class="p-2 border rounded-md w-48 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100
                               focus:outline-none focus:ring focus:ring-indigo-300
                               disabled:bg-gray-100 disabled:dark:bg-gray-700 disabled:text-gray-500 disabled:dark:text-gray-300 disabled:cursor-not-allowed"
                        disabled
                    >
                </td>
                <td class="p-3">
                    <input
                        type="text"
                        name="phone_number"
                        value="{{ $person->phone_number }}"
                        form="form-{{ $person->id }}"
                        class="p-2 border rounded-md w-48 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100
                               focus:outline-none focus:ring focus:ring-indigo-300
                               disabled:bg-gray-100 disabled:dark:bg-gray-700 disabled:text-gray-500 disabled:dark:text-gray-300 disabled:cursor-not-allowed"
                        disabled
                    >
                </td>
                <td class="p-3">
                    {{-- Update form lives here; inputs in other cells are linked via form="..." --}}
                    <form id="form-{{ $person->id }}" action="{{ route('persons.update', $person) }}" method="POST" class="inline-flex items-center gap-2">
                        @csrf
                        @method('PUT')

                        <!-- Edit (Pen) -->
                        <button
                            type="button"
                            class="edit-btn inline-flex items-center gap-1 px-3 py-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-white shadow"
                            data-target="{{ $person->id }}"
                            aria-label="Edit"
                            title="Edit"
                        >
                            <span class="material-icons">edit</span>
                        </button>

                        <!-- Update (hidden initially) -->
                        <button
                            type="submit"
                            class="update-btn hidden inline-flex items-center gap-1 px-3 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white shadow"
                            data-target="{{ $person->id }}"
                            aria-label="Update"
                            title="Update"
                        >
                            <span class="material-icons">check</span>
                            <span class="text-sm">Update</span>
                        </button>
                    </form>

                    {{-- Delete --}}
                    <form action="{{ route('persons.destroy', $person) }}" method="POST" class="inline-block"
                          onsubmit="return confirm('Delete this contact?')">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="inline-flex items-center gap-1 px-3 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white shadow"
                            aria-label="Delete"
                            title="Delete"
                        >
                            <span class="material-icons">delete</span>
                            <span class="text-sm">Delete</span>
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="p-3 text-center text-gray-500 dark:text-gray-300">No contacts found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

    </div>
</div>
<!-- JS (works per-row) -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".edit-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            const id = btn.dataset.target;
            const row = document.querySelector(`tr[data-row-id="${id}"]`);
            const updateBtn = row.querySelector(`.update-btn[data-target="${id}"]`);
            // Enable inputs that belong to this row's form
            row.querySelectorAll(`input[form="form-${id}"]`).forEach((inp) => {
                inp.disabled = false;
                inp.focus();
                inp.select();
            });
            // Swap buttons
            btn.classList.add("hidden");
            if (updateBtn) updateBtn.classList.remove("hidden");
        });
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    // Auto hide success alert
    const successAlert = document.getElementById("alert-success");
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.opacity = "0";
            setTimeout(() => successAlert.remove(), 500); // wait for fade-out
        }, 3000);
    }

    // Auto hide error alert
    const errorAlert = document.getElementById("alert-error");
    if (errorAlert) {
        setTimeout(() => {
            errorAlert.style.opacity = "0";
            setTimeout(() => errorAlert.remove(), 500);
        }, 3000);
    }
});
</script>

@endsection