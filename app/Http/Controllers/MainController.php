<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $services = Service::all();
        $resumes = Resume::all();
        $abouts = About::all();
        $homes = Home::all();
        $skills = Skill::all();
        return view('index',compact('skills','homes','abouts','resumes','services','projects'));
    }

    public function bot($method, $params = [])
    {
        $url = 'https://api.telegram.org/bot' . config('services.telegram.token') . '/' . $method;
        $data = Http::post($url, $params);
        return $data->json();
    }

    public function send_massage(Request $request)
    {
        $this->bot('sendMessage', [
            'chat_id' => 1849830924,
            'text' => "👤 Name: $request->name\n📩 Email: $request->email\n📝 Text: $request->message",
        ]);

        return back();
    }
}
