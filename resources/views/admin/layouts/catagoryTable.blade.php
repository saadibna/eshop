@extends('admin.layouts.home')

@section('title')
catagory
@endsection

@section('content')
<section class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Catagory Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed ">
                    
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th class="w-25">Description</th>
                      <th>created_at</th>
                      <th>updated_at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($catagory as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->catagory_name}}</td>
                        <td >{{$data->catagory_description}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->updated_at}}</td>
                        <td class="project-actions ">
                         
                          <a class="btn btn-info btn-sm" href="{{route('edit', $data->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{route('delete', $data->id)}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</section>
@endsection