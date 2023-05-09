@extends('Admin.layouts.master')
@section('title')

@endsection

@section('css')
<style>
  .desss{
      width: 100%;
      height: 75px;
      display: inline;
  }
  
  </style>
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
              <h3 class="card-title">Edit Playground</h3>
            </div> 

            <form action="{{route('Appartments.update',$AppartmentsEdit->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
               <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Playground Name</label>
                  <input type="text" class="form-control" name="location" value="{{$AppartmentsEdit->location}}">
                </div>
                <div>
                  <label for="exampleInputEmail1"> price for Hour</label>
                  <input type="text" class="form-contrvol" name="price" value="{{$AppartmentsEdit->price}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input  rows="4" cols="50" type="text" class="form-control desss" name="description" value="{{$AppartmentsEdit->description}}">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                          <label>Choose a Category</label>
                          {{-- <select name="category_id" class="custom-select">
                            @foreach($AppartmentsRange as $Range)
                          <option value="{{$Range->id}}"> {{$Range->budget_Range}}</option>
                          @endforeach
                        </select> --}}
                        <select name="ranges_id" class="custom-select @error('value') is-invalid @enderror">
                          <option value="">Select a Range</option>
                          <option value="under100" {{ old('value') == 1 ? 'selected' : '' }}>Under 100</option> 
                          <option value="100To300" {{ old('value') == 2 ? 'selected' : '' }}>100 to 300</option> 
                          <option value="300To700" {{ old('value') == 3 ? 'selected' : '' }}>300 to 700</option> 
                          <option value="more700" {{ old('value') == 4 ? 'selected' : '' }}>More than 700</option> 
                        </select>
                      </div>
                    </div>
                <div class="form-group">
                  <label for="exampleInputFile">Add image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
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











