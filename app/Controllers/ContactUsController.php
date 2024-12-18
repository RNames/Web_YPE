<?php

namespace App\Controllers;

use App\Models\ContactUsModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;
use CodeIgniter\Email\Email;
use CodeIgniter\Controller;



class ContactUsController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;
    protected $contactUsModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->socmedModel = new SocialMediaModel();
        $this->contactUsModel = new ContactUsModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        // Detect the language segment from the URL (first segment)
        $segment = $this->request->uri->getSegment(1);

        // Determine the locale based on the URL segment
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language if it does not match the detected locale
        if (session()->get('lang') !== $locale) {
            session()->set('lang', $locale);
        }

        // Set the locale for the current request
        service('request')->setLocale($locale);

        // Prepare data for the view
        $data = [
            'title' => $this->contactUsModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->contactUsModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $locale,
            'socmeds' => $this->socmedModel->findAll(),
            'contactUs' => $this->contactUsModel->first(),
        ];

        echo view('pages/contact_us', $data);

        log_message('info', 'Detected language: ' . session()->get('lang'));
    }

    public function submit_contact_form()
    {
        // Load email library
        $email = \Config\Services::email();

        // Get form input data
        $name = $this->request->getPost('name');
        $phone = $this->request->getPost('phn-number');
        $email_address = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Prepare email content
        $subject = "New Contact Form Submission";
        $message_body = "NAME: $name\nPHONE: $phone\nEMAIL: $email_address\nMESSAGE: $message";

        // Set up the email configuration
        $email->setFrom('apetbone@gmail.com', 'Your Private Europe');
        $email->setTo('apetbone@gmail.com');
        $email->setSubject($subject);
        $email->setMessage($message_body);

        // Send the email
        if ($email->send()) {
            // Determine the URL path based on the language
            $language = session()->get('lang');
            $path = ($language == 'id') ? 'hubungi-kami' : 'contact-us';
        
            // On success, redirect with success message
            return redirect()->to("/$language/$path")->with('success', 'Your message has been sent!');
        } else {
            // On failure, log the error and redirect with an error message
            log_message('error', 'Email sending failed: ' . $email->printDebugger(['headers', 'subject', 'body']));
        
            $language = session()->get('lang');
            $path = ($language == 'id') ? 'hubungi-kami' : 'contact-us';
        
            return redirect()->to("/$language/$path")->with('error', 'There was an error sending your message. Please try again.');
        }  
    }
}
