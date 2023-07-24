<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class DesignController extends Controller
{
    public function index(){
        SEOMeta::setTitle("Create Your Own Neon Sign: Upload Your Design | NeonExpression");
        SEOMeta::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs.");
        SEOMeta::setCanonical("https://neonexpression.com/upload-design");
        SEOMeta::setRobots("index, follow");
        SEOMeta::addMeta("apple-mobile-web-app-title", "NeonExpression");
        SEOMeta::addMeta("application-name", "NeonExpression");

        OpenGraph::setTitle("Create Your Own Neon Sign: Upload Your Design | NeonExpression");
        OpenGraph::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs."); 
        OpenGraph::setUrl("https://neonexpression.com/upload-design");
        OpenGraph::addProperty("type", "website");
        OpenGraph::addProperty("locale", "eu");
        OpenGraph::addImage("https://neonexpression.com/assets/neon_expression_banner.png");

        TwitterCard::setTitle("Create Your Own Neon Sign: Upload Your Design | NeonExpression");
        TwitterCard::setSite("@neonexpression");
        TwitterCard::setImage("https://neonexpression.com/assets/neon_expression_banner.png");
        TwitterCard::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs.");

        JsonLd::setTitle("Create Your Own Neon Sign: Upload Your Design | NeonExpression");
        JsonLd::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs.");
        JsonLd::addImage("https://neonexpression.com/assets/neon_expression_banner.png");
        JsonLd::setType("WebSite");

        return view('design');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|max:255',
            'message' => 'required',
            'name' => 'required|max:255',
            'image' => 'required|mimes:png,jpg,gif,pdf,jpeg,svg,webp|max:2048',
        ]);
        $result = Design::create([
            'email' => $request->email,
            'message' => $request->message,
            'name' => $request->name,
            'image' => $request->image->store('designs', 'public_disk')
        ]);
        Http::post(config('app.design'), [
            'content' => "**Email:** $result->email\n**Name:** $result->name\n**Message:** $result->message\n**Image:** https://neonexpression.com/storage/$result->image"
        ]);
        return back()->with('success', 'File uploaded. we will send you the quote in few hours');
    }
}