<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Mail\SupportEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class SupportController extends Controller
{
    public function index(){
        SEOMeta::setTitle("Vital Neon Support | NeonExpression");
        SEOMeta::setDescription("At NeonExpression, we believe in providing exceptional customer support every step of the way. Our knowledgeable and friendly support team is always here to help with any questions or concerns you may have about our products and services. Whether you need assistance with a custom neon sign order, have a question about shipping, or need help with installation, we're here to make sure you have a seamless and stress-free experience. Contact us today and let us help you make your vision a reality with NeonExpression.");
        SEOMeta::setCanonical("https://neonexpression/support");
        SEOMeta::setRobots("index, follow");
        SEOMeta::addMeta("apple-mobile-web-app-title", "NeonExpression");
        SEOMeta::addMeta("application-name", "NeonExpression");

        OpenGraph::setTitle("Vital Neon Support | NeonExpression");
        OpenGraph::setDescription("At NeonExpression, we believe in providing exceptional customer support every step of the way. Our knowledgeable and friendly support team is always here to help with any questions or concerns you may have about our products and services. Whether you need assistance with a custom neon sign order, have a question about shipping, or need help with installation, we're here to make sure you have a seamless and stress-free experience. Contact us today and let us help you make your vision a reality with NeonExpression."); 
        OpenGraph::setUrl("https://neonexpression/support");
        OpenGraph::addProperty("type", "website");
        OpenGraph::addProperty("locale", "eu");
        OpenGraph::addImage("https://neonexpression.com/assets/neon_expression_banner.png");

        TwitterCard::setTitle("Vital Neon Support | NeonExpression");
        TwitterCard::setSite("@neonexpression");
        TwitterCard::setImage("https://neonexpression.com/assets/neon_expression_banner.png");
        TwitterCard::setDescription("At NeonExpression, we believe in providing exceptional customer support every step of the way. Our knowledgeable and friendly support team is always here to help with any questions or concerns you may have about our products and services. Whether you need assistance with a custom neon sign order, have a question about shipping, or need help with installation, we're here to make sure you have a seamless and stress-free experience. Contact us today and let us help you make your vision a reality with NeonExpression.");

        JsonLd::setTitle("Vital Neon Support | NeonExpression");
        JsonLd::setDescription("At NeonExpression, we believe in providing exceptional customer support every step of the way. Our knowledgeable and friendly support team is always here to help with any questions or concerns you may have about our products and services. Whether you need assistance with a custom neon sign order, have a question about shipping, or need help with installation, we're here to make sure you have a seamless and stress-free experience. Contact us today and let us help you make your vision a reality with NeonExpression.");
        JsonLd::addImage("https://neonexpression.com/assets/neon_expression_banner.png");
        JsonLd::setType("WebSite");
        return  view('support');
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 30; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        $token = $this->randomPassword();
        $support = Support::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ticket' => $token
        ]);
        Mail::to($request->email)->send(new SupportEmail($support));
        Http::post(config('app.support'), [
            'content' => "**Support Ticked**: {$token}\n**Name**: {$request->name}\n**Email**: {$request->email}\n**Subject**: {$request->subject}\n**Message**: {$request->message}\n"
        ]);
        return back()->with('success', 'Support message sent! we will contact you shortly');
    }
}
