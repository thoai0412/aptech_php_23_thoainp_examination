@extends('layout.master')
@section('content')
@component('layout.components.title')
edit page

@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('articles.update',$article->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="title">Title:</label>
          <input type="description" class="form-control rounded-0" id="title" placeholder="Title" name="title" value="{{$article->title}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="description">Description:</label>
          <input type="description" class="form-control rounded-0" id="description" placeholder="Description" name="description" value="{{$article->description}}">
        </div>

        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="content">Content:</label>
          <textarea rows="50" cols="50" id="content" name="content" placeholder="Content" value="{{$article->content}}"></textarea>
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
      console.error(error);
    });
</script>
@endsection