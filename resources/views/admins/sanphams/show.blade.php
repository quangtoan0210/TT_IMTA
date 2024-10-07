@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    
    <div class="card">
        <div class="card-body">
            <h2>{{ $sanPham->ten_san_pham }}</h2>
            <p><strong>Danh mục:</strong> {{ $sanPham->danhMuc->ten_danh_muc }}</p>
            <p><strong>Giá:</strong> {{ number_format($sanPham->gia, 0, ',', '.') }} VND</p>
            <p><strong>Mô tả ngắn:</strong> {{ $sanPham->mo_ta_ngan }}</p>
            <p><strong>Nội dung:</strong>   {!! $sanPham->noi_dung !!}</p>

            <!-- Display the main image -->
            @if($sanPham->hinh_anh)
                <div>
                    <img src="{{ Storage::url($sanPham->hinh_anh) }}" alt="{{ $sanPham->ten_san_pham }}" class="img-fluid" style="max-width: 300px;">
                </div>
            @else
                <p>No image available</p>
            @endif

            <!-- Display the album images if available -->
            @if($sanPham->hinhAnhSanPham->isNotEmpty())
                <h3>Album Ảnh</h3>
                <div class="row">
                    @foreach($sanPham->hinhAnhSanPham as $image)
                        <div class="col-md-3">
                            <img src="{{ Storage::url($image->hinh_anh) }}" alt="Album image" class="img-fluid">
                        </div>
                    @endforeach
                </div>
            @else
                <p>No album images available</p>
            @endif

            <a href="{{ route('admins.sanphams.index') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
        </div>
    </div>
</div>
@endsection
