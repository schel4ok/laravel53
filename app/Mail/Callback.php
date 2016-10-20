<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Callback extends Mailable
{
    use Queueable, SerializesModels;

    public $input;


    public function __construct(Request $request)
    {
        $this->input = $request->all();
        $this->file = $request->attachment;

        if (empty($this->input['email'])) { $this->input['email'] = 'admin@steklo-group.ru'; }
    }


    public function build()
    {
        if (is_null($this->file) )  {
            return $this->subject('Обратный звонок с сайта')
                        ->view('emails.callback')
                        ->cc($this->input['email'], $this->input['name'])
                        ->replyTo($this->input['email'], $this->input['name']);
        }
        else {
            return $this->subject('Обратный звонок с сайта')
                        ->view('emails.callback')
                        ->cc($this->input['email'], $this->input['name'])
                        ->replyTo($this->input['email'], $this->input['name'])
                        ->attach($this->file, array('as' => $this->file->getClientOriginalName(), 'mime' => $this->file->getClientMimeType() ));
        }
    }
}