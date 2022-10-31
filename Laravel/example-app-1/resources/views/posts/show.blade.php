@extends('layouts.app')

@section('content')
            <div class="card">
                    <div class="card-header">
                        Post Info
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ID : {{$post['id']}}</h5>
                        <h5 class="card-title">Title : {{$post['title']}}</h5>
                        <h5 class="card-title">Description : {{$post['description']}}</h5>
                    </div>
                </div>
            <div class="card mt-5">
                    <div class="card-header ">
                        Post Creator Info
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name : {{$post->user->name}}</h5>
                        <h5 class="card-title">Email : {{$post->user->email}}</h5>
                        <h5 class="card-title">Created At : {{$post['created_at']}}</h5>
                    </div>
                </div>
@endsection


