@extends( 'layouts.app' )

@section( 'content' )
<script>
$(document).ready(function() {
//makes each row clickable and takes staff to edit page
	$(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });

    $('#musicResults').DataTable( {
        "order": [[ 0, "asc" ]]
    } );
} );
</script>
<div class="container">
	<br/>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card text-center">
				<div class="card-header">
					<h3>Music Options</h3>
				</div>

				<div class="card-body">

                <div class="auto-max"> 
                 <a class="btn btn-success" href="/music/create" role="button">Create New Song</a>
                </div>
				<br/>
					<div class="container">
						
						<table id="musicResults" class="display table table-striped table-bordered">


							<thead>
								<tr>
                                    <th>Song Title</th>
                                    <th>Song Type</th>
                                    <th>URL (Optional)</th>
                                </tr>
							</thead>
							<tbody>
								
                            
									@foreach ($songs as $song)
									<tr class='clickable-row' data-href='/music/edit/{{$song->id}}'>
										<td scope="col">{{$song->songTitle}}</td>
										<td scope="col">{{$song->type}}</td>
                                        <td scope="col">{{$song->url}}</td>
										
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