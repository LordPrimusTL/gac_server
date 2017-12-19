<?php
/**
 * Created by PhpStorm.
 * User: micheal
 * Date: 19/12/2017
 * Time: 04:23
 */

namespace App\Helper;


use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer
{
    protected $mailer;
    protected $fromAddress = 'info@gacpedro.com.ng';
    protected $fromName = 'Micheal';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];
    protected $admin = [
        "michealakinwonmi@gmail.com","abimolu80@gmail.com"];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function feedback($email, $name){
        $this->to = $email;
        $this->subject = "Feedback Received";
        $this->view = 'Email.feedback';
        $this->data = compact( 'name');
        return $this->deliver();
    }

    public function notify($msg)
    {
        $this->to = $this->admin;
        $this->subject = "Request/Notification";
        $this->view = 'Email.notification';
        $this->data = compact('msg');
        return $this->deliver();
    }
    public function notifyFeedback($msg, $rev)
    {
        $this->to = $this->admin;
        $this->subject = "Request/Notification";
        $this->view = 'Email.notification';
        $this->data = compact('msg', 'rev');
        return $this->deliver();
    }

    public function deliver()
    {
        try{
            $this->mailer->send($this->view, $this->data, function($message) {
                $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);

            });

            Log::info('Mail Sent');
            return true;
        }
        catch (\Exception $ex)
        {
            dd($ex);
            Log::error('An Error Occured When Trying to Send Mail',[$ex,['to' => $this->to
                , 'subj' => $this->subject,'data' => $this->data]]);
            $this->sendError();
            return false;

        }
    }

    public function sendError($error = null)
    {
        $this->to = $this->admin;
        $this->subject = "Error";
        $this->view = 'Email.notification';
        $msg = "An Error Occurred With ID - $error";
        $this->data = compact('msg');
        Log::info('emailll',$this->admin);

        return $this->deliver();
    }
}