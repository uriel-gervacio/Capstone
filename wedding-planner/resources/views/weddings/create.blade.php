@extends('layouts.app')

@section('content')
<script>
    $(function() {
        $("#weddingDate").datepicker();
        $("#rehearsalDate").datepicker();

    });
</script>
   <div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Create Wedding Record</h3>
                </div>
                <div class="card-body">

                    <form class="needs-validation form-horizontal" action="/weddings/create" method="POST" novalidate>
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Bride</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="brideFirstName" class="col-sm-4 col-form-label text-right font-weight-bold">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="brideFirstName" name="brideFirstName" placeholder="First Name" pattern="^[a-zA-Z]{1,50}$" required>
                                                <div class="invalid-feedback">
                                                    Please enter a valid name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brideLastName" class="col-sm-4 col-form-label text-right font-weight-bold">Last Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="brideLastName" name="brideLastName" placeholder="Last Name" pattern="^[a-zA-Z]{1,50}$" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brideAddress" class="col-sm-4 col-form-label text-right font-weight-bold">Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="brideAddress" name="brideAddress" placeholder="Address" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid address.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brideCity" class="col-sm-4 col-form-label text-right font-weight-bold">City</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="brideCity" name="brideCity" placeholder="City" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid city.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brideState" class="col-sm-4 col-form-label text-right font-weight-bold">State</label>
                                            <div class="col-sm-8">
                                                <select required id="brideState" name="brideState" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($states as $state)
                                                    <option value="{{$state->stateAbbrev}}">{{$state->stateAbbrev}}</option>
                                                    @endforeach
                                                </select>

                                                <div class="invalid-feedback">
                                                    Please select a state.
                                                </div>
                                            </div>
                                        </div>
                                        <!--end of state stuff-->
                                        <div class="form-group row">
                                            <label for="brideZipCode" class="col-sm-4 col-form-label text-right font-weight-bold">Zip Code</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="brideZipCode" name="brideZipCode" pattern="(\d{5}([\-]\d{4})?)" placeholder="ex: 60513" required>

                                                <div class="invalid-feedback">
                                                    Please enter a zip code.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brideEmail" class="col-sm-4 col-form-label text-right font-weight-bold">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="brideEmail" name="brideEmail" placeholder="Email" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="bridePhoneNumber" class="col-sm-4 col-form-label text-right font-weight-bold">Phone Number</label>
                                            <div class="col-sm-8">

                                                <input type="text" class="form-control" id="bridePhoneNumber" name="bridePhoneNumber" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" placeholder="ex: (123)456-7890" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid phone number.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--closes bride card body-->
                                </div>
                                <!--closes bride card-->
                            </div>
                            <!--closes col-md-6 -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Groom</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="groomFirstName" class="col-sm-4 col-form-label text-right font-weight-bold">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="groomFirstName" name="groomFirstName" placeholder="First Name" pattern="^[a-zA-Z]{1,50}$" required>
                                                <div class="invalid-feedback">
                                                    Please enter a valid name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="groomLastName" class="col-sm-4 col-form-label text-right font-weight-bold">Last Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="groomLastName" name="groomLastName" placeholder="Last Name" pattern="^[a-zA-Z]{1,50}$" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="groomAddress" class="col-sm-4 col-form-label text-right font-weight-bold">Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="groomAddress" name="groomAddress" placeholder="Address" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid address.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="groomCity" class="col-sm-4 col-form-label text-right font-weight-bold">City</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="groomCity" name="groomCity" placeholder="City" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid city.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="groomState" class="col-sm-4 col-form-label text-right font-weight-bold">State</label>
                                            <div class="col-sm-8">
                                                <select required id="groomState" name="groomState" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($states as $state)
                                                    <option value="{{$state->stateAbbrev}}">{{$state->stateAbbrev}}</option>
                                                    @endforeach
                                                </select>

                                                <div class="invalid-feedback">
                                                    Please select a state.
                                                </div>
                                            </div>
                                        </div>
                                        <!--end of groom state-->
                                        <div class="form-group row">
                                            <label for="groomZipCode" class="col-sm-4 col-form-label text-right font-weight-bold">Zip Code</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="groomZipCode" name="groomZipCode" pattern="(\d{5}([\-]\d{4})?)" placeholder="ex: 60513" required>

                                                <div class="invalid-feedback">
                                                    Please enter a zip code.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="groomEmail" class="col-sm-4 col-form-label text-right font-weight-bold">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="groomEmail" name="groomEmail" placeholder="Email" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="groomPhoneNumber" class="col-sm-4 col-form-label text-right font-weight-bold">Phone Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="groomPhoneNumber" name="groomPhoneNumber" pattern="(^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$)" placeholder="ex:(123)-456-7890" required>

                                                <div class="invalid-feedback">
                                                    Please enter a valid phone number.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--closes groom card body-->
                                </div>
                                <!--closes groom card-->
                            </div>
                            <!--closes col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group row">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="weddingDate" class="col-sm-4 col-form-label text-right font-weight-bold">Wedding Date</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="weddingDate" name="weddingDate" required>

                                        <div class="invalid-feedback">
                                            Please enter a wedding date.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="weddingTime" class="col-sm-4 col-form-label text-right font-weight-bold">Wedding Time</label>
                                    <div class="col-sm-8">
                                        <input type="time" class="form-control" id="weddingTime" name="weddingTime" required>

                                        <div class="invalid-feedback">
                                            Please enter a wedding time.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="rehearsalDate" class="col-sm-4 col-form-label text-right font-weight-bold">Rehearsal Date</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rehearsalDate" name="rehearsalDate">

                                        <div class="invalid-feedback">
                                            Please enter a rehearsal date.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="rehearsalTime" class="col-sm-4 col-form-label text-right font-weight-bold">Rehearsal Time</label>
                                    <div class="col-sm-8">
                                        <input type="time" class="form-control" id="rehearsalTime" name="rehearsalTime">

                                        <div class="invalid-feedback">
                                            Please enter a rehearsal time.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto">
                                <button class="btn btn-success" type="submit">Save Wedding Record</button>
                            </div>
                            <div class="mx-auto">
                                <button class="btn btn-secondary" onclick="window.location.href ='/home';">Cancel</button>
                            </div>
                        </div>
                        <!--closes row-->
                    </form>
                </div>
                <!--closes card-body -->
            </div>
            <!--closes main card -->
        </div>
        <!--closes col-md-12 -->
    </div> <!-- closes row justify content center -->

</div><!-- closes containter-fluid -->




<br />
@endsection