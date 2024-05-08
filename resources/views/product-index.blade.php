@extends('layout')
    @php
        use SimpleSoftwareIO\QrCode\Facades\QrCode;
    @endphp
@section('content')
    <div class="container">
        <div class="heading flex">
            <h1 class="title flex-1 text-2xl">PRODUCTS</h1>
            <a href="/product-pdf/export" target="_blank" class="py-3 px-4 bg-green-200">EXPORT</a>
        </div>
        <div class="wrapper mx-auto">
            <div class="content-wrapper grid grid-cols-3 gap-4">
                @foreach ($product as $p)
                    <div class="p-8 border border-black border-solid my-4 shadow-md bg-slate-200">
                        <div class="qrcode">
                            {!! QrCode::size(230)->encoding('UTF-8')->generate(
                                'Product ID: '.$p->id."\n".
                                'Product Name: '.$p->name."\n".
                                'Category ID'.$p->category_id."\n".
                                'Price: ₱'.$p->price) !!}
                                {{-- {!! QrCode::size(230)->generate(
                                    'Product ID: ' . $p->id . "\n" . 
                                    'Product Name: ' . $p->name . "\n" . 
                                    'Category ID: ' . $p->category_id . "\n" . 
                                    'Price: ' . $p->price
                                ) !!} --}}
                        </div>
                        <div>Name: {{$p->name}}</div>
                        <div>Category ID: {{$p->category_id}}</div>
                        <div>Price: {{$p->price}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection