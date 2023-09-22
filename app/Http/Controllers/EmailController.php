<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function sendEmail(Request $request){
        $request->validate([
            'inputName' => 'required',
            'inputEmail' => 'required|email',
            'inputSubject' => 'required',
            'inputPesan' => 'required',
            'attachment' => 'max:10240'
        ]);

        $name = $request->input('inputName');
        $email = $request->input('inputEmail');
        $subject = $request->input('inputSubject');
        $message = $request->input('inputPesan');
        $attachment = $request->file('attachment');

        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'attachment' => $attachment,
        );

        // dd($data);
        $myMail = Mail::to($email)->send(new SendEmail($data));
        
        if ($myMail) {
            // return view('/');
            return redirect()->back()->with('success', __('message.succesMail'));
        } else {
            // return view('/');
            return redirect()->back()->with('error', __('message.failedMail'));
        }
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
