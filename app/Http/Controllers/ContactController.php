<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle contact form submission
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'privacy' => 'required|accepted',
        ]);

        try {
            // Save to database
            Contact::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'company' => $validated['company'],
                'phone' => $validated['phone'],
                'service' => $validated['service'],
                'message' => $validated['message'],
                'privacy' => true, // Since validation requires 'accepted'
            ]);

            // Here you would typically:
            // 2. Send email notification
            // 3. Send confirmation email to user

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
        }
    }
}
