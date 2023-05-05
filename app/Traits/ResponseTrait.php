<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection as CollectionSupport;
trait ResponseTrait
{
    const NOT_FOUND_ENTRY = 'Not found Model';
    public function generateResponseSuccessfully(array | Collection | CollectionSupport $data, string $message = 'success', $code = 200):JsonResponse{
        return response()->json(compact('data','message','code'),$code);
    }

    public function errorResponse(string $message = 'Server Error', $code = 500):JsonResponse{
        return response()->json(compact('message'),$code);
    }
}
