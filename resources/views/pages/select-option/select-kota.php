@foreach($data as $item)
    @isset($row)
        @if($row === $item->id_kota)
            <option selected value="{{ $item->id_kota }}">{{ $item->nama_kota }}</option>
        @endif
    @endisset
    <option value="{{ $item->id_kota }}">{{ $item->nama_kota }}</option>
@endforeach
