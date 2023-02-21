@extends('Admin.layouts.master')
@section('title')
Add Appartment
@endsection

@section('css')

@endsection

@section('title_page')

@endsection

@section('title_page2')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-md-8">
         
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Playground</h3>
            </div> 

            <form action="{{route('Appartments.store')}}" method="post" enctype="multipart/form-data">
                @csrf
               <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Appartment Location</label>
                  <input type="text" class="form-control" name="Location" placeholder="Enter Location">
                </div>
                <div>
                  <label for="exampleInputEmail1"> price per night</label>
                  <input type="text" class="form-control" name="price" placeholder="Enter a price">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Appartment Description</label>
                  <textarea  rows="4" cols="50" type="text" class="form-control" name="description" placeholder="Add description"></textarea>
                </div>

                <div class="form-group">
                  <label>Choose a Category</label>
                  <select name="category_id" class="custom-select">
                     @foreach($ranges as $range) 
                   <option value="{{$range->id}}">{{$range->budget_Range}}</option> 
                   {{-- {{isset($movie->image) ? $movie->image->movie_image : "" }} --}}
                   @endforeach 
                </select>
              </div>

                <div class="form-group">
                  <label for="exampleInputFile">Add image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label cols="50" class="custom-file-label" for="exampleInputFile">Choose Image</label>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>
    
 @endsection  

@section('script')

@endsection  