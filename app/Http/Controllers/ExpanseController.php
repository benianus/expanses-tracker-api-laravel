<?php

namespace App\Http\Controllers;

use App\Models\Expanse;
use Illuminate\Http\Request;

class ExpanseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expanses = Expanse::latest()->paginate(3);
        return $expanses->jsonSerialize();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $expanse = Expanse::create([
            'name' => $request->input('name'),
            'cost' => $request->input('cost'),
            'user_id' => $request->input('user_id')
        ]);

        return $expanse->jsonSerialize();
    }

    /**
     * Display the specified resource.
     */
    public function show(Expanse $expanse)
    {
        //
        $expanse = Expanse::findOrFail($expanse->id);

        return [
            "data" => $expanse
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expanse $expanse)
    {
        //
        $expanse = Expanse::findOrFail($expanse->id);

        $isUpdated = $expanse->update([
            'name' => $request->input('name'),
            'cost' => $request->input('cost'),
            'user_id' => $request->input('user_id')
        ]);

        return $isUpdated ?
            ["message" => "Expanse successfully updated"] :
            ["message" => "Failed to update, try again"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expanse $expanse)
    {
        //
        $isDeleted = $expanse->delete();
        return $isDeleted ?
            ["message" => "Expanse successfully Deleted"] :
            ["message" => "Failed to delete, try again"];
    }
}
