<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="height: 100%">
    <div style="display:flex; justify-content: center; alig-items: center">
        @if ($type === 'pdf')
            {{-- <embed type="application/pdf" src="{{ $base64 }}" /> --}}
            <iframe src="{{ $base64 }}" width="100%" style="height: 100vh"></iframe>
        @else
            <img src="{{ $base64 }}" style="max-width: 70%;height: auto" alt="">
        @endif
    </div>
</body>
</html>