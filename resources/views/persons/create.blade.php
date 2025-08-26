@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-12 bg-white shadow-lg rounded p-6">
    <h2 class="text-xl font-bold mb-4">Add New Contact</h2>

    <form action="{{ route('persons.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Name</label>
            <input type="text" name="person_name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Whatsapp</label>
            <input type="text" name="phone_number" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">Save</button>
    </form>
</div>
@endsection
