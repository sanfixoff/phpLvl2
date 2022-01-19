@extends('layouts.main ')

@section('title', 'Orders')

@section('content')
    <style>
        .order-item {
            margin-bottom: 40px;
            border: 1px solid;
            width: 100%;
        }
        .order-panel {
            margin-top: 150px;
        }
        .product-info {
            width: 25%;
        }
        td {
            padding: 0 20px;
        }
    </style>
    <main class="order-panel">
        @foreach($orders as $order)
            {{--        @dd($order->cart_products)--}}
            <table class="order-item">
                <tr>
                    <td>Имя пользователя</td>
                    <td>Номер пользователя</td>
                    <td></td>
                    <td>Итоговая стоимость</td>
                    <td>Дата создания</td>
                </tr>
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->number_phone}}</td>
                    <td>
                        <table>
                            <tr>
                                <td class="product-info">Название товара</td>
                                <td class="product-info">Цена товара</td>
                                <td class="product-info">Кол-во товара</td>
                            </tr>
                            @foreach($order->cart_products as $item)
                                <tr>
                                    <td class="product-info">{{$item['name']}}</td>
                                    <td class="product-info">${{$item['price']}}</td>
                                    <td class="product-info">{{$item['quantity']}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                    <td>${{$item['price'] * $item['quantity']}}</td>
                    <td>{{$order->created_at}}</td>
                </tr>
            </table>
        @endforeach
    </main>
@endsection
