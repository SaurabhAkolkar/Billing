<div class="col-md-4">
    <label for="item" class="col-form-label">{{ __('Item Name') }}</label>
    <input id="item" type="text" class="form-control" name="item" placeholder="Item Name & Discription" value="{{ old('item') }}" required autocomplete="item" autofocus>
</div>
<div class="col-md-4">
    <label for="qty" class="col-form-label">{{ __('Quantity') }}</label>
    <input id="qty" type="number" min="0"  placeholder="Number Of Quantity" class="form-control" name="qty" value="{{ old('qty') }}" required  autocomplete="qty" autofocus>
</div>
<input type="hidden" name="order_id" id="order_id" value="{{ $order_id }}">
<div class="col-md-4">
    <label for="amount" class="col-form-label">{{ __('Amount') }}</label>
    <input id="amount" type="text" class="form-control" placeholder="Amount" name="amount" value="{{ old('amount') }}" required  autocomplete="amount" autofocus>
</div>  