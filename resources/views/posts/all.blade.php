@extends('admin')

@section('content')
<!--<div class="well">-->
<!--    <h1>Welcome to New Blog!</h1>-->
<div class="content" style="margin-left: 70px;">
    <h2>Posts</h2>
    @if(Session::has('post_updated'))
        <div class="col-sm-12 alert alert-success">{{ session('post_updated') }}</div>
    @endif
    @if(Session::has('delete_post'))
        <div class="col-sm-12 alert alert-success">{{ session('delete_post') }}</div>
    @endif
    <table class="table table-striped table-advance table-hover">
        <tbody>
           <tr>
              <th><i class="icon_book_alt"></i> Title</th>
              <th><i class="icon_calendar"></i> Date</th>
              <th><i class="icon_profile"></i> Author</th>
              <th><i class="icon_cogs"></i> Action</th>
           </tr>
    @foreach($posts as $post)
        <tr>
           <td>{{ $post->post_title }} {{ $post->lastname }}</td>
           <td>{{ $post->post_date }}</td>
           <td>{{ $post->firstname.' '.$post->lastname }}</td>
           <td>
            <div class="btn-group">
                <a class="btn btn-success" href="{{ url('/posts/editpost/'.base64_encode($post->id)) }}"><i class="icon_check_alt2"></i></a>
                <a class="btn btn-danger" href="{{ url('/posts/deletepost/'.base64_encode($post->id)) }}" onClick="if (confirm('Are you sure you want to delete this post?') == true) {return true;} else{ return false;}" ><i class="icon_close_alt2"></i></a>
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
    var deletePost = function() {
        if (confirm('Are you sure you want to delete this post?') == true) {
            return true;
//            $.ajax({
//                url: "{{ url('/posts/deletepost') }}",
//                type: "POST",
//                data: {
//                    id:id, "_token":"{{ csrf_token() }}"
//                },
//                success: function () {
//                    alert('Post deleted successfully');
//                    location.href = "{{ url('/posts/all') }}";
//                }
//            });
        } else{
            return false;
        }
    }
    
</script>
@stop