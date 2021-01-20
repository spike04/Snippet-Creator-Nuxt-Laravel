<?php

namespace App\Http\Controllers\Snippers;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Snippet $snippet
     * @param Step $step
     * @param Request $request
     * @return void
     */
    public function update(Snippet $snippet, Step $step, Request $request)
    {
        // authorize!

        $step->update($request->only('title', 'body'));
    }
}
