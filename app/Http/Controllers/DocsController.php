<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\Doc;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all docs for the user
        $docs = Doc::where('user_id', auth()->user()->id)->get();
        return view('dashboard', compact('docs'));
    }

    public function shared()
    {
        return view('shared');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /*
     * Get all docs for the user
     * */
    public function getDocs(Request $request)
    {
        $docs = Doc::where('user_id', auth()->user()->id)->get();
        return response()->json([
            'message' => 'Documents retrieved successfully',
            'data' => $docs,
        ]);
    }

    /**
     * Get latest inserted data
     */

     public function getLatestDocs(Request $request)
     {
        $docs = Doc::latest()->take(6)->get();
        return response()->json([
            'message' => 'Documents retrieved successfully',
            'data' => $docs,
        ]);
     }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Add user_id to request
        $request->request->add(['user_id' => auth()->user()->id]);
        // Create the document
        $doc = Doc::create($request->all());
        return response()->json([
            'message' => 'Document created successfully',
            'data' => $doc,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Send back doc in json
        $doc = Doc::where('id', $id)->first();
        return response()->json([
            'message' => 'Document retrieved successfully',
            'data' => $doc,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Check if doc exists and if user owns it
        if (!Doc::where('id', $id)->exists()) {
            return response()->json([
                'message' => 'Document not found',
            ]);
        }
        if (Doc::where('id', $id)->first()->user_id !== auth()->user()->id) {
            return response()->json([
                'message' => 'You do not have permission to update this document',
            ]);
        }
        // todo - ^^^^ do this better, can just use Laravel auth check for this

        // Update the document
        Doc::where('id', $id)->update($request->all());
        // set status code to 204
        return response()->json([
            'message' => 'Document updated successfully',
        ], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the document
        $res = Doc::where('id', $id)->delete();
        return response()->json([
            'message' => 'Document deleted successfully',
            'res' => $res,
        ]);
    }
}
