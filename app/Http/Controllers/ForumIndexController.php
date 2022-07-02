<?php

namespace App\Http\Controllers;

use App\AddNumber;
use App\Http\Requests\StoreForumIndexRequest;
use App\Http\Requests\UpdateForumIndexRequest;
use App\Models\ForumIndex;
use Illuminate\Routing\Pipeline;

class ForumIndexController extends Controller
{
    public  function __invoke()
    {
        // TODO: Implement __invoke() method.
        $number = app(Pipeline::class)
            ->send(5)
            ->through([
                AddNumber::class,

            ])
            ->thenReturn();
        dd($number);

    }
}
