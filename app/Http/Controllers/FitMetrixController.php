<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Activity;


class FitMetrixController extends Controller
{
    public function getActivities()
    {
        /**
         * ! FALSE DATA for now, had to be replaced by the real API call
         * !----------------------------------------------------------
         */
        // $response = Http::get('https://api.fitmetrix.io/api/activities', [
        //     'api_key' => 'your_api_key'
        // ]);
        // return response()->json(Activity::all());
        /**
         * !----------------------------------------------------------
         */

        $mockedActivities = [
            ['id' => 1, 'name' => 'Yoga', 'description' => 'Séance de yoga pour tous les niveaux'],
            ['id' => 2, 'name' => 'Cardio', 'description' => 'Entraînement cardio intensif'],
            // ... ajoutez autant d'activités que vous le souhaitez
        ];

        return response()->json($mockedActivities);
    }

    // public function getAppointments($appid)
    // {
    //     // $response = Http::get("https://api.fitmetrix.io/api/app/{$appid}/appointments", [
    //     //     'api_key' => 'your_api_key'
    //     // ]);

    //     return $response->json();
    // }

    // endpoints

}
