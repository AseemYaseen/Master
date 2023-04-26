@extends('Admin.layouts.master')
@section('title')

@endsection

@section('TheHead')
Restaurants Table
@endsection

@section('css')

@endsection

@section('title_page')

@endsection

@section('title_page2')

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
    .Editb{
        background-color: rgb(255, 255, 255);
        color:rgb(4, 88, 214);
        border-radius:10px;
        padding:5px 10px;
        transition: 0.5s;
    }
    .Editb:hover{
        background-color: rgb(4, 88, 214);
        color:rgb(255, 255, 255);
    }
    .MoreDatails{
        cursor: pointer;
        color: blue;
        transition: 0.1s;
        background: white;
        padding: 5px 15px;
        border-radius: 15px;

    }
    .MoreDatails:hover{
        scale:1.1;
        color: green;
    }
</style>
<a href="{{route('Restaurants.create')}}" type="button" class="btn btn-inline bg-gradient-success btn-sm" style="">Add Restaurant</a>
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
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>More Details</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            
            <tbody>
              @if(!empty($restaurants))
                 <?php
                $i=1
                ?>
                @foreach ($restaurants as $restaurant)
              <tr>
                <td>{{$i++}}</td>
               <td>{{$restaurant->name}}</td> 
               <td><a href="{{route('Restaurants.show',$restaurant->id)}}" class="MoreDatails"> See more details .. </a></td>
                <td><a href="{{route('Restaurants.edit',$restaurant->id)}}" type="button" class="Editb">Edit</a></td> 
                <td>
                    <form class="butnMargin" action="{{route('Restaurants.destroy',$restaurant->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure ?');" class="DeleteB">Delete</button>
                    </form>
                </td>
    
              </tr>
              @endforeach
              @endif
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

@endsection 