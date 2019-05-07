<script>
    function getFirstReading() {
        var reading = document.getElementById("firstReading").value;
        var opt = reading.substring(0,3);
        console.log(reading);
        window.location.href = ("/weddings/readingText?reading=" + opt);
    }

    function getSecondReading() {
        var reading = document.getElementById("secondReading").value;
        var opt = reading.substring(0,3);
        console.log(reading);
        window.location.href = ("/weddings/readingText?reading=" + opt);
    }

    function getGospelReading() {
        var reading = document.getElementById("gospel").value;
        var opt = reading.substring(0,3);
        console.log(reading);
        window.location.href = ("/weddings/readingText?reading=" + opt);
    }

    $(document).on('change ', '.selectFR', function (e)
    {
        firstReadingButton();
    });

    $(document).on('change ', '.selectSR', function (e)
    {
        secondReadingButton();
    });

    $(document).on('change ', '.selectG', function (e)
    {
        gospelReadingButton();
    });

    function firstReadingButton()
    {
        console.log(document.getElementById("firstReading").value);
        if (document.getElementById("firstReading").value == "")
        {
            document.getElementById("firstReadingView").style.display = "none";
        }
        else {
            document.getElementById("firstReadingView").style.display = "block";
        }
    }

    function secondReadingButton()
    {
        console.log(document.getElementById("secondReading").value);
        if (document.getElementById("secondReading").value == "")
        {
            document.getElementById("secondReadingView").style.display = "none";
        }
        else {
            document.getElementById("secondReadingView").style.display = "block";
        }
    }

    function gospelReadingButton()
    {
        console.log(document.getElementById("gospel").value);
        if (document.getElementById("gospel").value == "")
        {
            document.getElementById("gospelReading").style.display = "none";
        }
        else {
            document.getElementById("gospelReading").style.display = "block";
        }
    }

    $(document).ready(function () {
        firstReadingButton();
        secondReadingButton();
        gospelReadingButton();
    });
</script>

<div class="card-body" id="readingsForm">
    <h2 class="card-title">Readings</h2>
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="form-group row">
                <div class="col-md-4 text-left font-weight-bold">
                    <label for="firstReading">First Reading (Old Testament)</label>
                </div>
                <div class="col-md-4 ">
                    <select id="firstReading" name="firstReading" class="form-control selectFR">
                        <option value="{{$wedding->firstReading}}">{{$wedding->firstReading}}</option>
                        @foreach ($firstReadings as $firstReading)
                        <option value="{{$firstReading->Option}} {{$firstReading->BibleVerse}}">{{$firstReading->Option}} {{$firstReading->BibleVerse}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 ">
                    <button class="btn btn-primary" type="button" id="firstReadingView" onload="firstReadingButton()"onclick="getFirstReading()">View First Reading</button>
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-md-4 text-left font-weight-bold">
                    <label for="firstReader">Reader</label>
                </div>
                <div class="col-md-4 ">
                    <input type="text" class="form-control" id="firstReader" name="firstReader" value="{{$wedding->firstReader}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="First reader">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4 text-left font-weight-bold">
                    <label for="secondReading">Second Reading (Old Testament)</label>
                </div>
                <div class="col-md-4 text-left">
                    <select id="secondReading" name="secondReading" class="form-control selectSR">
                        <option value="{{$wedding->secondReading}}">{{$wedding->secondReading}}</option>
                        @foreach ($secondReadings as $secondReading)
                        <option value="{{$secondReading->Option}} {{$secondReading->BibleVerse}}">{{$secondReading->Option}} {{$secondReading->BibleVerse}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 ">
                    <button class="btn btn-primary" type="button" id="secondReadingView" onclick="getSecondReading()">View Second Reading</button>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4 text-left font-weight-bold">
                    <label for="reader2">Reader</label>
                </div>
                <div class="col-md-4 ">
                    <input type="text" class="form-control" id="secondReader" name="secondReader" value="{{$wedding->secondReader}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Second reader">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4 text-left font-weight-bold">
                    <label for="secondReading">Gospel</label>
                </div>
                <div class="col-md-4 ">
                    <select id="gospel" name="gospel" class="form-control selectG">
                        <option value="{{$wedding->gospel}}">{{$wedding->gospel}}</option>
                        @foreach ($gospelReadings as $gospelReading)
                        <option value="{{$gospelReading->Option}} {{$gospelReading->BibleVerse}}">{{$gospelReading->Option}} {{$gospelReading->BibleVerse}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 ">
                    <button class="btn btn-primary" type="button" id="gospelReading" onclick="getGospelReading()">View Gospel Reading</button>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4 text-left font-weight-bold">
                    Prayer of the Faithful
                </div>
                <div class="col-md-4 text-left">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="faithPrayer" name="faithPrayer" value="Standard" {{$wedding->faithPrayer == 'Standard' ? 'checked':''}}>
                        <label class="form-check-label" for="faithfulPrayer">Standard</label>
                    </div>
                    <br />
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="faithPrayer2" name="faithPrayer" value="Prepared by couple" {{$wedding->faithPrayer == 'Prepared by couple' ? 'checked':''}}>
                        <label class="form-check-label" for="faithfulPrayer">Prepared by couple</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4 text-left font-weight-bold">
                    <label for="reader3">Reader</label>
                </div>
                <div class="col-md-4 ">
                    <input type="text" class="form-control" id="thirdReader" name="thirdReader" value="{{$wedding->thirdReader}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Reader">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--closes card-body -->