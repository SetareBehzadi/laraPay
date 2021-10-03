<tr>
    <td scope="row">{{ $report->gateway_report_id }}</td>
    <td>{{ $report->gateway->gateway_title. '/ '.$report->gateway->user->name  }}</td>
    <td>{{ $report->gateway_report_date }}</td>
    <td>{{ $report->gateway_report_deposit }}</td>
    <td>{{ $report->gateway_report_withdrawal }}</td>
</tr>