<?php

namespace App\Http\Controllers;

use App\AddNumber;
use App\Http\QueryFilters\UnsolvedQueryFilter;
use App\Http\Requests\StoreForumIndexRequest;
use App\Http\Requests\UpdateForumIndexRequest;
use App\Models\Discussion;
use App\Models\ForumIndex;
use Illuminate\Routing\Pipeline;

class ForumIndexController extends Controller
{
    public  function __invoke()
    {
        $discussions = app(Pipeline::class)
            ->send(Discussion::latest())
            ->through([
               UnsolvedQueryFilter::class,
            ])
            ->thenReturn()
            ->get();

      return view('forum.index',[
          'discussions' => $discussions
      ]);

    }
}
