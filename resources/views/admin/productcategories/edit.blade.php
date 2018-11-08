@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="card" style="width: 36rem;">
                        <div class="card-header">
                            Форма редактирования категории
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('productcategory.update', $productcategory) }}">
                                @csrf
                                @method('PATCH')
                                @include('admin.productcategories.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
