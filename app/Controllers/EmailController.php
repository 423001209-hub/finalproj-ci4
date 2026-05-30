<?php

namespace App\Controllers;

class EmailController extends BaseController
{
    public function send()
    {
        $email = service('email');

        $email->setTo('423001209@ntc.edu.ph');

        $email->setSubject('Week 12-13 Email Test');

        $email->setMessage('
            <h2>Hello!</h2>
            <p>This email was sent from my CodeIgniter 4 project.</p>
        ');

        $email->setAltMessage(
            'Hello! This email was sent from my CodeIgniter 4 project.'
        );

        if ($email->send()) {
            echo "<h2>Email Sent Successfully!</h2>";
        } else {
            echo $email->printDebugger(['headers']);
        }
    }
}