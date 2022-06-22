<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fo;
use Illuminate\Http\Request;

class FoController extends Controller
{
    public function index()
    {
        $items = Fo::get();
        $result = [];
        foreach ($items as $item) {
            $host = $item->ip;
            $output = shell_exec('ping -n 1 ' . $host);
            if (strpos($output, 'Destination net unreachable') !== false) {
                $status = 'Trouble! Cek Netnumen';
            } elseif (strpos($output, 'Request timed out') !== false) {
                $status = 'Down';
            } elseif (strpos($output, 'TTL') !== false) {
                $status = 'UP';
            } else {
                $status = 'Trouble! Cek Netnumen';
            }

            array_push($result, [
                'lokasi' => $item->lokasi,
                'perangkat' => $item->perangkat,
                'ip' => $item->ip,
                'odp' => $item->odp,
                'bandwith' => $item->bandwith,
                'status' => $status
            ]);
        }

        $response = [
            'status' => true,
            'result' => $result
        ];
        return response()->json($response, 200);
    }
}
