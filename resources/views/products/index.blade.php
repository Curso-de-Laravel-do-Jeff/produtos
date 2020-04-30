@extends('templates.app')

@section('page-title')
    Produtos
@stop

@section('content')
    <h1 class="text-center">Products</h1>
    <hr/>

    <table class="table table-sriped table hover">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Price (U$)</th>
                <th class="text-center">Category</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td class="text-center">{{ $product->name }}</td>
                    <td class="text-center">{{ StringHelper::formatMoney($product->price) }}</td>
                    <td class="text-center">{{ $product->category->category }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Não Há Dados</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
@stop
