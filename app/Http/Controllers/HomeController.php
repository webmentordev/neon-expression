<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle("Buy Custom Neon Signs | Neon Expression");
        SEOMeta::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs.");
        SEOMeta::setCanonical("https://neonexpression.com");
        SEOMeta::setRobots("index, follow");
        SEOMeta::addMeta("apple-mobile-web-app-title", "NeonExpression");
        SEOMeta::addMeta("application-name", "NeonExpression");

        OpenGraph::setTitle("Buy Custom Neon Signs | Neon Expression");
        OpenGraph::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs."); 
        OpenGraph::setUrl("https://neonexpression.com");
        OpenGraph::addProperty("type", "website");
        OpenGraph::addProperty("locale", "eu");
        OpenGraph::addImage("https://neonexpression.com/assets/neon_expression_banner.png");

        TwitterCard::setTitle("Buy Custom Neon Signs | Neon Expression");
        TwitterCard::setSite("@neonexpression");
        TwitterCard::setImage("https://neonexpression.com/assets/neon_expression_banner.png");
        TwitterCard::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs.");

        JsonLd::setTitle("Buy Custom Neon Signs | Neon Expression");
        JsonLd::setDescription("Buy Energy Efficient and Loss Power Hungry Custom Artwork Neon Signs. Colored and Milky White Neon Signs. Cut to shape, Cut to letter, Cut ot rectangle neon signs. Buy Indoor or Out Door neon signs. Buy US Canada, Europe, Australia and Japan standard Neon Power Adaptors. Remote and RGB Dimmer Neon Signs. Screw Fixation, Hinge Suspension and Acrylic Stand Neon Signs.");
        JsonLd::addImage("https://neonexpression.com/assets/neon_expression_banner.png");
        JsonLd::setType("WebSite");

        return view("home");
    }
}