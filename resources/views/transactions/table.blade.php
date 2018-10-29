<table class="table table-responsive" id="transactions-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Qrcode Id</th>
        <th>Status</th>
        <th>Message</th>
        <th>Payment Method</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{!! $transaction->user_id !!}</td>
            <td>{!! $transaction->qrcode_id !!}</td>
            <td>{!! $transaction->status !!}</td>
            <td>{!! $transaction->message !!}</td>
            <td>{!! $transaction->payment_method !!}</td>
            <td>
                {!! Form::open(['route' => ['transactions.destroy', $transaction->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transactions.show', [$transaction->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('transactions.edit', [$transaction->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>