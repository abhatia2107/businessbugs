@section("button")
<!-- Bug: $data coming as 1st data only. It's not dynamic depending on for loop-->
	<td>
		@if($view)
		<a href="{{$tableName}}/show/{{$data->id}}">
			<button type="button" class="btn btn-success ">
				<span class="glyphicon glyphicon-user"></span>
				View
			</button>
		</a>
		@else
			<a href="{{$tableName}}/edit/{{$data->id}}">
				<button type="button" class="btn btn-success ">
					<span class="glyphicon glyphicon-pencil"></span>
					Edit
				</button>
			</a>
		@endif
		</td>
		<td>
		{{$data->deleted_at}}
		@if($data->deleted_at)
			<a href="{{$tableName}}/enable/{{$data->id}}">
				<button type="button" class="btn btn-info " input type="submit" value="Button">
					<span class="glyphicon glyphicon-open"></span> 
					Enable
				</button>
			</a>
		@else
			<a href="{{$tableName}}/disable/{{$data->id}}">
				<button type="button" class="btn btn-warning ">
					<span class="glyphicon glyphicon-remove"></span> 
					Disable
				</button>
			</a>
		</td>
		@endif
		<td>
		<!-- Remove modal -->
		<button class="btn btn-danger" data-toggle="modal" data-target="#removeModal">
			<span class="glyphicon glyphicon-trash"></span>
			Remove
		</button>
		<div id="removeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">
							Remove permanently
						</h4>
					</div>
					<div class="modal-body">
						<p class="message">Do you want to remove the particular entry?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="{{$tableName}}/delete/{{$data->id}}">
							<button type="button" class="btn btn-primary">
								Remove
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</td>
@show