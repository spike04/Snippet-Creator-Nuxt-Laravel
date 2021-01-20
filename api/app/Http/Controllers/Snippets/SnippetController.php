<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use App\Transformers\Snippets\SnippetTransformer;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->middleware(['auth:api'])->only('store');
    }

    /**
     * Undocumented function
     *
     * @param Snippet $snippet
     * @return void
     */
    public function show(Snippet  $snippet)
    {
        // authorize!
        return fractal()
            ->item($snippet)
            ->transformWith(new SnippetTransformer())
            ->parseIncludes([
                'steps',
                'author',
                'user'
            ])
            ->toArray();
    }

    /**
     * Undocumented function
     * 
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $snippet = $request->user()->snippets()->create();

        return fractal()
            ->item($snippet)
            ->transformWith(new SnippetTransformer())
            ->toArray();
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function update(Snippet $snippet, Request $request)
    {
        // authorize!

        $this->validate($request, [
            'title' => 'nullable',
        ]);

        $snippet->update($request->only('title'));
    }
}
