<script>
    function validate(form) {
        if (form.options[0].checked == false && form.options[1].checked == false && form.options[2].checked == false) {
            alert('Please check at least one of the options.');
            return false;
        }
        return true;
    }
</script>

<div class="card-body" id="participantsForm">
    <h2 class="card-title">Participants</h2> 
    <div class="row justify-content-center">
        <div class="col-md-6">     
            <div class="form-group row">
                <div class="form-group col-sm-6 text-left">
                    <label for="Flower Girl" class=" col-form-label font-weight-bold">Flower Girl</label>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="flowerGirl" name="flowerGirl" value="{{$wedding->flowerGirl}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Flower Girl">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row ">
                <div class="form-group col-sm-6 text-left">
                    <label for="RingBearer" class=" col-form-label font-weight-bold">Ring Bearer</label>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="ringBearer" name="ringBearer" value="{{$wedding->ringBearer}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Ring Bearer">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 text-left font-weight-bold">
                    <label for="AlterServers" class=" col-form-label">Alter Servers</label>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-check float-left ">
                        <input class="form-check-input" type="radio" id="altarServers" name="altarServers" value="From our parish"
                               {{$wedding->altarServers == 'From our parish' ? 'checked':''}}>
                        <label class="form-check-label" for="AlterServers1">From our parish</label>
                    </div>
                    <div class="form-check float-left ">
                        <input class="form-check-input" type="radio" id="altarServers2" name="altarServers" value="Will provide your own"
                               {{$wedding->altarServers == 'Will provide your own' ? 'checked':''}}>
                        <label class="form-check-label" for="AlterServers2">Will provide your own</label>
                    </div>
                </div>
            </div>

            <br />
            <div class="row justify-content-center font-weight-bold">
                <div class="col-md-8 ">Ushers</div>
            </div>
            <div class="controls2">

                @if($ushers->count() > 0)
                @for($i = 0; $i < count($ushers); $i++)
                <div class="list2">
                    <div class="row justify-content-center entry2">
                        <div class="col-md-10  input-group">
                            <input class="form-control" name="usher[{{$i}}]" type="text" value='{{$ushers[$i]->usher}}'>

                            @if($i == ($ushers->count() -1))
                                <button class="btn btn-success btn-add glyphicon-plus" style="width:40px; height:40px;"></button>
                            @else
                                <button class="btn btn-danger btn-remove glyphicon-minus" style="width:40px; height:40px;"></button>
                            @endif
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div> 
                @endfor
                @else
                <div class="list2">

                    <div class="row justify-content-center entry2">
                        <div class="col-md-10  input-group">
                            <input class="form-control" name="usher[0]" type="text">
                            <button class="btn btn-success btn-add glyphicon-plus" style="width:40px; height:40px;"></button>
                            <br/>
                            <br/>
                        </div>
                    </div>

                </div>
                @endif
                
                <small>Press green button <span class="glyphicon glyphicon-plus gs"></span> to add another set</small>

            </div>
        </div> 
    </div>  
</div><!--closes card-body --> 