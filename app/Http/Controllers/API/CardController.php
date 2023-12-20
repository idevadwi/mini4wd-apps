<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardResource;
use App\Http\Traits\HttpResponses;
use App\Models\Card;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CardController extends Controller
{
    use HttpResponses;

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success(CardResource::collection(Card::ForUser()->get()));
    }
}
