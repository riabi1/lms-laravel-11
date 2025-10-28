<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InstructorRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructorsRequests = User::where('approve_status', 'pending')->orWhere('approve_status', 'rejected')->get();
        return view('admin.instructor-request.index', compact('instructorsRequests'));
    }

    function download(User $user)
    {
        // Try a few sensible locations (public and storage/app/public)
        $candidates = [
            public_path($user->document),
            public_path('/' . ltrim($user->document, '/')),
            storage_path('app/public/' . ltrim($user->document, '/')),
            storage_path('app/' . ltrim($user->document, '/')),
        ];

        foreach ($candidates as $path) {
            if ($path && file_exists($path)) {
                return response()->download($path);
            }
        }

        // File not found — handle gracefully
        return redirect()->back()->with('error', 'Document not found.');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, User $instructor_request): RedirectResponse
    {
        $request->validate(['status' => ['required', 'in:approved,rejected,pending']]);
        $instructor_request->approve_status = $request->status;
        $request->status == 'approved' ? $instructor_request->role = 'instructor' : "";
        $instructor_request->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
