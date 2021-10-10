@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Generate Bill') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('order.store') }}" method="post">
                            @csrf
                            <div class="row" >
                                <div class="col-md-4">
                                    <label for="customer_name" class="col-form-label">{{ __('Customer Name') }}</label>
                                    <input id="customer_name" type="text" class="form-control" name="customer_name"
                                        placeholder="Customer Name" value="{{ old('customer_name') }}" required
                                        autocomplete="item" autofocus>
                                </div>
                                <div class="col-md-4">
                                    <label for="other_text" class="col-form-label">{{ __('Other Details') }}</label>
                                    <input id="other_text" type="text" placeholder="Other Details Of Customer" class="form-control"
                                        name="other_text" value="{{ old('other_text') }}"  autocomplete="other_text" autofocus>
                                </div>
                                <div class="col-md-4">
                                    <label for="order_summary" class="col-form-label">{{ __('Order Summary') }}</label>
                                    <input id="order_summary" type="text" class="form-control" placeholder="Order Summary" name="order_summary"
                                        value="{{ old('order_summary') }}"  autocomplete="order_summary" autofocus>
                                </div>
                            </div>
                            
                            <div class="row mt-3" id="addhere">
                                <div class="col-md-4">
                                    <label for="item" class="col-form-label">{{ __('Item Name') }}</label>
                                    <input id="item" type="text" class="form-control" name="item"
                                        placeholder="Item Name & Discription" value="{{ old('item') }}" required
                                        autocomplete="item" autofocus>
                                </div>
                                <div class="col-md-4">
                                    <label for="qty" class="col-form-label">{{ __('Quantity') }}</label>
                                    <input id="qty" type="number" min="0"  placeholder="Number Of Quantity" class="form-control"
                                        name="qty" value="{{ old('qty') }}" required autocomplete="qty" autofocus>
                                </div>
                                <input type="hidden" name="order_id" id="order_id" value="0">
                                <div class="col-md-4">
                                    <label for="amount" class="col-form-label">{{ __('Amount') }}</label>
                                    <input id="amount" type="text" class="form-control" placeholder="Amount" name="amount"
                                        value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success float-right m-4">
                                {{ __('Generate Bill') }}
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        document.addEventListener("keydown", function(e) {
            $focused = $(':focus');

            if ($focused.attr('id') == 'amount' && e.keyCode == 9) {
               
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/additem",
                    data: {
                        item: $('#item').val(),
                        qty: $('#qty').val(),
                        amount: $('#amount').val(),
                        order_id:$('#order_id').val(),
                        customer_name:$('#customer_name').val(),
                        other_text:$('#other_text').val(),
                        order_summary:$('#order_summary').val()
                    }
                }).done(function(data) {
                    $("#addhere").html(data);
                }).fail(function(xr, textStatus) {
                    alert(textStatus);
                });
            }

        });
    </script>


@endsection
