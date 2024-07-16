@vite('resources/css/app.scss')

<div class="container">

    <button class="btn btn-outline btn-primary">
        Primary
       </button>
       <button class="btn btn-outline btn-success">
        Success
       </button>
       <button class="btn btn-outline btn-info">
        Info
       </button>
       <button class="btn btn-outline btn-danger">
        Danger
       </button>
       <button class="btn btn-outline btn-warning">
        Warning
       </button>
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
