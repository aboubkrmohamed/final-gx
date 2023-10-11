<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Mail;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function itDivision()
    {
        $hideHeader = '1';
        return view('it_division', compact('hideHeader'));
    }

    public function projectDivision()
    {
        $hideHeader = '1';
        return view('project_division', compact('hideHeader'));
    }

    public function education()
    {
        $hideHeader = '1';
        return view('education', compact('hideHeader'));
    }

    public function software()
    {
        $hideHeader = '1';
        return view('software', compact('hideHeader'));
    }

    public function hardware()
    {
        $hideHeader = '1';
        return view('hardware', compact('hideHeader'));
    }

    public function successStory()
    {
        return view('success_story');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            // 'mobile' => 'required',
            // 'country' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'invalid_request']);
        }

        Mail::send('emails.contact', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            // 'mobile' => $request->get('mobile'),
            // 'country' => config('country.' . $request->get('country')),
            'subject' => $request->get('subject'),
            'comment' => $request->get('message') ],
            function ($message) {
                    $message->from('contact@gxgroup-mea.com');
                    $message->to(['info@gxgroup-mea.com', 'info@gxgroup-mea.com', 'ceo@gxgroup-mea.com', 'moh_ewida@hotmail.com'])
                    ->subject('GX Group - Contact Request');
            });

        return response()->json(['success' => true]);
    }
}
