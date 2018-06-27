@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="" action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" value="">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="category_id">
                  <?php foreach ($categories as $category): ?>
                      <option value="{{ $category->id}}"> {{ $category->name }} </option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" rows="5" class="form-control" placeholder="Write here..."></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn-btn primary" name="" value="Save">
            </div>
        </form>
    </div>
@endsection
