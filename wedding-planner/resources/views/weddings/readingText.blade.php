<!DOCTYPE html>
<html lang="en">

<head>
    <title>St Julianas Wedding Planner</title>

    <!-- CSS And JavaScript -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
</head>


<body>
    <script>
        function myprint() {
            window.print();
        }

        function goBack() {
            window.history.back();
        }
    </script>
    <div class="container">
        <br />
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-center noborder">
                    <div class="card-body">
                        <div>
                            @foreach ($firstReadings as $firstReading)
                            @if($firstReading->Option == Request::get('reading'))

                            <h2>{{$firstReading->Option}} {{$firstReading->BibleVerse}}</h2>
                            <h3>{{$firstReading->Title}}</h3>
                            <div class="row text-left">
                                <div class="col-sm-12">
                                    {{$firstReading->Text}}
                                </div>
                            </div>

                            @endif
                            @endforeach

                            @foreach ($secondReadings as $secondReading)
                            @if($secondReading->Option == Request::get('reading'))

                            <h2>{{$secondReading->Option}} {{$secondReading->BibleVerse}}</h2>
                            <h3>{{$secondReading->Title}}</h3>
                            <div class="row text-left">
                                <div class="col-sm-12">
                                    {{$secondReading->Text}}
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach ($gospelReadings as $gospelReading)
                            @if($gospelReading->Option == Request::get('reading'))

                            <h2>{{$gospelReading->Option}} {{$gospelReading->BibleVerse}}</h2>
                            <h3>{{$gospelReading->Title}}</h3>
                            <div class="row text-left">
                                <div class="col-sm-12">
                                    {{$gospelReading->Text}}
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-secondary" onclick="goBack()">Go Back</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary" onclick="print()">Print this page</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>