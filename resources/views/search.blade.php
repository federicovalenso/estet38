@extends('layouts.app')

@section('content')
    @if (count($products) > 0)
        <table class="table table-responsive-sm table-dark table-hover table-striped my-2">
            <thead class="table-success">
                <tr>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="align-middle">{{ $product->name }}</td>
                        <td class="align-middle">{{ $product->category->name }}</td>
                        <td class="align-middle">{{ $product->description }}</td>
                        <td class="align-middle">{{ $product->price }}</td>
                        <td class="align-middle"><img src="{{ $product->image }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{ $products->links() }}
@endsection
