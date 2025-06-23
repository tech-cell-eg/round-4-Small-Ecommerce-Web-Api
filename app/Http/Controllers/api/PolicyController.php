<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PolicyResource;
use App\Models\Policy;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function __invoke(Request $request)
    {
        $policies = Policy::get();
        return ApiResponse::sendResponse(PolicyResource::collection($policies),'Policies retrieved successfully');
    }
}
