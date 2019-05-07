@extends('layouts.app')

@section('content')

<script>
    $(function () {
        readyNavBar();
        addDeleteUsher();
        addDeletePart();
        songTypeChanged();

        @if(!auth()->user()->isAdmin())
        document.getElementById('coupleCompletion').style.display='none';
        document.getElementById('adminCompletion').style.display='none';
        document.getElementById("completeMessage").innerHTML=
        "Are you sure you want to complete your wedding record? You will not be able to make any more changes beyond this point, unless you contact the parish staff.";
        if (document.getElementById("complete").checked == true) 
            disableFields();
        @else
        document.getElementById("completeMessage").innerHTML=
        "Are you sure you want to complete this wedding record? The couple will not be able to make changes beyond this point. However, the parish staff will still be able to make edits.";
        if (document.getElementById("acomplete").checked == true)
            document.getElementById('completeModalButton').style.display='none';
        @endif

        $("#weddingDate").datepicker();
        $("#rehearsalDate").datepicker();
    });
</script>

<div class="container">
    <br />
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center noborder">

                <form class="needs-validation form-horizontal" action="/weddings/details/{{$wedding->id}}" method="POST" id="detailsForm" novalidate>
                    {{ csrf_field() }}
                    @method('PATCH')

                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="record-link" href="#">Wedding Record</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="party-link" href="#">Bridal Party</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ceremony-link" href="#">Ceremony Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="participants-link" href="#">Participants</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="music-link" href="#">Music</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="readings-link" href="#">Readings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="vendors-link" href="#">Vendors</a>
                                    </li>
                                </ul>
                            </div>

                            <div id="record" class="card-body active">
                                @if (auth()->user()->isAdmin())
                                @include('weddings.edit')
                                @else
                                @include('weddings.view')
                                @endif
                            </div>
                            <div id="party" class="card-body inactive">
                                @include('weddings.party')
                            </div>
                            <div id="ceremony" class="card-body inactive">
                                @include('weddings.ceremony')
                            </div>
                            <div id="participants" class="card-body inactive">
                                @include('weddings.participants')
                            </div>
                            <div id="music" class="card-body inactive">
                                @include('weddings.music')
                            </div>
                            <div id="readings" class="card-body inactive">
                                @include('weddings.readings')
                            </div>
                            <div id="vendors" class="card-body inactive">
                                @include('weddings.vendors')
                            </div>

                        </div>

                        <br />

                        <div class="col-12">
                            <button class="btn btn-success" type="submit" id="saveWedding">Save Wedding Details</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type='button' data-toggle="modal" data-target="#completeModal" id="completeModalButton">Complete Wedding Process</button>
                        </div>




                       
                        <div class="form-group row" id="coupleCompletion">
                            <div class="col-md-6 text-left font-weight-bold">
                                Couple Completion
                            </div>

                            <div class="col-md-6 ">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="coupleComplete" id="complete" value=1 {{$wedding->coupleComplete == 1 ? 'checked':''}}>
                                    <label class="form-check-label" for="coupleComplete">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="coupleComplete" value=0 {{$wedding->coupleComplete == 0 ? 'checked':''}}>
                                    <label class="form-check-label" for="coupleComplete">No</label>
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-group row" id="adminCompletion">
                            <div class="col-md-6 text-left font-weight-bold">
                                Admin Completion
                            </div>

                            <div class="col-md-6 ">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="adminComplete" id="acomplete" value=1 {{$wedding->adminComplete == 1 ? 'checked':''}}>
                                    <label class="form-check-label" for="adminComplete">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="adminComplete" value=0 {{$wedding->adminComplete == 0 ? 'checked':''}}>
                                    <label class="form-check-label" for="adminComplete">No</label>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!--Complete Modal-->
                    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="completeModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="completeModalLabel">Complete Wedding Process</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="completeMessage">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger" id="completeButton">Complete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="mx-auto">
                    @if (auth()->user()->isAdmin())
                    <div class="row justify-content-end">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete Wedding Record</button>
                    </div>
                    <br>
                    @endif
                </div>

                <!-- Delete Modal -->
                <form action="/weddings/details/{{$wedding->id}}" method="POST">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Wedding Record</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this record?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div> <!--closes card -->
        </div> <!--closes col-md-10 -->
    </div> <!-- closes row justify content center -->

</div><!-- closes container -->

<br />

@endsection