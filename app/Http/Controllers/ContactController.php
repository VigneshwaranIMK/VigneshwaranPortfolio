<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\MailContact;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Message;


class ContactController extends Controller
{
    public function submit(Request $request)
    {
        dd(1);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = MailContact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        $data = [
            'name' => $contact->name,
            'email' => $contact->email,
            'message' => $contact->message,
        ];
    
        // Sending the email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('vigneshwaranimk@gmail.com')
                    ->subject("{$data['name']} Contacted via Portfolio")
                    ->html(
                        "<p><strong>Name:</strong> {$data['name']}</p>
                         <p><strong>Email:</strong> {$data['email']}</p>
                         <p><strong>Message:</strong> {$data['message']}</p>",
                        'text/html'
                    );
        });

        return redirect()->back()->with('success', '🎉 Message successfully sent! 🎉');    
    }
}
