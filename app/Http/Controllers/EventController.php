<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Review;

class EventController extends Controller
{
    
    public function delete($id)
    {
    DB::table('reviews')->where('id', $id)->delete();
    return redirect()->back();
    }

    public function store(Request $request)
{
    try {
      
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name' => 'required|string',
            'review' => 'required|string',
        ]);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $filename, 'public');
            $storagePath = 'storage/' . $filePath;
        } else {
            $storagePath = null; 
        }

  
        $review = new Review([
            'photo' => $storagePath,
            'name' => $validatedData['name'],
            'review' => $validatedData['review'],
        ]);

        
        $review->save();

        return redirect()->back()->withSuccess('Review saved successfully.');
    } catch (\Exception $e) {
        \Log::error('Database error: ' . $e->getMessage());
        return back()->withInput()->withErrors(['error' => 'An error occurred while saving the review.']);
    }
}

}