@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts Category</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6 small">

        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new Category</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}"
                                class="text-success text-decoration-none">Detail</a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                class="text-primary text-decoration-none">Edit</a>

                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="text-danger border-0 bg-transparent text-decoration-none"
                                    onclick="return confirm('Are you sure?')">hapus</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
