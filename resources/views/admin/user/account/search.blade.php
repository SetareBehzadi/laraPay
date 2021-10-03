@foreach($results as $item)
    <option value="{{ $item->id }}">{{ $item->text }}</option>
@endforeach