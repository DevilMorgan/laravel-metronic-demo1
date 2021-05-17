@extends('crudify::layouts.modal')

@section('title', __('Edit Ap Management'))
@section('content')
    <x-form action="{{ route('ap-managements.edit', $apManagement->id) }}" method="patch" crudify-form>
        <div class="modal-body">
            @bind($apManagement)
                @include('ap-managements.form')
            @endbind
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </x-form>
@endsection
