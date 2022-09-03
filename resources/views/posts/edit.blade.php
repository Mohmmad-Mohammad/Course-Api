@extends('layouts.master')
@section('title')
Edit Post
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('edit'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{\session()->get('edit')}}
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
                    @endif


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Post</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('posts.update',[$post->id])}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fs-6 fw-semibold form-label mt-3"><h5 class="required"> title</h5></label>
                                    <input type="text" name="title" value="{{$post->title}}" class="form-control"
                                        required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h5 class="required"> body</h5></label>
                                    <textarea class="form-control" name="body" id="exampleFormControlTextarea1"
                                            rows="3" required>{{$post->body}}</textarea></div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

