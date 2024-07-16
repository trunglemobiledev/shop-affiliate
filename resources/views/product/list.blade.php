<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Tối ưu Title Tag --}}
    <title>@yield('title', 'Danh sách sản phẩm - Shop của Trung')</title> 

    {{-- Meta Description --}}
    <meta name="description" content="@yield('description', 'Khám phá danh sách sản phẩm đa dạng với giá cả phải chăng tại Shop của Trung. Mua sắm trực tuyến dễ dàng và an toàn.')"> 

    {{-- Open Graph (Chia sẻ trên mạng xã hội) --}}
    <meta property="og:title" content="@yield('title', 'Danh sách sản phẩm - Shop của Trung')">
    <meta property="og:description" content="@yield('description', 'Khám phá danh sách sản phẩm đa dạng với giá cả phải chăng tại Shop của Trung. Mua sắm trực tuyến dễ dàng và an toàn.')">
    <meta property="og:image" content="@yield('image', asset('images/logo.png'))"> {{-- Hình ảnh đại diện cho trang (thay 'images/logo.png' bằng hình ảnh thật) --}}
    <meta property="og:url" content="{{ request()->url() }}"> {{-- Đường dẫn trang hiện tại --}}
    <meta property="og:type" content="website">

    {{-- Canonical Tag (Tránh trùng lặp nội dung) --}}
    <link rel="canonical" href="{{ request()->url() }}"> 

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: #ee4d2d;">SHOP CỦA TRUNG</h1> 
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm" onclick="window.location.href='{{ $product->shopee_link }}';" style="cursor: pointer;">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #ee4d2d;">{{ $product->name }}</h5>
                            <p class="card-text">{{ number_format($product->price) }} VNĐ</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ $product->shopee_link }}" class="btn btn-primary w-100" style="background-color: #ee4d2d; border-color: #ee4d2d;" target="_blank" rel="nofollow noopener">MUA NGAY</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
