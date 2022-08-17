<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
class mailController extends Controller

{

    public function signupMail()
    {

        $data["email"] = "isop667@gmail.com";
        $data["title"] = "From ISOPharma.com";
        $data["body"] = "Test mail";

        //$pdf = PDF::loadView('pages.emails.invoice', $data);
        Mail::send('pages.emails.signup-email', $data, function($message)use($data) {
            $message->to($data["email"])

                    ->subject($data["title"]);
                    //->attachData($pdf->output(), "invoice.pdf");

        });
        return redirect("http://localhost:3000/registration");

    }

}