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
              <h3 class="card-title">Add Apartment</h3>
            </div> 

            <form action="{{route('Appartments.store')}}" method="post" enctype="multipart/form-data">
                @csrf
               <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Appartment Location</label>
                  <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Enter Location" value="{{ old('location') }}">
                  @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div>
                  <label for="exampleInputEmail1">Price per night</label>
                  <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Enter a price" value="{{ old('price') }}">
                  @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Appartment Description</label>
                  <textarea rows="4" cols="50" type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Add description">{{ old('description') }}</textarea>
                  @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label>Choose a Category</label>
                  <select name="value" class="custom-select @error('value') is-invalid @enderror">
                    <option value="">Select a Range</option>
                    <option value="under100" {{ old('value') == 1 ? 'selected' : '' }}>Under 100</option> 
                    <option value="100To300" {{ old('value') == 2 ? 'selected' : '' }}>100 to 300</option> 
                    <option value="300To700" {{ old('value') == 3 ? 'selected' : '' }}>300 to 700</option> 
                    <option value="more700" {{ old('value') == 4 ? 'selected' : '' }}>More than 700</option> 
                  </select>
                  @error('value')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Add image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image">
                    <label cols="50" class="custom-file-label" for="exampleInputFile">Choose Image</label>
                  </div>
                  @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
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