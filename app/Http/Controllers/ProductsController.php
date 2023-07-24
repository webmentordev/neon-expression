<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Search;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class ProductsController extends Controller
{
    public function index(){
        SEOMeta::setTitle("Custom Neon Signs | NeonExpression");
        SEOMeta::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");
        SEOMeta::setCanonical("https://neonexpression.com/products");
        SEOMeta::setRobots("index, follow");
        SEOMeta::addMeta("apple-mobile-web-app-title", "NeonExpression");
        SEOMeta::addMeta("application-name", "NeonExpression");

        OpenGraph::setTitle("Custom Neon Signs | NeonExpression");
        OpenGraph::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression."); 
        OpenGraph::setUrl("https://neonexpression.com/products");
        OpenGraph::addProperty("type", "website");
        OpenGraph::addProperty("locale", "eu");
        OpenGraph::addImage("https://neonexpression.com/assets/neon_expression_banner.png");

        TwitterCard::setTitle("Custom Neon Signs | NeonExpression");
        TwitterCard::setSite("@NeonExpression");
        TwitterCard::setImage("https://neonexpression.com/assets/neon_expression_banner.png");
        TwitterCard::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");

        JsonLd::setTitle("Custom Neon Signs | NeonExpression");
        JsonLd::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");
        JsonLd::addImage("https://neonexpression.com/assets/neon_expression_banner.png");
        JsonLd::setType("WebSite");

        return view('products', [
            'products' => Product::latest()->get()
        ]);
    }
    public function search(Request $request){
        $result = Product::where('name', 'LIKE', '%'.$request->search.'%')->get();
        Search::create([
            'search' => $request->search
        ]);
        SEOMeta::setTitle("Search Custom Neon Signs | NeonExpression");
        SEOMeta::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");
        SEOMeta::setCanonical("https://neonexpression.com/products");
        SEOMeta::setRobots("index, follow");
        SEOMeta::addMeta("apple-mobile-web-app-title", "NeonExpression");
        SEOMeta::addMeta("application-name", "NeonExpression");

        OpenGraph::setTitle("Search Custom Neon Signs | NeonExpression");
        OpenGraph::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression."); 
        OpenGraph::setUrl("https://neonexpression.com/products");
        OpenGraph::addProperty("type", "website");
        OpenGraph::addProperty("locale", "eu");
        OpenGraph::addImage("https://neonexpression.com/assets/neon_expression_banner.png");

        TwitterCard::setTitle("Search Custom Neon Signs | NeonExpression");
        TwitterCard::setSite("@neonexpression");
        TwitterCard::setImage("https://neonexpression.com/assets/neon_expression_banner.png");
        TwitterCard::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");

        JsonLd::setTitle("Search Custom Neon Signs | NeonExpression");
        JsonLd::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");
        JsonLd::addImage("https://neonexpression.com/assets/neon_expression_banner.png");
        JsonLd::setType("WebSite");
        return view('products', [
            'products' => $result
        ]);
    }
    public function category($category){
        $result = Category::where('name', $category)->with('products')->first();
        if($result != null){
            SEOMeta::setTitle("Custom Neon Sign Categories | NeonExpression");
            SEOMeta::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");
            SEOMeta::setCanonical("https://neonexpression.com/products");
            SEOMeta::setRobots("index, follow");
            SEOMeta::addMeta("apple-mobile-web-app-title", "NeonExpression");
            SEOMeta::addMeta("application-name", "NeonExpression");

            OpenGraph::setTitle("Custom Neon Sign Categories | NeonExpression");
            OpenGraph::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression."); 
            OpenGraph::setUrl("https://neonexpression.com/products");
            OpenGraph::addProperty("type", "website");
            OpenGraph::addProperty("locale", "eu");
            OpenGraph::addImage("https://neonexpression.com/assets/neon_expression_banner.png");

            TwitterCard::setTitle("Custom Neon Sign Categories | NeonExpression");
            TwitterCard::setSite("@NeonExpression");
            TwitterCard::setImage("https://neonexpression.com/assets/neon_expression_banner.png");
            TwitterCard::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");

            JsonLd::setTitle("Custom Neon Sign Categories | NeonExpression");
            JsonLd::setDescription("Discover the vibrant world of neon signs at NeonExpression. Our extensive collection of pre-made neon signs includes a variety of designs, from classic to contemporary, that are sure to catch the eye and brighten any space. We also offer the option to create your own personalized neon sign, so you can bring your unique vision to life. All of our neon signs are handcrafted using high-quality materials and advanced techniques, ensuring that each sign is built to last. Browse our selection now and add a touch of neon to your life with NeonExpression.");
            JsonLd::addImage("https://neonexpression.com/assets/neon_expression_banner.png");
            JsonLd::setType("WebSite");

            return view('products', [
                'products' => $result->products
            ]);
        }else{
            abort(404, 'Not Found!');
        }
    }
};