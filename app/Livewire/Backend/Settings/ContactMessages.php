<?php

namespace App\Livewire\Backend\Settings;

use App\Models\ContactMessage;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactMessages extends Component
{
    public function render()
    {

            $getMessages =  ContactMessage::latest()->get();      
        return view('livewire.backend.settings.contact-messages',['getMessages' =>$getMessages]);
    }
    public function delete($id)
    {
        $socialApp = ContactMessage::findOrFail($id);
        $socialApp->delete();
        session()->flash('success', 'Message deleted successfully!');
    }
}
