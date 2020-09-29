@extends('layouts.admin')


@section('content')


<h1>Users</h1>


<table class="table">

<hhead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>created</th>
        <th>updated</th>
        
      </tr>
    </thead>
    <tbody>
    @if($users)


    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
      </tr>


      @endforeach

      
      @endif
      
    </tbody>
  </table>


</body>
</html>


@stop

