@extends('admin.index')

@section('content')
<a class="btn btn-primary mt-3" href="{{ route('product.create') }}" role="button">Добавить услугу</a>
@if (count($products) > 0)
    <table class="table table-responsive-sm table-dark table-hover table-striped my-2">
        <thead class="table-success">
            <tr>
                <th scope="col">Название</th>
                <th scope="col">Цена</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="align-middle">{{ $product->name }}</td>
                    <td class="align-middle">{{ $product->price }}</td>
                    <td class="align-middle"><a class="table-btn table-btn-edit" href="{{ route('product.edit', $product) }}"></td>
                    <td class="align-middle"><a class="table-btn table-btn-delete" href="{{ route('product.destroy', $product) }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endif
@endsection
