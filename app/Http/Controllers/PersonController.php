<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::latest()->get();
        return view('persons.index', compact('persons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'person_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        Person::create($request->only('person_name', 'phone_number'));

        return back()->with('success', 'Person added successfully!');
    }

    public function update(Request $request, Person $person)
    {
        $request->validate([
            'person_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        $person->update($request->only('person_name', 'phone_number'));

        return back()->with('success', 'Person updated successfully!');
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return back()->with('success', 'Person deleted successfully!');
    }
}
