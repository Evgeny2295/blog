@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3 m-0">{{$tag->title}}</h1>
                    <a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-primary">Редактировать</a>
                    <form action="{{route('admin.tags.delete',$tag->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Удалить</button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.tags.index')}}">Теги</a></li>
                        <li class="breadcrumb-item active">{{$tag->title}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$tag->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$tag->title}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

                <!-- ./col -->

            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
