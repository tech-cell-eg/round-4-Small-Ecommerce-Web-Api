<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __invoke(Request $request){

        $questions = Question::all();

        if($questions){
            return ApiResponse::sendResponse(QuestionResource::collection($questions), 'Questions retrieved successfully');
        }
        return ApiResponse::sendResponse([], 'Questions not found');
    }

}
