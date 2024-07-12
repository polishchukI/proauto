@extends('inventory.layouts.app', ['page' => __('inventory.client_order_manage'), 'pageSlug' => 'client_orders', 'section' => 'documents', 'search' => 'client_orders'])
@section('content')
@include('inventory.alerts.success')
@include('inventory.alerts.error')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">{{ __('inventory.client_order') }} №{{ $client_order->id }} {{ __('inventory.from_date') }} {{ date('d-m-y', strtotime($client_order->created_at)) }}
                                @if (!$client_order->finalized_at)
                                    <span class="text-danger"><i class="far fa-minus-square"></i></span>
                                @else
                                    <span class="text-success"><i class="far fa-check-square"></i></span>
                                @endif
                            </h4>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <!--finalize-->
                            <div class="col-1">                              
                                <button type="button" class="btn btn-success btn-simple btn-sm @if ($client_order->finalized_at) disabled @endif" onclick="confirm('ATTENTION: At the end of this client_order you will not be able to load more products in it.') ? window.location.replace('{{ route('client_orders.finalize', $client_order) }}') : ''">
                                    <i class="fas fa-handshake"></i>
                                </button>
                            </div>
                            <!--pay-->
                            <div class="col-1">
                                <form action="{{ route('client_orders.pay', $client_order) }}" method="get" class="d-inline">
                                    <button type="submit" class="btn btn-pay btn-simple btn-sm" data-toggle="tooltip" title="{{ __('inventory.pay') }}"><i class="fas fa-dollar-sign"></i></button>
                                </form>
                            </div>
                            <!--to provider-->
                            <div class="col-1">
                                <a href="{{ route('client_orders.to_provider', $client_order) }}" class="btn btn-simple btn-sm @if(!$client_order->finalized_at) disabled @endif" data-toggle="tooltip" data-placement="bottom" title="Order to provider" target="_blank">
                                    <i class="fas fa-file-upload"></i>
                                </a>
                            </div>
                            <!--sale-->
                            <div class="col-1">
                                <a href="#" onclick="client_order_sale('{{$client_order->id}}');" class="btn btn-simple btn-sm @if(!$client_order->finalized_at) disabled @endif" data-toggle="tooltip" data-placement="bottom" title="Sale">
                                    <i class="fas fa-file-invoice"></i>
                                </a>
                            </div>
                            <!--print-->
                            <div class="col-1">
                                <form action="{{ route('client_orders.print', $client_order) }}" method="get" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-print btn-simple btn-sm" data-toggle="tooltip" title="{{ __('inventory.print') }}"><i class="fas fa-print"></i></button>
                                </form>
                            </div>
                            <!--delete-->
                            <div class="col-1">
                                <form action="{{ route('client_orders.destroy', $client_order) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-delete btn-simple btn-sm @if ($client_order->finalized_at) disabled @endif" data-toggle="tooltip" title="{{ __('inventory.delete_document') }}"><i class="fas fa-times"></i></button>
                                </form>
                            </div>
                            <!--index-->
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <!--index-->
                            <div class="col-1">
                                <a class="btn btn-back btn-simple btn-sm" href="{{ route('client_orders.index') }}" data-toggle="tooltip" title="Back to list"><i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <input type="hidden" id="is_finalized" name="is_finalized" value="{{ $client_order->finalized_at }}">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">{{ __('inventory.warehouse') }}</div><div class="col-md-9">{{ $client_order->warehouse->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">{{ __('inventory.user') }}</div><div class="col-md-9">{{ $client_order->user->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">{{ __('inventory.client') }}</div><div class="col-md-9"><a href="{{ route('clients.show', $client_order->client) }}">{{ $client_order->client->name }}</a></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">{{ __('inventory.comment') }}</div><div class="col-md-9">{{ $client_order->comment }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if($client_order->reference_type == "admincart")
                            <div class="row text-success">
                                <div class="col-md-3">{{ __('inventory.reference_doc') }}</div>
                                <div class="col-md-9">
                                    <a href="{{ route('admincarts.show', $client_order->reference_id) }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        {{ __('inventory.admincart') }} №{{ $client_order->reference_id }} {{ __('inventory.from_date') }} {{ date('d-m-y', strtotime($client_order->created_at)) }}
                                    </a>
                                </div>
                            </div>
                            @endif
                            @if($client_order->reference_type == "online_order")
                            <div class="row text-danger">
                                <div class="col-md-3">{{ __('inventory.online_order') }} №{{ $online_order->reference_id }} {{ __('inventory.from_date') }} {{ date('d-m-y', strtotime($client_order->created_at)) }}</div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- products -->
<div class="row">
    <div class="col-12">
        <div class="card" style="height:500px;position:relative;">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">{{ __('inventory.products') }}</h4>
                    </div>
                    <div class="col-6">
                        <div class="row text-right">
                            <div class="col-1">
                                <button type="button" class="btn btn-simple btn-sm btn-selector @if($client_order->finalized_at) disabled @endif" data-toggle="modal" data-target="#singleProduct"><i class="fas fa-level-down-alt"></i></button>
                            </div>
                            <div class="col-1">
                                 <a class="btn btn-selector btn-simple btn-sm @if($client_order->finalized_at) disabled @endif" href="{{ route('client_orders.product.selector', $client_order) }}" data-toggle="tooltip" title="{{ __('inventory.product_selector') }}"><i class="fas fa-list-ul"></i></a>                           
                            </div>
                            <div class="col-1">
                                <a class="btn btn-delete btn-simple btn-sm @if($client_order->finalized_at) disabled @endif" href="{{ route('client_orders.product.clear', $client_order) }}" data-toggle="tooltip" title="{{ __('inventory.clear_table') }}"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('inventory.client_orders.products_table')
        </div>
    </div>
</div>

<!-- document footer -->
<div class="row text-info">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-3"><b>{{ __('inventory.comment') }}</b></div>
                            <div class="col-md-9">{{ $client_order->comment }}</div>
                        </div>
                        <div class="row">
                        @if($client_order->client->comment)
                            <div class="col-md-3"><b>{{ __('inventory.clientComment') }}</b></div>
                            <div class="col-md-9">{{ $client_order->client->comment }}</div>
                            @endif
                        </div>                        
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-9"><b>{{ __('inventory.products') }} / {{ __('inventory.total_quantity') }}</b></div>
                            <div class="col-3"><span name="docCount">{{ number_format($client_order->docCount ?? 0, 2)  }}</span> / <span name="docQuantity">{{ number_format($client_order->docQuantity ?? 0, 2) }}</span></div>
                        </div>
                        <div class="row">
                            <div class="col-9"><b>{{ __('inventory.total_cost') }}</b></div>
                            <div class="col-3"><span name="docTotal">{{ number_format($client_order->docTotal ?? 0, 2) }}</span> ({{ $client_order->currency }})</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <Modal> -->
<div class="modal modal-black fade show" id="singleProduct" tabindex="-1" role="dialog" aria-labelledby="singleProductLabel" aria-hidden="true">
    <form id="client_order-form-single-product-add" method="POST" action="{{ route('client_orders.add.single.product.store') }}" style="width:100%;">
        <div class="addproduct modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">{{ __('modal.add_single_product') }}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="hidden" name="client_order_id" value="{{ $client_order->id }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group{{ $errors->has('singleProduct') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="productLive">{{ __('modal.products') }}</label>
                                <select name="productLive" id="productLive">
                                    <option value="">{{ __('modal.not_specified') }}</option>
                                </select>
                                @include('inventory.alerts.feedback', ['field' => 'product'])
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="quantity" class="col-form-label">{{ __('modal.quantity') }}:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="price" class="col-form-label">{{ __('modal.price') }}:</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="client_order-single-product-add" type="button" class="btn btn-sm btn-simple btn-success">{{ __('modal.add') }}</button>
                    <button type="button" class="btn btn-sm btn-simple btn-secondary" data-dismiss="modal">{{ __('modal.close') }}</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- <Modal> -->
@endsection

@push('js')
<script defer>
document.addEventListener("DOMContentLoaded", () => 
{
    const productLive = new SlimSelect({
        select: '#productLive',
        placeholder: '{{ __('inventory.search_product') }}',
        searchingText: '{{ __('inventory.search') }}',
        ajax(search, callback) {
            if (search.length < 3)
            {
                callback('Need 3 characters')
                return
            }

            fetch('/productLiveSearch', {
                method: 'POST',
                // data: {productLive:productLive},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    productLive:search,
                }),
            })
            
            .then(function (response) {
                return response.json()
            })
            .then(function(json)
            {
                let data = []
                for(let i = 0; i < json.length; i++)
                {
                    data.push({value: json[i].id, text: json[i].full_name})
                }

                callback(data)
            })
            .catch(function(error)
            {
                callback(false)
            })
        }
    })
    
});
</script>
@endpush
