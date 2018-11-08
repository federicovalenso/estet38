@extends('admin.index')

@section('content')
<a class="btn btn-primary mt-3" href="{{ route('category.create') }}" role="button">Добавить услугу</a>
@if (count($categories) > 0)
    <table class="table table-responsive-sm table-dark table-hover table-striped my-2">
        <thead class="table-success">
            <tr>
                <th scope="col">Название</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="align-middle">{{ $category->name }}</td>
                    <td class="align-middle"><a class="table-btn table-btn-edit" href="{{ route('category.edit', $category) }}"></td>
                    <td class="align-middle"><a class="table-btn table-btn-delete" href="{{ route('category.destroy', $category) }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endif
@endsection
