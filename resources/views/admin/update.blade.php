@extends("./admin/master")
@section("title","add product")
@section("content")
       <!-- Form Start -->
       <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4">update PRODDUCT</h1>
                    <form method="post" action="{{ route('up' , $xyz->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product name</label>
                            <input type="text" class="form-control" value="{{ $xyz->name }}" id="exampleInputEmail1" name="prodname"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product des</label>
                            <input type="text" class="form-control" value="{{ $xyz->des }}" id="exampleInputEmail1" name="proddes"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product price</label>
                            <input type="number" class="form-control" value="{{ $xyz->price }}"id="exampleInputEmail1" name="prodprice"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product qty</label>
                            <input type="number" class="form-control"value="{{ $xyz->qty }}" id="exampleInputEmail1" name="prodqty"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product image</label>
                            <input type="file" class="form-control" value="{{ $xyz->image }}" id="exampleInputEmail1" name="image"
                                aria-describedby="emailHelp">
                                <img src="{{ asset('product/' . $xyz->image ) }}" alt="" width="100px" height="100px" style="border-radius: 50%">
                        </div>
                        <button type="submit" class="btn btn-primary">update PRODUCT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection