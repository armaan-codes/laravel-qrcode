<div class="col-md-6">

    <!-- Product Name Field -->
    <div class="form-group">
        <h2>
            <a href="http://{!! $qrcode->product_url !!}" target="_blank">
                {!! $qrcode->product_name !!}
            </a>

            @if(isset($qrcode->company_name))
                <br>
                <small>{!! $qrcode->company_name !!}</small>
            @endif
        </h2>
    </div>

    <!-- Amount Field -->
    <div class="form-group">
        <h4><b>Amount: ${!! $qrcode->amount !!}</b></h4>
    </div>

    <hr>

    @if($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
    
    <!-- User Id Field -->
    <div class="form-group">
        {!! Form::label('user_id', 'User Name:') !!}
        <p>{!! $qrcode->user_id !!}</p>
    </div>

    @endif

    <!-- Website Field -->
    <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{!! $qrcode->website !!}</p>
    </div>

    <!-- Callback Url Field -->
    <div class="form-group">
        {!! Form::label('callback_url', 'Callback Url:') !!}
        <p>{!! $qrcode->callback_url !!}</p>
    </div>

    <!-- Status Field -->
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>
            @if($qrcode->status)
                Active
            @else
                Inactive
            @endif
        </p>
    </div>
</div>
<div class="col-md-5 pull-right">
    
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan QRCode and Pay with our App:') !!}
        <p>
            <img src="{!! asset($qrcode->qrcode_path) !!}" width="100">
        </p>
    </div>

</div>