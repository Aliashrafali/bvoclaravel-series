@extends('admin.layouts.app')
@section('content')
   <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="form p-3">
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name <sup><span style="color: red;">*</span></sup></label>
                                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                                        <p id="namevalid"><i>Enter Name !</i></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Mobile <sup><span style="color: red;">*</span></sup></label>
                                        <input type="text" name="mobile" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="Enter Your Mobile" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Class <sup><span style="color: red;">*</span></sup></label>
                                        <input type="text" name="class" class="form-control" id="class" aria-describedby="emailHelp" placeholder="Enter Class" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email Id <sup><span style="color: red;">*</span></sup></label>
                                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Session <sup><span style="color: red;">*</span></sup></label>
                                        <input type="text" name="session" class="form-control" id="session" aria-describedby="emailHelp" placeholder="Enter Session">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div style="display: block; float: right;">
                                        <button type="submit" onclick="return valiDate()" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection
@section('script')
   <script src="{{url('js/custom.js')}}"></script>
@endsection
