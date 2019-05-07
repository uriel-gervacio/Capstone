@extends( 'layouts.app' )

@section( 'content' )

<div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Reading Options</h3>
                </div>
                <div class="card-body">

                    <div class="mx-auto">
						<a class="btn btn-success" href="/readings/create" role="button">Create New Reading</a>
                    </div>

                    <br/>
                    <div class="container">

                        <table id="results" class="display table table-striped table-bordered">


                            <thead>
                                <tr>
                                    <th>Option</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Bible Verse</th>
                                    <th>Text</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reading as $r)
                                <tr class='clickable-row' data-href='/readings/edit/{{$r->id}}'>
                                    <td scope="col">{{$r->Option}}</td>
                                    <td scope="col">{{$r->Type}}</td>
                                    <td scope="col">{{$r->Title}}</td>
                                    <td scope="col">{{$r->BibleVerse}}</td>
                                    <td scope="col">{{$r->Text}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>


                    </div>

                </div>
                <!--closes card-body -->
            </div>
            <!--closes main card -->
        </div>
        <!--closes col-md-12 -->
    </div>
    <!-- closes row justify content center -->

</div> <!-- closes containter-fluid -->




<br/> @endsection