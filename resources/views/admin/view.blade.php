@extends('admin.layouts.app')
@section('content')
   <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="form p-3">
                        <div class="table-responsive">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Class</th>
                                        <th>Session</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->mobile}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->class}}</td>
                                            <td>{{$item->session}}</td>
                                            <td>
                                                <a href=""><span class="badge rounded-pill text-bg-primary">Edit</span></a>
                                                <a href=""><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection
@section('script')
   <script src="{{url('js/custom.js')}}"></script>
@endsection
