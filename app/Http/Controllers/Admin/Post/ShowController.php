<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Service\PostService;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        return  view('admin.post.show', compact('post'));
    }
}
