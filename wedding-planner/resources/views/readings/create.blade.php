@extends('layouts.app')

@section('content')

<div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header"><h3>Create New Reading</h3></div>
                <div class="card-body">

                    <form class="needs-validation form-horizontal" action="/readings/create" method="POST" novalidate>
                        {{ csrf_field() }}

                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <br/>
                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="Option">Option</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select  id="Option" name="Option" class="form-control" required>
                                            @foreach ($optionR as $o)
                                                <option value="{{$o}}">{{$o}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="type">Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select  id="Type" name="Type" class="form-control" required>
                                            @foreach ($typeR as $t)
                                                <option value="{{$t}}">{{$t}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="Title">Title</label>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <input type="text" class="form-control" id="Title" name="Title" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="BibleVerse">Bible Verse</label>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <input type="text" class="form-control" id="BibleVerse" name="BibleVerse" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="Text">Text</label>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <textarea class="form-control" name="Text" cols="50" rows="10" id="Text" required></textarea>
                                    </div>

                                </div>

                                <br />
                                <div class ="row">
                                    <div class="mx-auto">
                                        <button class="btn btn-secondary"onclick="window.location.href = '{{ url('readings') }}';">Cancel</button>
                                    </div>
                                    <div class="mx-auto">
                                        <button class="btn btn-success" type="submit">Save</button>
                                    </div>


                                </div>
                                <br/>

                            </div>
                        </div>

                    </form>


                </div>   <!--closes card-body -->
            </div> <!--closes main card -->
        </div> <!--closes col-md-10 -->
    </div> <!-- closes row justify content center -->

</div><!-- closes containter-fluid -->
<br/>
<br/>

@endsection