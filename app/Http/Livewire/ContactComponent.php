<?php

namespace App\Http\Livewire;

use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name, $email, $phone, $subject, $message;
    public $success;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {

        $rules = $this->validate();
        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;
        $data['subject'] = $this->subject;
        $data['message'] = $this->message;
        Mail::to('novakmzv@gmail')->send(new ContactForm($data));
        $this->resetForm();
        $this->success = 'Mensaje enviado con éxito';
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-component');
    }
}
