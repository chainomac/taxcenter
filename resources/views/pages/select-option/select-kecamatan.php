@foreach($data as $item)
    @isset($row)
        @if($row === $item->id_kecamatan)
            <option selected value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
        @endif
    @endisset
    <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
@endforeach
