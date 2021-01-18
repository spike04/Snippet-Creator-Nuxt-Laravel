<?php

namespace App\Transformers\Snippets;

use App\Models\Snippet;
use App\Transformers\Users\PublicUserTransformer;
use League\Fractal\TransformerAbstract;

class SnippetTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'steps',
        'author',
        'user'
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Snippet $snippet)
    {
        return [
            'uuid' => $snippet->uuid,
            'title' => $snippet->title ?: '',
            'steps_count' => $snippet->steps->count()
        ];
    }

    /**
     * Undocumented function
     *
     * @param Snippet $snippet
     * @return void
     */
    public function includeSteps(Snippet $snippet)
    {
        return $this->collection($snippet->steps, new StepTransformer());
    }

    /**
     * Undocumented function
     *
     * @param Snippet $snippet
     * @return void
     */
    public function includeAuthor(Snippet $snippet)
    {
        return $this->item($snippet->user, new PublicUserTransformer());
    }

    /**
     * Undocumented function
     *
     * @param Snippet $snippet
     * @return void
     */
    public function includeUser(Snippet $snippet)
    {
        return $this->primitive('user', function () use ($snippet) {
            return [
                'data' => $snippet->user_id === optional(auth()->user())->id
            ];
        });
    }
}
