@extends('Admin.layouts.master')
@section('title')
User Messages
@endsection

@section('TheHead')
Messages
@endsection

@section('css')

@endsection

@section('title_page')

@endsection

@section('title_page2')
Users Messages
@endsection

@section('content')
<style>
    .DeleteB{
        background-color: rgb(255, 255, 255);
        color:rgb(253, 0, 0);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
        border: none;
    }
    .DeleteB:hover{
        background-color: rgb(255, 0, 0);
        color:rgb(255, 255, 255);
    }
    /* .Editb{
        background-color: rgb(255, 255, 255);
        color:rgb(4, 88, 214);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
    }
    .Editb:hover{
        background-color: rgb(4, 88, 214);
        color:rgb(255, 255, 255);
    } */
    .makeAdmin{
      background-color: rgb(255, 255, 255);
        color:rgb(22, 131, 0);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
        border: none;
    }
    .makeAdmin:hover{
      background-color: rgb(22, 131, 0);
        color:rgb(255, 255, 255);
    }

</style>
<div>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <?php
            $i = 1
            ?>
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Delete Message</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contact as $msg)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$msg->Name}}</td>
                <td>{{$msg->Email}}</td>
                <td>{{$msg->phoneNumber}}</td>
                <td>{{$msg->Message}}</td>
                <td><form class="butnMargin" onclick="return confirm('Are you sure you want to delete this message ?');" action="{{route('Contact.destroy', $msg->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="DeleteB">Delete</button>
                   </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection 

@section('script')

<script>
</script>

@endsection 