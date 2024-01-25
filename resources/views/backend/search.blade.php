@extends ('backend.layouts.app')
@section ('content')

<main class="page-content">

<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Basic Table</h6>
        <div style="text-align: center;">
            <form class="example" action="">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="material-symbols-outlined position-absolute ms-3 translate-middle-y start-0 top-50"></i></button>
            </form>    
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($products)>0)
                            
                        @endif


                        @foreach($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->category->name}}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
</main>
@endsection