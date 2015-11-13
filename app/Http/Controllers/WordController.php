<?php

namespace App\Http\Controllers;

use App\Word;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\WordRepository;

class WordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(WordRepository $words)
    {
        $this->middleware('auth');

        $this->words = $words;
    }

    /**
     * Display a list of all of the user's words.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('words.index', [
            'words' => $this->words->forUser($request->user()),
        ]);
    }

    /**
     * Add a new word.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'word' => 'required|max:50',
            'translate' => 'required',
        ]);

        $request->user()->words()->create([
            'word' => $request->word,
            'description' => $request->description,
            'translate' => $request->translate,
        ]);

        return redirect('/words');
    }

    /**
     * Destroy the given word.
     *
     * @param  Request  $request
     * @param  Word  $word
     * @return Response
     */
    public function destroy(Request $request, Word $word)
    {
        $this->authorize('destroy', $word);

        $word->delete();

        return redirect('/words');
    }
}
