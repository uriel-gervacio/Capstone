@extends('layouts.app')

@section('content')
<div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header"><h3>Edit Reading</h3></div>
                <div class="card-body">

                
                        <div class="row justify-content-center">
                            <div class="col-md-8">

                            <!-- Delete -->
                            <div class="row justify-content-end">
                                <div class="col-4">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete Reading</button>
                                </div>
                            </div>

                            <form class="form-horizontal" action="/readings/{{$reading->id}}" method="POST">
                                 {{ csrf_field() }}
                                @method('DELETE')
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Delete Reading</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this reading?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                             <!-- End Delete -->

                                <br/>
                                <br/>

                                <form class="needs-validation form-horizontal" action="/readings/{{$reading->id}}" method="POST" novalidate>
                                {{ csrf_field() }}
                                @method('PATCH')
                                @include('common.errors')

                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="Option">Option</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select  id="Option" name="Option" class="form-control" required>
                                            <option value="{{$reading->Option}}">{{$reading->Option}}</option>
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
                                            <option value="{{$reading->Type}}">{{$reading->Type}}</option>
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
                                        <input type="text" class="form-control" id="Title" name="Title" value="{{$reading->Title}}" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="BibleVerse">Bible Verse</label>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <input type="text" class="form-control" id="BibleVerse" name="BibleVerse" value="{{$reading->BibleVerse}}" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2 text-left font-weight-bold">
                                        <label for="Text">Text</label>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <textarea class="form-control" name="Text" cols="50" rows="10" id="Text" value="{{$reading->Text}}" required>{{$reading->Text}}</textarea>
                                    </div>

                                </div>

                                <br />
                                <div class ="row">
                                    <div class="mx-auto">
                                    <button class="btn btn-secondary"onclick="window.location.href = '{{ url('readings') }}';">Cancel</button>
                                    </div>
                                    <div class="mx-auto">
                                        <button class="btn btn-success" type="submit">Update</button>
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