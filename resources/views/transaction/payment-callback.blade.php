<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirect To Merchant</title>
</head>
<body>
<form action="{{ $callbackUrl }}" id="callbackForm">
    <input type="hidden" name="transactionKey" value="{{ $transactionKey }}">
    <input type="hidden" name="amount" value="{{ $amount }}">
    <input type="hidden" name="resNumber" value="{{ $resNumber }}">
    <input type="hidden" name="status" value="{{ $status }}">
</form>
<script>
    document.getElementById('callbackForm').submit();
</script>
</body>
</html>