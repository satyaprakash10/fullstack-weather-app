<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class UpdateCurrentWeatherJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $users = User::get();

        // foreach ($users as $key => $user) {
        //     $lat = $user->latitude;
        //     $long = $user->longitude;
        // }
        $url = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$long&appid=0cce618f5cf06680d0a1cbb639a4f8d0";
        $response = Http::get($url);

        dd($response->body(), $response->json());

    }
}
