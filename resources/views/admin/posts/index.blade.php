@extends('layouts.admin')


@section('content')


  <h1>Posts</h1> 


   <table class="table">
     <thead>
      <tr>
      <th>Id</th>
      <th>User</th>
      <th>Category</th>
      <th>Photo</th>
      <th>Title</th>
      <th>body</th>
      <th>Created_at</th>
      <th>Updated_at</th>
      </tr>
      </thead>
      </thbody>

      @if($posts)

        @foreach($posts as $post)

        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->user_id}}</td>
          <td>{{$post->category ? $post->category->name : 'uncatogorized'}}</td>
          <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http//placehold.it//400x400'}}" alt=""></td>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->updated_at}}</td>

          </tr>

          @endforeach

            @endif        


          

          
</tbody>
</table>
       
   

@endsection   








