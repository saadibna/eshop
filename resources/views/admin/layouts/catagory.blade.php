@extends('admin.layouts.home')

@section('title')
catagory
@endsection

@section('content')

<section class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                        <!-- general form elements -->
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Catagory</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('insert')}}" method="post">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Catagory Name</label>
                                <input type="text" class="form-control" id="exampleInputName" name="catagory_name" placeholder="Enter Catagory Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDes">Catagory description</label>
                                <input type="text" class="form-control" id="exampleInputDes" name="catagory_description" placeholder="details">
                            </div>
                            
                            
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                        <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection