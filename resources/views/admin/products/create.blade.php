@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="card" style="width: 36rem;">
                        <div class="card-header">
                            Форма редактирования услуги
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                                @include('admin.products.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
