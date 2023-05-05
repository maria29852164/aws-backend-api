<?php

namespace App\Http\Controllers;

use App\Service\Service;
use App\Traits\ResponseTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ResponseTrait;
    public function __construct(protected Service $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return $this->generateResponseSuccessfully( $this->service->getCollection(), Response::HTTP_OK);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $storeInstance = $this->service->storeInstance($request->all());
            return $this->generateResponseSuccessfully($storeInstance,Response::HTTP_CREATED);

        }catch (Exception $exception){
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $instance = $this->service->getInstance($id);
        try{
            return $instance ? $this->generateResponseSuccessfully($instance,Response::HTTP_OK): $this->errorResponse(self::NOT_FOUND_ENTRY,Response::HTTP_NOT_FOUND);

        }catch (Exception $exception){
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instance = $this->service->getInstance($id);
        if(!empty($instance)){
            $updateInstance = $this->service->updateInstance($id, $request->all());
            return $this->generateResponseSuccessfully($updateInstance,Response::HTTP_OK);
        }
        return $this->errorResponse('Error Updating model', Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instance = $this->service->getInstance($id);

        if(!empty($instance)){
            $deleteInstance = $this->service->deleteInstance($id);
            return $this->generateResponseSuccessfully($deleteInstance,Response::HTTP_OK);
        }
        return $this->errorResponse('Error Deleting model', Response::HTTP_UNPROCESSABLE_ENTITY);
    }



}
