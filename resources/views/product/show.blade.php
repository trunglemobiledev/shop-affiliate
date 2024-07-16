<div class="container">
    <h1>{{ $product->name }}</h1>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <p><strong>Giá:</strong> {{ number_format($product->price) }} VNĐ</p>
            <p>{{ $product->description }}</p>
            <a href="{{ $product->shopee_link }}" target="_blank" class="btn btn-primary">Mua trên Shopee</a>
        </div>
    </div>
</div>
