@extends('layouts.master')
@section('content')

<form action="" method="">
    <input type="text" name="purchase_id" required>
    <input type="hidden" name="supplierId" value="{{$id}}">
    <input type="number" name="qty" id="qty" placeholder="contoh: 10" min="1">
    {{-- item id--}}
    <div class="form-group">
        <label for="is_active">Input Id barang<span class="text-danger">*</span></label>
        <select class="form-control" name="item_id" id="item_id" required>
            @foreach ($item as $i)
                <option value="{{$item->id}}">
                </option>
            @endforeach
           
        </select>
    </div>
   
</form>
@push('scripts')
        <script>
            $('.table').DataTable();
        </script>
@endpush
@endsection