@extends('crudify::layouts.modal')

@section('title', __('Ap Management'))
@section('content')
    <div class="modal-body">
        @foreach($apManagement->getFillable() as $fillable)
            <h6 class="font-weight-bold mb-0">{{ Str::title(str_replace('_', ' ', $fillable)) }}</h6>
            <div class="mb-3">
                @if(is_array($apManagement->$fillable))
                    <pre class="mb-0">{{ json_encode($apManagement->$fillable, JSON_PRETTY_PRINT) }}</pre>
                @elseif(in_array($fillable, $apManagement->getDates()))
                    @displayDate($apManagement->$fillable)
                @else
                    {{ $apManagement->$fillable ?? __('N/A') }}
                @endif
            </div>
        @endforeach
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
    </div>
@endsection
