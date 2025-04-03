<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreViolationActionRequest;
use App\Http\Resources\ViolationActionResource;
use App\Models\ViolationAction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ViolationActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return ViolationActionResource::collection(ViolationAction::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreViolationActionRequest $request)
    {
        try {
            $actionTaken = $request->commit();
            return response()->json(new ViolationActionResource($actionTaken), 201);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
