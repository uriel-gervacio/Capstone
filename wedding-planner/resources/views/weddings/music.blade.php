<div class="card-body" id="musicForm">
    <h2 class="card-title">Music</h2>

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Prelude" class=" col-form-label font-weight-bold ">Prelude</label>

        </div>

        <div class="form-group col-sm-4 text-left">
            <select id="prelude" name="prelude" class="form-control">
                <option value="{{$wedding->prelude}}">{{$wedding->prelude}}</option>
                @foreach ($preludes as $prelude)
                <option value="{{$prelude->songTitle}}">{{$prelude->songTitle}}</option> 
                @endforeach

            </select>
        </div>

        <div class="form-group col-sm-4 text-left">
            <label for="Prelude" class=" col-form-label font-weight-bold">        </label> 
            @foreach ($preludes as $prelude)

            <a style="{{$wedding->prelude == $prelude->songTitle ? ' ' : ' display:none; '}}" data-url="{{$prelude->songTitle}}" class="btn btn-success preludeURL" role="button" target="_blank" href="{{$prelude->url}}" id="preludeBtn">Preview</a>

            @endforeach

        </div>

    </div>

    <!-- ============================================================================ -->

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Lighting of Candle" class=" col-form-label font-weight-bold">Lighting of Candle</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="lightingOfCandle" name="lightingOfCandle" class="form-control">
                <option value="{{$wedding->lighting}}">{{$wedding->lighting}}</option>
                @foreach ($lightings as $lighting)
                <option value="{{$lighting->songTitle}}">{{$lighting->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($lightings as $lighting)

            <a style="{{$wedding->lighting == $lighting->songTitle ? ' ' : ' display:none; '}}" data-url="{{$lighting->songTitle}}" class="btn btn-success lightingURL" role="button" target="_blank" href="{{$lighting->url}}" id="lightingBtn">Preview</a>

            @endforeach

        </div>

    </div>

    <!-- ============================================================================ -->

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Bridesmaids Entrance" class=" col-form-label font-weight-bold">Bridesmaids Entrance</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="bridesmaidsEntrance" name="bridesmaidsEntrance" class="form-control">
                <option value="{{$wedding->bridesmaids}}">{{$wedding->bridesmaids}}</option>
                @foreach ($bridesmaids as $bridesmaid)
                <option value="{{$bridesmaid->songTitle}}">{{$bridesmaid->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($bridesmaids as $bridesmaid)

            <a style="{{$wedding->bridesmaid == $bridesmaid->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success bridesmaidURL" role="button" target="_blank" href="{{$bridesmaid->url}}" id="bridesmaidBtn" data-url="{{$bridesmaid->songTitle}}">Preview</a>

            @endforeach

        </div>
    </div>

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Preparation" class=" col-form-label font-weight-bold">Preparation</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="preparation" name="preparation" class="form-control">
                <option value="{{$wedding->preparation}}">{{$wedding->preparation}}</option>
                @foreach ($preparations as $preparation)
                <option value="{{$preparation->songTitle}}">{{$preparation->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($preparations as $preparation)

            <a style="{{$wedding->preparation == $preparation->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success preparationURL" role="button" target="_blank" href="{{$preparation->url}}" id="preparationBtn " data-url="{{$preparation->songTitle}}">Preview</a>

            @endforeach

        </div>
    </div>

    <!-- ============================================================================ -->

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Bridal Entrance" class=" col-form-label font-weight-bold">Bridal Entrance</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="bridalEntrance" name="bridalEntrance" class="form-control">
                <option value="{{$wedding->bridal}}">{{$wedding->bridal}}</option>
                @foreach ($bridals as $bridal)
                <option value="{{$bridal->songTitle}}">{{$bridal->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($bridals as $bridal)

            <a style="{{$wedding->bridal == $bridal->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success bridalURL" role="button" target="_blank" href="{{$bridal->url}}" id="bridalBtn" data-url="{{$bridal->songTitle}}">Preview</a>

            @endforeach

        </div>
    </div>

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Eucharistic Acclamations" class=" col-form-label font-weight-bold">Eucharistic Acclamations</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="eucharisticAcclamations" name="eucharisticAcclamations" class="form-control">
                <option value="{{$wedding->eucharist}}">{{$wedding->eucharist}}</option>
                @foreach ($eucharistics as $eucharistic)
                <option value="{{$eucharistic->songTitle}}">{{$eucharistic->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($eucharistics as $eucharistic)

            <a style="{{$wedding->eucharistic == $eucharistic->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success eucharisticURL" role="button" target="_blank" href="{{$eucharistic->url}}" id="eucharisticBtn" data-url="{{$eucharistic->songTitle}}">Preview</a>

            @endforeach

        </div>

    </div>

    <!-- ============================================================================ -->

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Gloria" class=" col-form-label font-weight-bold">Gloria</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="gloria" name="gloria" class="form-control">
                <option value="{{$wedding->gloria}}">{{$wedding->gloria}}</option>
                @foreach ($glorias as $gloria)
                <option value="{{$gloria->songTitle}}">{{$gloria->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($glorias as $gloria)

            <a style="{{$wedding->eucharistic == $gloria->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success gloriaURL" role="button" target="_blank" href="{{$gloria->url}}" id="gloriaBtn" data-url="{{$gloria->songTitle}}">Preview</a>

            @endforeach

        </div>
    </div>

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Communion" class=" col-form-label font-weight-bold">Communion</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="communion" name="communion" class="form-control">
                <option value="{{$wedding->communion}}">{{$wedding->communion}}</option>
                @foreach ($communions as $communion)
                <option value="{{$communion->songTitle}}">{{$communion->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($communions as $communion)

            <a style="{{$wedding->communion == $communion->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success communionURL" role="button" target="_blank" href="{{$communion->url}}" id="communionBtn" data-url="{{$communion->songTitle}}">Preview</a>

            @endforeach

        </div>

    </div>

    <!-- ============================================================================ -->

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Responsorial Psalm" class=" col-form-label font-weight-bold">Responsorial Psalm</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="responsorialPsalm" name="responsorialPsalm" class="form-control">
                <option value="{{$wedding->responsorialPsalm}}">{{$wedding->responsorialPsalm}}</option>
                @foreach ($responsorials as $responsorial)
                <option value="{{$responsorial->songTitle}}">{{$responsorial->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($responsorials as $responsorial)

            <a style="{{$wedding->responsorial == $responsorial->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success responsorialURL" role="button" target="_blank" href="{{$responsorial->url}}" id="responsorialBtn" data-url="{{$responsorial->songTitle}}">Preview</a>

            @endforeach

        </div>
    </div>

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Visitation to Mary" class=" col-form-label font-weight-bold">Visitation to Mary</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="visitationToMary" name="visitationToMary" class="form-control">
                <option value="{{$wedding->visitation}}">{{$wedding->visitation}}</option>
                @foreach ($visitations as $visitation)
                <option value="{{$visitation->songTitle}}">{{$visitation->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($visitations as $visitation)

            <a style="{{$wedding->visitation == $visitation->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success visitationURL" role="button" target="_blank" href="{{$visitation->url}}" id="visitationBtn" data-url="{{$visitation->songTitle}}">Preview</a>

            @endforeach

        </div>

    </div>

    <!-- ============================================================================ -->

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Gospel Acclamation" class=" col-form-label font-weight-bold">Gospel Acclamation</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="gospelAcclamation" name="gospelAcclamation" class="form-control">
                <option value="{{$wedding->gospelSong}}">{{$wedding->gospelSong}}</option>
                @foreach ($gospels as $gospel)
                <option value="{{$gospel->songTitle}}">{{$gospel->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($gospels as $gospel)

            <a style="{{$wedding->gospel == $gospel->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success gospelURL" role="button" target="_blank" href="{{$gospel->url}}" id="gospelBtn" data-url="{{$gospel->songTitle}}">Preview</a>

            @endforeach

        </div>
    </div>

    <div class="form-group row">

        <div class="form-group col-sm-4 text-right">

            <label for="Recessional" class=" col-form-label font-weight-bold">Recessional</label>

        </div>

        <div class="form-group col-sm-4 text-left">

            <select id="recessional" name="recessional" class="form-control">
                <option value="{{$wedding->recessional}}">{{$wedding->recessional}}</option>
                @foreach ($recessionals as $recessional)
                <option value="{{$recessional->songTitle}}">{{$recessional->songTitle}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-4 text-left">

            @foreach ($recessionals as $recessional)

            <a style="{{$wedding->recessional == $recessional->songTitle ? ' ' : ' display:none; '}}" class="btn btn-success recessionalURL" role="button" target="_blank" href="{{$recessional->url}}" id="recessionalBtn" data-url="{{$recessional->songTitle}}">Preview</a>

            @endforeach

        </div>

    </div>

</div><!--closes card-body --> 