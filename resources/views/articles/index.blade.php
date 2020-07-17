@extends('layout.master')

@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Title</th>
            <th scope="col" class="">Description</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($articles as $article)
          <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td><a href="{{route('articles.show',$article->id)}}">{{$article->title}}</a></td>
            <td>{{$article->description}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('articles.show',$article->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('articles.edit',$article->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('articles.destroy',$article->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$articles->links()}}</div>
      @endsection