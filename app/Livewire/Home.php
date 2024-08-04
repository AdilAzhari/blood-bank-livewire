<?php

namespace App\Livewire;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Post;
use App\Models\Setting;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $bloodTypes = BloodType::all();
        $cities = City::all();
        $articles = Post::take(9)->get();
        $donationRequests = DonationRequest::take(8)->latest()->get();
        $Setting = Setting::first();
        return view('front.home', compact('articles', 'donationRequests', 'bloodTypes', 'cities', 'Setting'));

    }
}
