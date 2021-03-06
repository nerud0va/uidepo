@extends('layouts.cmslayout')

@section('cmscontent')

<!-- CONTENT WRAPPER -->
<div class="content-wrapper">

	<!-- Include left col -->
	@include('layouts.partials.cmsleftcol')

	<!-- MAIN CONTENT -->
	<div class="main-content-wrapper">

		<div class="mc-titlebar">
			<span class="mc-title control-panel">Users</span>
		</div>

	    <!-- Main content inner -->
	    <div class="mc-inner">

			<!-- Notification message for success -->
			@include('messages.success')

			<div class="buttons-cont">
				<div class="col-2">
					<a class="default-button default-abutton red fl-left" href="{{ route('users.create') }}">Add new user</a>
				</div>
			</div>

			<!-- Grid -->
			<div class="grid">
				<div class="grid-row">
			        <div class="widget red">
	                    <!-- Widget titlebar -->
	                    <div class="widget-titlebar">
	                        <span>List of all users</span>
	                        <div class="widget-actions">
	                            <a class="wa-settings" href="javascript:;"></a>
	                        </div>
	                    </div>
	                    <!-- Widget titlebar -->

	                    <!-- Widget main content -->
	                    <div class="widget-content-wrapper">
	                        <div class="widget-content">
	                            <table id="datatable" class="datatables display responsive dataTable" cellspacing="0" width="100%">
	                                <thead>
										<tr>
											<th>#</th>
											<th>Full name</th>
											<th>Email address</th>
											<th>Role</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $br => $user)
											<tr>
												<td>{{ ++$br }}</td>
												<td>{{ $user->name }}</td>
												<td>{{ $user->email }}</td>
												<td>{{ $user->roles->name }}</td>
												<td>{{ $user->created_at->format('d.m.Y') }}</td>
												<td>
													<a class="table-edit-icon" href="{{ route('inner-admin-change-pass', $user->id) }}" title="Change password"></a>
												</td>
											</tr>
										@endforeach
									</tbody>
	                            </table>
	                        </div>
	                    </div>
	                    <!-- Widget main content -->
	                </div>
				</div>
			</div>
			<!-- Grid -->

	    </div>
	    <!-- Main content inner -->
	</div>
	<!-- MAIN CONTENT -->
</div>
<!-- CONTENT WRAPPER -->
@stop
