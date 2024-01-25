@extends ('backend.layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Catagory Table</h6>
            <hr>
            @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Class</th>
                                <th scope="col">tags</th>
                                <th scope="col">Availability</th>
                                <th scope="col">Catagory</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                <th scope="col">Action</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach($peoducts as $item)

                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    @if(is_array($item->tags))
                                    <ul>
                                        @foreach($item->tags as $tag)
                                        <li>{{ $tag }}</li>
                                        @endforeach
                                    </ul>
                                    @else
                                    {{ $item->tags }}
                                    @endif
                                </td>

                                <td>{{$item->availability}}</td>
                                <td>{{$item->catagory->name}}</td>
                                <td>{{$item->image}}</td>
                                <td>
                                    <a href="{{ route('student.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('student.delete', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <p class="btn-holder"><a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

</main>
@endsection