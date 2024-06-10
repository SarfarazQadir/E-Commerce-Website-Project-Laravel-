@extends("./admin/master")
@section("title","show user")
@section("content")
     <!-- Table Start -->
     <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4">All Users</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User Id</th>
                                <th scope="col">User Name</th>
                                <th scope="col">User Email</th>
                                <th scope="col">User Password</th>
                                <th scope="col">Action</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $user as $p)
                                
                       
                            <tr>
                            
                                <td>{{ $p->id }}</td> 
                                <td>{{ $p->name }}</td> 
                                <td>{{ $p->email }}</td> 
                                <td>{{ $p->password}}</td> 
                                <td><a href="{{ route('delete', $p->id) }}" class="btn btn-danger">delete</a>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection