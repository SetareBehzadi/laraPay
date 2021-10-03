<tr>
    <th scope="row">{{ $transaction->bank_transaction_id }}</th>
    <td>{{ $transaction->bank_transaction_bank_id }}</td>
    <td>{{ $transaction->bank_transaction_gateway_transaction_id }}</td>
    <td>{{ $transaction->bank_transaction_res_number }}</td>
    <td>{{ $transaction->bank_transaction_ref_number }}</td>
    <td>{{ $transaction->bank_transaction_amount }}</td>
    <td>{{ $transaction->bank_transaction_card_number }}</td>
    <td>{{ $transaction->bank_transaction_status }}</td>
    <td>{{ $transaction->created_at }}</td>
    <td>{{ $transaction->updated_at }}</td>
</tr>