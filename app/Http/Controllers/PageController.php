<?php

namespace App\Http\Controllers;

use App\Models\BookAppointment;
use App\Models\Contact;
use App\Models\ContactEnquiry;
use App\Models\ServiceEnquiry;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

    public function services()
    {
        return view('website.services');
    }

    public function solutions()
    {
        return view('website.solutions');
    }

    public function projects()
    {
        return view('website.projects');
    }

    public function whychoose()
    {
        return view('website.whychoose');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function submitContactEnquiry(Request $request)
    {
        $request->validate([

            'name' => 'required|string|min:3|max:255',

            'phone' => 'required|digits:10',

            'email' => 'required|email|max:255',

            'company' => 'nullable|string|max:255',

            'service' => 'required|string|max:255',

            'capacity' => 'nullable|string|max:255',

            'location' => 'required|string|max:255',

            'message' => 'required|string|min:10|max:1000',

        ]);


        Contact::create([

            'name' => $request->name,

            'phone' => $request->phone,

            'email' => $request->email,

            'company' => $request->company,

            'service' => $request->service,

            'capacity' => $request->capacity,

            'location' => $request->location,

            'message' => $request->message,

        ]);


        return redirect()
            ->route('contact')
            ->with(
                'success',
                'Solar enquiry submitted successfully!'
            );
    }
}

