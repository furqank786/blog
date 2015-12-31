@extends('admin')

@section('content')
<!--<div class="well">-->
<!--    <h1>Welcome to New Blog!</h1>-->
<div class="content" style="margin-left: 70px;">
    <h2>Users</h2>
    @if(Session::has('profile_update'))
        <div class="col-sm-12 alert alert-success">{{ session('profile_update') }}</div>
    @endif
    @if(Session::has('delete_user'))
        <div class="col-sm-12 alert alert-success">{{ session('delete_user') }}</div>
    @endif
    <table class="table table-striped table-advance table-hover">
        <tbody>
           <tr>
              <th><i class="icon_profile"></i> Full Name</th>
              <th><i class="icon_calendar"></i> Date</th>
              <th><i class="icon_mail_alt"></i> Email</th>
              <th><i class="icon_cogs"></i> Action</th>
           </tr>
    @foreach($users as $user)
        <tr>
           <td>{{ $user->firstname }} {{ $user->lastname }}</td>
           <td>{{ $user->created_at }}</td>
           <td>{{ $user->email }}</td>
           <td>
            <div class="btn-group">
                <a class="btn btn-success" href="{{ url('/users/edituser/'.base64_encode($user->id)) }}"><i class="icon_check_alt2"></i></a>
                <a class="btn btn-danger" href="{{ url('/users/deleteuser/'.base64_encode($user->id)) }}" onClick="if (confirm('Are you sure you want to delete this user?') == true) {return true;} else{ return false;}"><i class="icon_close_alt2"></i></a>
            </div>
            </td>
        </tr>
    @endforeach
<!--               <tr>
                  <td>Sung Carlson</td>
                  <td>2011-01-10</td>
                  <td>ione.gisela@high.org</td>
                  <td>Robert Lee</td>
                  <td>724-639-4784</td>
                  <td>
                   <div class="btn-group">
                       <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                       <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                       <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                   </div>
                   </td>
               </tr>-->
            </tbody>
         </table>
    
    
</div>
<script language="javascript">
    var deleteUser = function(id) {
        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: "{{ url('/users/deleteuser') }}",
                type: "POST",
                data: {
                    id:id, "_token":"{{ csrf_token() }}"
                },
                success: function () {
                    //alert('User deleted successfully');
                   // location.href = "{{ url('/users') }}";
                }
            });
        }
    }
    
</script>
@stop
