@extends('crudify::layouts.modal')

@section('title', __('Vehicle'))
@section('content')
    <div class="modal-body">
        @foreach($vehicle->getFillable() as $fillable)
            <h6 class="font-weight-bold mb-0">{{ Str::title(str_replace('_', ' ', $fillable)) }}</h6>
            <div class="mb-3">
                @if(is_array($vehicle->$fillable))
                    <pre class="mb-0">{{ json_encode($vehicle->$fillable, JSON_PRETTY_PRINT) }}</pre>
                @elseif(in_array($fillable, $vehicle->getDates()))
                    @displayDate($vehicle->$fillable)
                @else
                    {{ $vehicle->$fillable ?? __('N/A') }}
                @endif
            </div>
        @endforeach
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
    </div>
@endsection
