<div class="card-body" id="partyForm">
    <h2 class="card-title">Bridal Party</h2>
    
    <div class="controls">
        <div class="row justify-content-center">
            <div class="col-md-4 font-weight-bold">Best Man</div>
            <div class="col-md-4"><input class="form-control" value="{{$wedding->bestMan}}" name="bestMan" type="text" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Last, First"></div>
        </div>
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-4 font-weight-bold">Maid of Honor</div>
            <div class="col-md-4"><input class="form-control" value="{{$wedding->brideOfHonor}}" name="brideOfHonor" type="text" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Last, First"></div>
        </div>
        <br/>
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-6 font-weight-bold">Participants</div>
        </div>

        @if($participants->count() > 0)
        @for($i = 0; $i < count($participants); $i++)
        <div class="list">

            <div class="row justify-content-center entry">
                <div class="col-md-6  input-group">
                    <input class="form-control" name="participant[{{$i}}]" type="text" value='{{$participants[$i]->participant}}'>
                    @if($i == ($participants->count() -1))
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
        <div class="list">

            <div class="row justify-content-center entry">
                <div class="col-md-6  input-group">
                    <input class="form-control" name="participant[0]" type="text">
                    <button class="btn btn-success btn-add glyphicon-plus" style="width:40px; height:40px;"></button>
                    <br/>
                    <br/>
                </div>
            </div>

        </div>
        @endif

        <small>Press green button <span class="glyphicon glyphicon-plus gs"></span> to add another set</small>
    
    </div>

</div><!--closes card-body --> 