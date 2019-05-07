@extends('layouts.app')
@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Music</h3>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">

                            <br>
                            <br>
                            <form class="needs-validation form-horizontal" action="/music/{{$music->id}}" method="POST" novalidate>
                                {{ csrf_field() }}
                                @method('PATCH')
                                @include('common.errors')
                                <div class="form-group row">
                                    <div class="col-md-4 font-weight-bold">
                                        <label for="songTitle">Song Title</label>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <input type="text" class="form-control" id="songTitle" name="songTitle" value="{{$music->songTitle}}" placeholder="Song Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 font-weight-bold">
                                        <label for="songTitle">Song Type</label>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <select required id="type" name="type" class="form-control">
                                            <option value="{{$music->type}}">{{$music->type}}</option>
                                            @foreach ($songs as $song)
                                            <option value="{{$song->type}}">{{$song->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 font-weight-bold">
                                        <label for="url">Song URL</label>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <input type="text" class="form-control" id="url" name="url" value="{{$music->url}}" placeholder="Optional: https://example.com">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mx-auto">
                                        <button class="btn btn-secondary" onclick="window.location.href = '{{ url('music/index') }}';">Cancel</button>
                                    </div>
                                    <div class="mx-auto">
                                        <button class="btn btn-success" type="submit">Update</button>
                                    </div>
                                </div>

                                <div>
                                    <br>

                                </div>
                        </div>
                    </div>
                    </form>

                    <div class="row justify-content-end">
                        <div class="col-4 mx-auto">
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete Song</button>
                        </div>
                    </div>
                    <form class="form-horizontal" action="/music/{{$music->id}}" method="POST">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Song</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this song?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection