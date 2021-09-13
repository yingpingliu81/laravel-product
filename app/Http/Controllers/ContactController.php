<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Models\Contact;
use App\Mail\AnswerContact;
use App\Mail\ContactNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::customers()->latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function warranty() {
        $contacts = Contact::warranties()->latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function edit(Contact $contact) {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact) {
        $request->validate([
            'reply' => 'required'
        ]);
        if($contact = $this->update(['reply' => $request->reply, 'replyUserId' => Auth::user()->id])) {
            try {
                Mail::to($contact->email)->send(new ContactNotify($contact));
            } catch (\Exception $exception) {
                Log::channel('mail')->error($exception->getMessage());
            }
        }
        return back()->with('success', 'email has been sent to customer');

    }

    public function reply(ReplyContact $request, Contact $contact) {
        try {
            $contact->answer = $request->answer;
            $contact->save();
            Mail::to($contact->email)->send(new AnswerContact($contact));
            return redirect()->back()->with('success', 'send reply email successfully');
        } catch (\Exception $e) {
            Log::channel('mail')->error($e->getMessage());
        }
        return redirect()->back()->withErrors('fail to send reply email');
    }

    public function destroy(Contact $contact) {
        try {
            $contact->delete();
            return back()->with('success','delete successfully.');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function import(Request $request) {
        try {
            $file = $request->file('import');
            $file->move(public_path('laravel-excel'), $file->getClientOriginalName());
            $filePath = public_path('laravel-excel/').$file->getClientOriginalName();
            Excel::import(new CustomerImport, $filePath);
            unlink($filePath);
        } catch (\Exception $e) {
            throw $e;
        }
        return back()->with('success','import customers successfully');
    }
}
