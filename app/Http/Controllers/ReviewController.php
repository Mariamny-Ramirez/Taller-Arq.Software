<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //home
   public function home(): View
    {
        return view('reviews.home');
    }


    //create() = displays a form for inserting data
    public function create()
    {
        return view('reviews.create');
    }


    //store() = stores the data entered by the user
    public function store(Request $request)
    {
        //Validations to verify that the reviews and scores were written correctly
        $request->validate([
            'comment' => 'required|string',
            'score' => 'required|integer|between:0,5'
        ], [
            'score.required' => 'Debe ingresar un puntaje.',
            'score.integer' => 'El puntaje debe ser un número entero.',
            'score.between' => 'El puntaje debe estar entre 0 y 5.',
            'comment.required' => 'Debe ingresar un comentario.'
            
        ]);

        Review::create([
            'comment' => $request->comment,
            'score'   => $request->score
        ]);

        return redirect('/')
            ->with('success', 'Elemento creado satisfactoriamente');
    }


    //index() = shows us a list with all the reviews created
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }


    //show() = shows us the information from a single review
    public function show($id)
    {
        $review = Review::findOrFail($id);

        return view('reviews.show', compact('review'));
    }


    //destroy() = destroys or deletes a review from the database
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('review.index')
            ->with('success', 'Review eliminada correctamente');
    }
}