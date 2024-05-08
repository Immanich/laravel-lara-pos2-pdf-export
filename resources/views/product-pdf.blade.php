@extends('layout')

@section('content')
    <div class="container">
        <div class="heading">
            <h1>PRODUCT PDF</h1>
            <div class="wrapper">
                <table>
                    <thead>
                        <tr>
                            <td>NAME</td>
                            <td>CATEGORY ID</td>
                            <td>PRICE</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $p)
                        <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->category_id}}</td>
                            <td>{{$p->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection