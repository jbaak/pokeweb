<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $url = env('BASE_URL_POKEAPI', 'http://localhost');
        $response = Http::get(sprintf('%spokemon?limit=10', $url));
        $data = $response->json()['results'];

        $newData = [];
        foreach ($data as $item) {
            $newData[] =  [
                'name' => $item['name'],
                'id' => $this->getId($item['url'])
            ];
        }

        return view('home', ['data' => $newData]);
    }

    private function getId($item) {
        $url = explode('/', $item);
        return ($url[6]);
    }

    public function getDetailPokemon(Request $request, $id)
    {
        $url = env('BASE_URL_POKEAPI', 'http://localhost');
        $responseDetail = Http::get(sprintf('%spokemon/%s', $url, $id));
        $responseCharacteristic = Http::get(sprintf('%scharacteristic/%s', $url, $id));

        $detail = $responseDetail->json();
        $description = $responseCharacteristic->json()['descriptions'];

        foreach ($description as $item) {
            if ($item['language']['name'] == 'es') {
                $description = $item['description'];
                break;
            }
        }

        return view('detail', [
            'description' => $description,
            'detail' => $detail,
        ]);
    }
}
