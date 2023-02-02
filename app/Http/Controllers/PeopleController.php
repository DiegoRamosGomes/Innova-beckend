<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\Http\Resources\PeopleResource;
use App\Models\People;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class PeopleController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return PeopleResource::collection(People::all());
    }

    public function store(PeopleRequest $request): PeopleResource
    {
        $data = $request->validated();

        $people = People::updateOrCreate($data);

        return new PeopleResource($people);
    }

    public function show(People $people): PeopleResource
    {
        return new PeopleResource($people);
    }

    public function update(PeopleRequest $request, People $people): PeopleResource
    {
        $data = $request->validated();

        $people->update($data);

        return new PeopleResource($people);
    }

    public function destroy(People $people): void
    {
        $people->delete();
    }
}
