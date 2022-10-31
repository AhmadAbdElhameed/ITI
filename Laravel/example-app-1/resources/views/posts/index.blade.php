
@extends('layouts.app')

@section('content')


            <a href="{{route('posts.create')}}" type="button" class="btn btn-success mb-2">Create Post</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post["id"]}}</td>
                                <td>{{$post["title"]}}</td>
                                <td>{{$post["post_creator"]}}</td>
                                <td>{{$post->created_at->format("Y-m-d")}}</td>
                                <td>
                                    <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                                    <form style="display: inline;" method="POST" action="{{route('posts.destroy',$post['id'])}}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this post ?')">Delete</button>
                                    </form>

                                </td>
                            </tr>

                        @endforeach
                </tbody>
            </table>
            {{$posts->links()}}
@endsection



