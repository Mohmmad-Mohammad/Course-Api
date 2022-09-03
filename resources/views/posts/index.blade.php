@extends('layouts.master')

@section('title')
     Posts
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->


        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0 pt-10">
                    <h3 class="card-label fw-bold fs-3 mb-1">Post List</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body">

                    @if(session()->has('delete'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{\session()->get('delete')}}
                            <button class="btn btn-sm btn-icon btn-active-color-primary" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1" aria-hidden="true">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                            </button>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <a href="{{route('posts.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add Post</a><br><br>
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Created_at</th>
                            <th>Processes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card{{$post->id}}">Delete</button>
                                </td>
                            </tr>
                            @include('posts.destroy')
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
