@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">Edit post</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" class="" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <input class="w-25" type="text" name="title" class="form-control"
                                       placeholder="Title post"
                                       value="{{ $post->title }}">
                                @error('title')
                                <div class="text-danger">  {{ $message  }} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea id="summernote" name="content">
                                    {{ $post->content }}
                                </textarea>
                                @error('content')
                                <div class="text-danger">  {{ $message  }} </div>
                                @enderror
                            </div>


                            <div class="form-group w-50">
                                <label for="exampleInputFile">Image input</label>
                                <div class="w-50">
                                    <img src="{{ url('storage/' . $post->preview_image) }}" class="w-50" alt="preview_image">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Choose image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>

                                @error('preview_image')
                                <div class="text-danger">  {{ $message  }} </div>
                                @enderror

                            </div>


                            <div class="form-group w-50">
                                <label for="exampleInputFile">Main image input</label>
                                <div class="w-50">
                                    <img src="{{ url('storage/' . $post->main_image) }}" class="w-50" alt="main_image">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Choose main image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>

                                @error('main_image')
                                    <div class="text-danger">  {{ $message  }} </div>
                                @enderror

                            </div>


                            <div class="form-group w-50">
                                <label>Select Category</label>

                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? ' selected' : '' }}
                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group w-50">
                                <label>Tags</label>
                                <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select Tags" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray() ) ? ' selected' : '' }}
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
