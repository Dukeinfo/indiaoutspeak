<?php

namespace App\Livewire\Frontend\Contact;

use App\Mail\ContactUsMail;
use App\Models\ContactMessage;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Route;

use Artesaos\SEOTools\Facades\SEOTools;

class Contactus extends Component
{

    public $name ;
    public $email ;
    public $phone ;
    public $subject ;
    public $message ;
    public function render()
    {
        return view('livewire.frontend.contact.contactus');
    }

    public function send()
    {
        $validatedData =    $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'ip_address' => getUserIp(),

            
        ]);
// Send email only when validation and database entry are successful
// if (empty($this->getErrorBag()->messages())) {
      
//         // Send email
//         Mail::to('info@juriskart.com')->send(new ContactUsMail([
//             'name' => $this->name,
//             'email' => $this->email,
//             'phone' => $this->phone,
//             'subject' => $this->subject,
//             'message' => $this->message,
//             'ip_address' => getUserIp(),

//         ]));
//     }

    session()->flash('success', 'Your message has been sent successfully.');
    $this->reset();
    return redirect()->route('home.homepage');
    }

 
}
