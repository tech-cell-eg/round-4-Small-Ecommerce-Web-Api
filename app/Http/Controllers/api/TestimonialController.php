<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __invoke(Request $request){
        $testimonials = Testimonial::all();

        if($testimonials){
            return ApiResponse::sendResponse(TestimonialResource::collection($testimonials),'Testimonials retrieved successfully');
        }
            return ApiResponse::sendResponse([], 'Testimonials not found');
    }
}
