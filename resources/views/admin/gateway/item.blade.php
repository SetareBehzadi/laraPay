<tr>
    <th scope="row">{{ $gateway->gateway_id }}</th>
    <td>{{ $gateway->plan->gateway_plan_title }}</td>
    <td>{{ $gateway->user->name }}</td>
    <td>{{ $gateway->gateway_title }}</td>
    <td>{{ $gateway->gateway_website }}</td>
    <td>{{ $gateway->gateway_balance }}</td>
    <td>{{ $gateway->gateway_status }}</td>
</tr>