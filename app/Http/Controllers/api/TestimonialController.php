<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __invoke(Request $request){
        $testimonials = Testimonial::all();

        if($testimonials){
            return ApiResponse::sendResponse($testimonials,'Testimonials retrieved successfully');
        }
            return ApiResponse::sendResponse([], 'Testimonials not found');
    }
}
