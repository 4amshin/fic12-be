@extends('layout.app_template')

@section('page-title', 'Order Detail')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <div class="flex items-center gap-3 mb-4">
                <h6 class="text-15 grow">{{ $order->kasir->name }} (Kasir)</h6>
                <a href="#!" class="text-blue-500 underline shrink-0">{{ \Carbon\Carbon::parse($order->transaction_time)->format('d M Y - h:i A') }}</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <tbody>
                        @foreach ($orderItems as $item)
                            <tr>
                                <td
                                    class="px-3.5 py-4 border-b border-dashed first:pl-0 last:pr-0 border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex items-center justify-center rounded-md size-12 bg-slate-100 shrink-0">
                                            <img src="{{ $item->product->image ? '/storage/products/' . $item->product->image : asset('assets/images/delivery-1.png') }}" alt="" class="h-8">
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1 text-15"><a href="apps-ecommerce-product-overview.html"
                                                    class="transition-all duration-300 ease-linear hover:text-custom-500">{{ $item->product->name }}</a></h6>
                                            <p class="text-slate-500 dark:text-zink-200">Rp {{ number_format($item->product->price, 0, ',', '.') }} x {{ $item->quantity }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-4 border-b border-dashed first:pl-0 last:pr-0 border-slate-200 dark:border-zink-500 ltr:text-right rtl:text-left">
                                    Rp {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach

                        <tr class="font-semibold">
                            <td class="px-3.5 pt-3 first:pl-0 last:pr-0 text-slate-500 dark:text-zink-200">
                                Total Price
                            </td>
                            <td class="px-3.5 pt-3 first:pl-0 last:pr-0 ltr:text-right rtl:text-left">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
