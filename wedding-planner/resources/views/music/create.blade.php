@extends('layouts.app')

@section('content')

<div class="container">

    <br>
    <div class="card text-center">
        <div class="card-header">
            <h3>Music</h3>
        </div>
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-sm-6">


                    <div class="form-group row text-center">

                    </div>

                <form class="needs-validation form-horizontal" action="/music/create" method="POST" novalidate>

                {{ csrf_field() }}
                
                    <div class="form-group row">
                        <div class="col-md-4 font-weight-bold">
                            <label for="songTitle">Song Title</label>
                        </div>
                        <div class="col-md-6 text-left">
                            <input type="text" class="form-control" id="songTitle" name="songTitle" value="" placeholder="Song Title">

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-4 font-weight-bold">
                            <label for="songTitle">Song Type</label>
                        </div>
                        <div class="col-md-6 text-left">

                            <select required id="type" name="type" class="form-control">

                               @foreach ($types as $type) 
                                 <option value="{{$type->type}}">{{$type->type}}</option>
                                 @endforeach 

                            </select>

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-4 font-weight-bold">
                            <label for="url">Song URL</label>
                        </div>
                        <div class="col-md-6 text-left">
                            <input type="text" class="form-control" id="url" name="url" value="" placeholder="Optional: https://example.com"> 

                        </div>
                    </div>

                </div>
            </div>


            <br>
            <div class="mx-auto">
                <button class="btn btn-success" type="submit">Create</button>
            </div>

        </div>
    </div>

</form>


<!--closes card-body -->

</div>
@endsection 