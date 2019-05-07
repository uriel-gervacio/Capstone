@extends( 'layouts.app' )

@section( 'content' )

<div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-12">
			<div class="card text-center">
				<div class="card-header">
					<h3>Wedding Record Results</h3>
				</div>
				<div class="card-body">

					<div>
						
						<table id="results" class="display table table-striped table-bordered">


							<thead>
								<tr>
                                    <th>Bride (Last, First)</th>
                                    <th>Groom (Last, First)</th>
									<th>Wedding Date</th>
									<th>Couple Complete</th>
									<th>Parish Staff Complete</th>
                                </tr>
							</thead>
							<tbody>
								
									@foreach ($wed as $wedding)
									<tr class='clickable-row' data-href='/weddings/details/{{$wedding->id}}'>
										<td scope="col">{{$wedding->brideLastName}}, {{$wedding->brideFirstName}}</td>
										<td scope="col">{{$wedding->groomLastName}}, {{$wedding->groomFirstName}}</td>
										<td scope="col">{{date('Y-M-d', strtotime($wedding->weddingDate))}}</td>
										@if($wedding->coupleComplete == 1)
										<td scope="col">Complete</td>
										@else
										<td scope="col">Incomplete</td>
										@endif
									
										@if($wedding->adminComplete == 1)
										<td scope="col">Complete</td>
										@else
										<td scope="col">Incomplete</td>
										@endif
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