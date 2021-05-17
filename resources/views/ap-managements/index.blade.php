@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-3">
            <div class="col-md">
                <h1 class="mb-md-0">{{ __('Ap Managements') }}</h1>
            </div>
            <div class="col-md-auto">
                <button type="button" class="btn btn-primary" crudify-show-modal="{{ route('ap-managements.create') }}">
                    {{ __('Create Ap Management') }}
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush