@extends('crudify::layouts.modal')

@section('title', __('Create Ap Management'))
@section('content')
    <x-form action="{{ route('ap-managements.create') }}" crudify-form>
        <div class="modal-body">
            @include('ap-managements.form')
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </x-form>
@endsection
