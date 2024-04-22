@foreach($data as $item)
    @isset($row)
        @if($row === $item->id_kelurahan)
            <option selected value="{{ $item->id_kelurahan }}">{{ $item->nama_kelurahan }}</option>
        @endif
    @endisset
    <option value="{{ $item->id_kelurahan }}">{{ $item->nama_kelurahan }}</option>
@endforeach
