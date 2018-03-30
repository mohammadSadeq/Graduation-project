<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contactUS');
    }
    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'cname' => 'required', 'cemail' => 'required|email', 'Logoname' => 'required','Logoimage' => 'required','modelname' => 'required','comment' => 'required' ]);
        (new \App\ContactUS)->create($request->all());

        $data= array(
            'cname' => $request->get('cname'),
            'cemail' => $request->get('cemail'),
            'Logoname' => $request->get('Logoname'),
            'Logoimage' =>  $request->Logoimage,
            'modelname' => $request->get('modelname'),
            'comment' => $request->get('comment')
        );

        Mail::send('email',$data,function($message) use ($data)

            {

                $message->from('user@gmail.com');
                $message->to('htwesam.1996ach@gmail.com', 'Admin')->subject('Logo Detection ');
                $message->attach( $data['Logoimage']->getRealPath(),array(
                    'as'=>'Logoimage.'.$data['Logoimage']->getClientOriginalName(),
                     'mime'=>$data['Logoimage']->getMimeType())
                );



            });

        return back()->with('success', 'Thanks for contacting us .. We will contact you within the coming 24 hours');
    }
}