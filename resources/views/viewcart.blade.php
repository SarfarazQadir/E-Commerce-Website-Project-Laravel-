@extends("main")
@section("viewcart")
<div class="container">
    <div class="row">
        <div class="col-12">
    <table border="" class="table">
        <thead>
        <tr>
            <th scope="col">product name</th>
            <th scope="col">product des</th>
            <th scope="col">product price</th>
            <th scope="col">product qty</th>
            <th scope="col">product image</th>
            <th scope="col">product total</th>
        </tr>
        </thead>
        <tbody>
       @php
            $totalprice =0;
       @endphp
        @foreach ($products as $p)
            
       
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->des }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->qty }}</td>
            <td> <img src="{{ asset('product/' . $p->image ) }}" alt="" width="100px" height="100px" ></td>
            <td>{{ $p->qty *  $p->price  }}</td>
        </tr>
        @php
        $totalprice += $p->qty *  $p->price
                @endphp
             
                    <td>{{ $totalprice }}</td>
           
        @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection