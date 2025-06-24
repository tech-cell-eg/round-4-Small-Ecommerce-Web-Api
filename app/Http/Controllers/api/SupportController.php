<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfficeLocationResource;
use App\Models\OfficeLocation;
use App\Models\Setting;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __invoke()
    {
        $setting = Setting::first();
        $office_locations = OfficeLocation::all();

        if ($setting) {
            $data = [
                'email' => $setting->email,
                'phone' => $setting->phone,
                'working_hours' => $setting->working_hours,
                'office_locations' => OfficeLocationResource::collection($office_locations)
            ];

            return ApiResponse::sendResponse($data, 'Support data retrieved successfully');
        }

        return ApiResponse::sendResponse([], 'No support data found');
    }
}
