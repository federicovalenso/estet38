@extends('admin.index')

@section('content')
<a class="btn btn-primary mt-3" href="{{ route('productcategory.create') }}" role="button">Добавить категорию услуг</a>
@if (count($productCategories ) > 0)
    <table class="table table-responsive-sm table-dark table-hover table-striped my-2">
        <thead class="table-success">
            <tr>
                <th scope="col">Название</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productCategories as $productcategory)
                <tr>
                    <td class="align-middle">{{ $productcategory->name }}</td>
                    <td class="align-middle"><a class="table-btn table-btn-edit" href="{{ route('productcategory.edit', $productcategory) }}"></td>
                    <td class="align-middle"><a class="table-btn table-btn-delete" href="{{ route('productcategory.destroy', $productcategory) }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $productCategories->links() }}
@endif
@endsection
