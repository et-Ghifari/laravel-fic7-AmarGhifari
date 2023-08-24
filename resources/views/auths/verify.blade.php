@extends('layouts.auth')

@section('title', 'VeriFy Email')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Please check your email for verification</h4>
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="badges" align="center">
                <span class="badge badge-success">Succes! Verification Email have been send</span>
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Resend Verification Email
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
