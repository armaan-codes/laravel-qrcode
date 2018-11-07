<!-- Qrcode Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Product Name:') !!}
    <p>
        <a href="{!! $transaction->qrcode->product_url !!}">
            <b>{!! $transaction->qrcode->product_name !!}</b>
        </a>
    </p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>${!! $transaction->qrcode->amount !!}</p>
</div>

<!-- Buyer Name Field -->
<div class="form-group">
    {!! Form::label('buyer_name', 'Buyer Name:') !!}
    <p>
        <a href="{{ route('users.show', [ 'id' => $transaction->user->id ]) }}">{!! $transaction->user->name !!}</a> | <a href="mailto:{!! $transaction->user->email !!}">{!! $transaction->user->email !!}</a>
    </p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'QRCode Owner Name:') !!}
    <p>
        <a href="{{ route('users.show', [ 'id' => $transaction->qrcode->user->id ]) }}">
            {!! $transaction->qrcode->user->name !!}
        </a>
    </p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>
        {!! $transaction->status !!}
    </p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $transaction->message !!}</p>
</div>

<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $transaction->payment_method !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transaction->created_at->format('D d, M, Y') !!}</p>
</div>
