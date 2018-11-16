@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('verify.email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('verify.new_link') }}
                        </div>
                    @endif

                    {{ __('verify.before_procedure') }}
                    {{ __('verify.not_received') }}, <a href="{{ route('verification.resend') }}">{{ __('verify.another_request') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
