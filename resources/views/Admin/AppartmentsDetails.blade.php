@extends('Admin.layouts.master')
@section('title')

@endsection

@section('TheHead')
Fields Details
@endsection

@section('css')

@endsection

@section('title_page')
Categories Details
@endsection

@section('title_page2')

@endsection


@section('content')
<div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="col-12">
            {{-- {{dd($playgroundsDetails)}} --}}
            <img src="{{URL::asset("storage/image/$AppartmentDetails->image")}}" class="product-image" alt="Category image">
          </div>
          {{-- <div class="col-12 product-image-thumbs">
            <div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg" alt="Product Image"></div>
            <div class="product-image-thumb" ><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
            <div class="product-image-thumb" ><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
            <div class="product-image-thumb" ><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
            <div class="product-image-thumb" ><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div>
          </div> --}}
          
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{$AppartmentDetails->location}}</h3>
          <hr>
          <div class="col-12 col-sm-6">
            {{-- {{dd($playgroundsDetails->Categories)}} --}}
            <h3 class="my-3"> <p style="font-size:22px;">Min Range</p>{{$AppartmentDetails->range->budget_Range }}</h3>
            <hr>

          <div class="bg-gray py-2 px-3 mt-4">
            <h3 class="mb-0">
              price per night
            </h3>
            <h4 class="mt-0">
              <p>{{$AppartmentDetails->price}} JD </p>
            </h4>
          </div>
        </div>
      </div>
      </div>
      <div class="row mt-4">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc " aria-selected="true" style="font-size: 22px;">Description</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab" style="font-size: 22px;">{{$AppartmentDetails->description}} </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
@endsection 

@section('script')

@endsection 