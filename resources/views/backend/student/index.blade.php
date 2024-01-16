@extends ('backend.layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Catagory Table</h6>
            <hr>
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
                                <td>{{$item->tags}}</td>
                                <td>{{$item->availability}}</td>
                                <td>{{$item->catagory->name}}</td>
                                <td>{{$item->image}}</td>
                                <td>
                                    <a href="catagory/edit/{{$item['id']}}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{URL('catagory/delete/$item->id')}}" class="btn btn-danger btn-sm">Delete</a>
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