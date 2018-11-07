<table class="table table-responsive" id="transactions-table">
    <thead>
        <tr>
            <th>Qrcode</th>
            <th>Buyer</th>
            <th>Payment Method</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>
                <a href="{!! route('transactions.show', [$transaction->id]) !!}">
                    <b>{!! $transaction->qrcode->product_name !!}</b>
                </a>
            </td>
            <td>{!! $transaction->user->name !!}</td>
            <td>{!! $transaction->payment_method !!}</td>
            <td>${!! $transaction->qrcode->amount !!}</td>
            <td>{!! $transaction->status !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>