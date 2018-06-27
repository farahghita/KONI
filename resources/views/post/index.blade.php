@extends('layouts.app')
  @section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <?php foreach ($posts as $post): ?>
              <div class="card">
                  <div class="card-header"><big><b>{{ $post->title }}</b></big></div>

                  <div class="card-body">
                      <p> {{ $post->description }}</p>

                  </div>
              </div>
              <br></br>
            <?php endforeach; ?>
          </div>
      </div>
  </div>
  @endsection
