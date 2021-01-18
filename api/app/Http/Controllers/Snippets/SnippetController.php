<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->middleware(['auth:api']);
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

        dd($snippet);
    }
}
