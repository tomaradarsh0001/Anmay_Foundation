<?php

namespace App\Http\Controllers;

use App\Models\WhatsappMessage;
use App\Models\Person;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index()
    {
        $messages = WhatsappMessage::with('persons')->latest()->paginate(10);
        return view('whatsapp.index', compact('messages'));
    }

   public function create()
{
    $contacts = Person::all();
    return view('whatsapp.create', compact('contacts'));
}

public function store(Request $request)
{
    $request->validate([
        'message_body' => 'required|string',
    'contacts'      => 'required|array',
    'contacts.*'    => 'exists:persons,id',
        'attachments.*' => 'file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480'
    ]);

    // 1. Save message
    $message = WhatsappMessage::create([
        'message_body' => $request->message_body,
    ]);

    // 2. Attach persons via pivot
$message->persons()->attach($request->contacts);

    // 3. Handle multiple attachments
    $attachments = [];
    if ($request->hasFile('attachments')) {
        foreach ($request->file('attachments') as $file) {
            $path = $file->store('attachments', 'public');
            $attachments[] = $path;
        }
    }

    // Update attachments
   $message->update([
    'attachments' => json_encode($attachments)
]);

    return redirect()->back()->with('success', 'Message sent successfully!');
}




    public function show(WhatsappMessage $whatsapp)
    {
        return view('whatsapp.show', compact('whatsapp'));
    }

    public function destroy(WhatsappMessage $whatsapp)
    {
        $whatsapp->delete();
        return redirect()->route('whatsapp.index')->with('success', 'Message deleted!');
    }
}
