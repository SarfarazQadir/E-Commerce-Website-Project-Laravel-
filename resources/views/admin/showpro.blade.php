@extends("./admin/master")
@section("title","show product")
@section("content")
     <!-- Table Start -->
     <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4">   SHOW PRODUCT</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product name</th>
                                <th scope="col">Product des</th>
                                <th scope="col">Product price</th>
                                <th scope="col">Product qty</th>
                                <th scope="col">Product image</th>
                                <th scope="col">Product status</th>
                                <th scope="col">Action</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $product as $p)
                                
                       
                            <tr>
                            
                                <td>{{ $p->name }}</td> 
                                <td>{{ $p->des }}</td> 
                                <td>{{ $p->price }}</td> 
                                <td>{{ $p->qty }}</td> 
                                <td>
                                    <img src="{{ asset('product/' . $p->image ) }}" alt="" width="100px" height="100px" style="border-radius: 50%">
                                    
                                    
                                </td> 
                                <td><a href="{{ route('stat',$p->id) }}" class="btn btn-{{ $p->status ? "success": "danger" }}">{{ $p->status? "enable": "disable" }}</a></td> 
                                <td><a href="{{ route('des', $p->id) }}" class="btn btn-danger">delete</a>
                                    <a href="{{ route('edi', $p->id) }}" class="btn btn-warning mx-2">update</a></td> 
                            
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection