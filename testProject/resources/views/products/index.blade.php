@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category-Id</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $products as $product )
                            <tr>
                                <td>{{ $product->name  }} </td>
                                <td>{{ $product->categoryId  }} </td>
                                <td>{{ $product->price  }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
