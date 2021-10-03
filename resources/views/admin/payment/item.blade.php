<tr>
    <th scope="row">{{ $payment->payment_id }}</th>
    <td>{{ $payment->payment_gateway }}</td>
    <td>{{ $payment->payment_bank_transaction_id }}</td>
    <td>{{ $payment->payment_amount }}</td>
    <td>{{ $payment->payment_res_num }}</td>
    <td>{{ $payment->payment_ref_num }}</td>
    <td>{{ $payment->payment_card_number }}</td>
    <td>{{ $payment->payment_status }}</td>
    <td>{{ $payment->payment_gateway_callback_state }}</td>
    <td>{{ $payment->created_at }}</td>
    <td>{{ $payment->updated_at }}</td>
</tr>