@extends('layout.master')

@section('content')
@component('layout.components.title')
show page
@endcomponent
<div class="container mt-3 d-flex flex-row-reverse s">
<form action="{{route('articles.destroy',$article->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-sm btn-danger rounded-0">
            Delete
        </button>
    </form>
    <form action="{{route('articles.edit',$article->id)}}" method="get">
        <button type="submit" class="btn btn-sm btn-warning mx-2 rounded-0">
            Edit
        </button>
    </form>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead class="">
                    <tr class="text-center">
                        <th scope="col" class="">#</th>
                        <th scope="col" class="">title</th>
                        <th scope="col" class="">slug</th>
                        <th scope="col" class="">Created Date</th>
                        <th scope="col" class="">Updated Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->slug}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>

                    </tr>
                </tbody>

            </table>
            <table class="table table-hover table-bordered">
                <thead class="">
                    <tr class="text-center">
                        <th scope="col" class="">Description</th>

                    </tr>
                <tbody>
                    <tr class="text-center">
                        <td scope="row">{{$article->description}}</td>
                </tbody>
            </table>
            <table class="table table-hover table-bordered">
                <thead class="">
                    <tr class="text-center">
                        <th scope="col" class="">content</th>

                    </tr>
                <tbody>
                    <tr class="text-center">
                        <td scope="row">{{$article->content}}</td>
                </tbody>
            </table>
            @endsection