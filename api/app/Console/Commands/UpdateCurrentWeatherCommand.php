<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Weather;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateCurrentWeatherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the current weather of users in 15 mins';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $users = User::get();

        foreach ($users as $key => $user) {
            $lat = $user->latitude;
            $long = $user->longitude;
            $url = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$long&units=metric&appid=0cce618f5cf06680d0a1cbb639a4f8d0";
            $response = Http::get($url);
            $jsonData = $response->json();

            if($response->ok() && $jsonData ){
                Weather::updateOrCreate([
                    'user_id'   => $user->id,
                ],[
                    'user_id' => $user->id,
                    'weather' => $jsonData,
                    'main' => $jsonData['weather'][0]['main']
                ]);
            }
        }
        $this->info('Weather information updated successfully');
    }
}
