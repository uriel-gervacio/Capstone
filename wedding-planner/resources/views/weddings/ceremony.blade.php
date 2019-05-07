<script>
    matrimonyType();

    $(document).on('click', '.radio-add', function (e)
    {
        console.log("testing");
        document.getElementById("cDetailsLabel").style.display = "block";
        document.getElementById("conclusionDetails").style.display = "block";
    });

    $(document).on('click', '.radio-del', function (e)
    {
        console.log("testing");
        document.getElementById("cDetailsLabel").style.display = "none";
        document.getElementById("conclusionDetails").style.display = "none";
    });

    function validate(form) {
        if (form.options[0].checked == false && form.options[1].checked == false && form.options[2].checked == false) {
            alert('Please check at least one of the options.');
            return false;
        }
        return true;
    }
</script>

<div class="card-body" id="ceremonyForm">
    <h2 class="card-title">Ceremony Details</h2> 
    <div class="row justify-content-center">
        <div class="col-md-8">     
            <br>
            <div class="form-group row">
                <div class="col-sm-6 text-left font-weight-bold">
                    <label for="matrimonyType" class=" col-form-label">Matrimony Type</label>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-check float-left text-left">
                        <input class="form-check-input mass" type="radio" id="matrimonyType1" name="matrimonyType" value="With Mass"
                               {{$wedding->matrimonyType == 'With Mass' ? 'checked':''}}>
                        <label class="form-check-label" for="matrimonyType1">With Mass</label>
                    </div>
                    <br>
                    <div class="form-check float-left text-left">
                        <input class="form-check-input noMass" type="radio" id="matrimonyType2" name="matrimonyType" value="Without Mass"
                               {{$wedding->matrimonyType == 'Without Mass' ? 'checked':''}}>
                        <label class="form-check-label" for="matrimonyType2">Without Mass</label>
                    </div>
                    <br>
                    <div class="form-check float-left text-left">
                        <input class="form-check-input other" type="radio" id="matrimonyType3" name="matrimonyType" value="Between a catholic and a catechumen or non-christian"
                               {{$wedding->matrimonyType == 'Between a catholic and a catechumen or non-christian' ? 'checked':''}}>
                        <label class="form-check-label" for="matrimonyType3">Between a catholic and a catechumen or non-christian</label>
                    </div>
                </div>
            </div>
            
            <br>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    If you wish to have a Eucharistic Minister from your family 
                    assist with Communion, please provide their name
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control" id="minister" name="minister"  value="{{$wedding->minister}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="" >      
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <div class="col-sm-12 text-left font-weight-bold">
                    <label for="SeatingGP" class=" col-form-label">Seating of Grand Parents</label>
                </div>
                <div class=" form-group col-sm-6 text-left font-weight-bold">
                    Will they walk together
                </div>
                <div class="form-group col-sm-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="grandparents" name="grandparents" value=1
                               {{$wedding->grandparents == 1 ? 'checked':''}}>
                        <label class="form-check-label" for="GP1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="grandparents2" name="grandparents" value=0
                               {{$wedding->grandparents == 0 ? 'checked':''}}>
                        <label class="form-check-label" for="GP2">No</label>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    or
                </div>
                <div class="form-group col-sm-6 text-left">
                    <label for="GMother" class="col-form-label font-weight-bold">Grandmother escorted by</label>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="gmEscort" name="gmEscort" value="{{$wedding->gmEscort}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Grandmother escort">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
                <div class="form-group col-sm-6 text-left">
                    <label for="GFather" class="col-form-label font-weight-bold">Grandfather escorted by</label>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="gpEscort"  name="gpEscort" value="{{$wedding->gpEscort}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Grandfather escort">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <div class="col-sm-6 text-left font-weight-bold">
                    <label for="Runner" class=" col-form-label">Runner</label>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-check float-left text-left">
                        <input class="form-check-input" type="radio" id="runner" name="runner" value="After parents are seated, ushers unroll runner"
                               {{$wedding->runner == 'After parents are seated, ushers unroll runner' ? 'checked':''}}>
                        <label class="form-check-label" for="Runner1">After parents are seated, ushers unroll runner</label>
                    </div>
                    <div class="form-check float-left text-left">
                        <input class="form-check-input" type="radio" id="runner2" name="runner" value="The runner is unrolled by the florist in advance"
                               {{$wedding->runner == 'The runner is unrolled by the florist in advance' ? 'checked':''}}>
                        <label class="form-check-label" for="Runner2">The runner is unrolled by the florist in advance</label>
                    </div>
                    <div class="form-check float-left text-left">
                        <input class="form-check-input" type="radio" id="runner3" name="runner" value="There will be no runner"
                               {{$wedding->runner == 'There will be no runner' ? 'checked':''}}>
                        <label class="form-check-label" for="Runner3">There will be no runner</label>
                    </div>
                </div>
            </div>
            
            <hr>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Unity Candle
                </div>
                <div class="col-md-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="unityCandle" name="unityCandle" value=1
                               {{$wedding->unityCandle == 1 ? 'checked':''}}>
                        <label class="form-check-label" for="unityCandle">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="unityCandle2" name="unityCandle" value=0
                               {{$wedding->unityCandle == 0 ? 'checked':''}}>
                        <label class="form-check-label" for="unityCandle">No</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Side Candles (representing each family)
                </div>
                <div class="col-md-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="sideCandles" name="sideCandles" value=1
                               {{$wedding->sideCandles == 1 ? 'checked':''}}>
                        <label class="form-check-label" for="sideCandle">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="sideCandles2" name="sideCandles" value=0
                               {{$wedding->sideCandles == 0 ? 'checked':''}}>
                        <label class="form-check-label" for="sideCandle">No</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Lighting of Side Candles (Select one)
                </div>
                <div class="col-md-6 ">
                    <div class="form-check float-left text-left">
                        <input class="form-check-input" type="radio" id="litSideCandles" name="litSideCandles" value="Please have them lit before the ceremony begins"
                               {{$wedding->litSideCandles == 'Please have them lit before the ceremony begins' ? 'checked':''}}>
                        <label class="form-check-label" for="sideCandleLit">Please have them lit before the ceremony begins</label>
                    </div>
                    <div class="form-check float-left text-left">
                        <input class="form-check-input" type="radio" id="litSideCandles2" name="litSideCandles" value="Parents/mothers will light during the procession"
                               {{$wedding->litSideCandles == 'Parents/mothers will light during the procession' ? 'checked':''}}>
                        <label class="form-check-label" for="sideCandleLit">Parents/mothers will light during the procession</label>
                    </div>
                </div>
            </div>
            
            <hr>

            <div id="mass">
            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Offertory gifts (if you are having a Mass)
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 font-weight-bold text-left">
                    <label for="gifts">Presented by</label>
                </div>
                <div class="col-md-6 text-left">
                    <input type="text" class="form-control" id="gifts" name="giftPresenter" value="{{$wedding->giftPresenter}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="">      
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>
            
            <hr>
            </div>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Flowers to moms
                </div>
                <div class="col-md-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="flowersToMoms" name="flowersToMoms" value=1
                               {{$wedding->flowersToMoms == 1 ? 'checked':''}}>
                        <label class="form-check-label" for="flowers">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="flowersToMoms2" name="flowersToMoms" value=0
                               {{$wedding->flowersToMoms == 0 ? 'checked':''}}>
                        <label class="form-check-label" for="flowers">No</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Flowers to the blessed mother
                </div>
                <div class="col-md-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="flowersToMary" name="flowersToMary" value=1
                               {{$wedding->flowersToMary == 1 ? 'checked':''}}>
                        <label class="form-check-label" for="flowers1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="flowersToMary2" name="flowersToMary" value=0
                               {{$wedding->flowersToMary == 0 ? 'checked':''}}>
                        <label class="form-check-label" for="flowers2">No</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Who will accompany the bride to the altar of the Blessed Mother
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control" id="altarCompanion" name="altarCompanion"  value="{{$wedding->altarCompanion}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$"placeholder="" >      
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>
            
            <hr>

            <div class="form-group row">
                <div class="col-md-6 text-left font-weight-bold">
                    Will you have bubbles, bells, or other celebration following the ceremony?
                </div>
                <div class="col-md-6 ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input radio-add" type="radio" id="conclusion1" name="conclusion" value=1
                               {{$wedding->conclusion == 1 ? 'checked':''}}>
                        <label class="form-check-label" for="conclusion">Yes</label>
                    </div>
                    <div class="form-check form-check-inline radio-del">
                        <input class="form-check-input" type="radio" id="conclusion2" name="conclusion" value=0
                               {{$wedding->conclusion == 0 ? 'checked':''}}>
                        <label class="form-check-label" for="conclusion">No</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-6 text-left">    
                    <label for="conclusionDetails" class=" col-form-label font-weight-bold" id="cDetailsLabel" style="display:none">Conclusion Details</label>        
                </div>
                <div class="form-group col-sm-6">
                    <textarea class="form-control" id="conclusionDetails" name="conclusionDetails" style="display:none" placeholder="Conclusion Details" rows="4" cols="50"></textarea>
                </div>
            </div>

        </div>
    </div>  
</div><!--closes card-body --> 