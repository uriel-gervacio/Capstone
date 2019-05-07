<div class="card-body" id="vendorsForm">
    <h2 class="card-title">Vendors</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="form-group row ">
                <div class="form-group col-sm-6 text-left">
                    <label for="Florist" class=" col-form-label font-weight-bold">Florist</label>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="florist" name="florist" value="{{$wedding->florist}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Florist">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row ">
                <div class="form-group col-sm-6 text-left">
                    <label for="Photographer" class=" col-form-label font-weight-bold">Photographer</label>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="photographer" name="photographer"  value="{{$wedding->photographer}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Photographer">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row ">
                <div class="form-group col-sm-6 text-left">
                    <label for="Videographer" class=" col-form-label font-weight-bold">Videographer</label>
                </div>
                <div class="form-group col-sm-6 text-left">
                    <input type="text" class="form-control" id="videographer" name="videographer" value="{{$wedding->videographer}}" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$" placeholder="Videographer">
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-sm-6 text-left">    
                    <label for="AdditionalInfo" class=" col-form-label font-weight-bold">Additional Information</label>        
                </div>
                <div class="form-group col-sm-6">
                    <textarea class="form-control" id="additionalInfo" name="additionalInfo" placeholder="If needed, provide any additional details" rows="4" cols="50">{{$wedding->additionalInfo}}</textarea>
                </div>
            </div>
        </div>
    </div>
</div><!--closes card-body --> 