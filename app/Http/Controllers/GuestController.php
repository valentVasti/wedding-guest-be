<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    public function index(){
        $guest = Guest::all();
        $base_url = 'https://wedding-invitation-wening-leo.vercel.app/';

        return view('guest', compact('guest', 'base_url'));
    }

    public function generateSlug()
    {
        $guest = Guest::all();

        foreach ($guest as $g) {
            $g->slug = Str::slug($g->name);
            $g->save();
        }

        $guest = Guest::all();

        return response()->json([
            'message' => 'Slug generated successfully',
            'data' => $guest
        ], 200);   
    }

    public function getGuestBySlug($slug){
        $guest = Guest::where('slug', $slug)->first();

        if($guest){
            return response()->json([
                'message' => 'Guest found',
                'data' => $guest
            ], 200);
        } else {
            return response()->json([
                'message' => 'Guest not found',
                'data' => null
            ], 404);
        }
    }
}
