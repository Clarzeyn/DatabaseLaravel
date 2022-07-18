<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($tugas as $navbar)
        <ul>
                @foreach ($navbar['ab'] as $item)
                <li>
                    {{$item }}
                </li>
                @if ($item == 'Berita')
                <ul>
                    @foreach ($navbar['cd'] as $item)
                        <li>
                            {{$item}}
                        </li>
                        @if ($item == 'Olahraga')
                            <ul>
                                @foreach ($navbar['ef'] as $item)
                                    <li>
                                        {{$item}}
                                    </li>
                                
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                    </ul>
                @endif
                @endforeach
        </ul>
    @endforeach
</body>
</html>