<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: 14pt;
        }
    </style>
</head>

<body>
    @extends('layouts.helloapp')

    @section('title', 'Index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        <p>必要なだけ記述できます。</p>
    @endsection

    @section('footer')
        copyright 2020 tuyano
    @endsection
</body>

</html>
