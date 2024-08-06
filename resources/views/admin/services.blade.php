
@push('styles-admin')
<script src="{{asset('admin/js/pages/data-table.js')}}"></script>
@endpush

@extends('layouts.app')

@section('content')

	<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
		
		<div class="wrapper">
		  	<div id="loader"></div>
		  	<header class="main-header">
				<div class="d-flex align-items-center logo-box justify-content-start">
					<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
						<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
					</a>    
					<!-- Logo -->
					<a href="index.html" class="logo">
					  	<!-- logo-->
					  	<div class="logo-lg">
						  	<span class="light-logo"><img src="{{asset('web/images/logo.png')}}" alt="logo"></span>
						  	<span class="dark-logo"><img src="{{asset('web/images/logo.png')}}" alt="logo"></span>
					  	</div>
					</a>    
				</div>  
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top">
				  	<!-- Sidebar toggle button-->
					
					<div class="navbar-custom-menu l-side ms-auto">
						<ul class="nav navbar-nav">    
						  <!-- Notifications -->
						  <li class="dropdown notifications-menu">
							<a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                    </a>
					</div>
				</nav>
		  	</header>
			  @include('components.admin-menu') 
			<div class="content-wrapper">
				  <div class="container-full">
					<!-- Main content -->
					<section class="content">

						<div class="row">
							<div class="col-xl-12">
							  	<div class="box">
									<div class="box-header with-border d-flex">
									  	<h4 class="box-title">Contact us </h4>
										<a  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" class="btn btn-primary ms-auto">Create new services</a>
									</div>
									<!-- /.box-header -->
									<div class="box-body no-padding">
										<div class="table-responsive px-2 mt-2">
										  <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
											<thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Title</th>
                                                    <th>Short description</th>
                                                    <th>Description</th>
                                                    <!-- <th>Thumbnail</th>
                                                    <th>Image</th> -->
                                                    <th>URL</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
											<tbody>
												@foreach($service as $ser)
                                                <tr>
													<td></td>
                                                    <td>{{$ser->title}}</td>
                                                    <td>{{$ser->shortdescription}}</td>
                                                    <td>{{ \Illuminate\Support\Str::limit($ser->description, 200) }}</td>
                                                    <!-- <td>{{$ser->thumbnail}}</td>
                                                    <td>{{$ser->img}}</td> -->
                                                    <td>{{$ser->url}}</td>
                                                    <td>
														<div class="d-flex">
															<a href="{{url('services-distroy',$ser->id)}}" class="btn btn-primary">Delete</a>
															<a href="{{url('services-view',$ser->id)}}" class="btn btn-primary ms-2 ">View</a>
														</div>
													</td>
                                                </tr>
												@endforeach
                                            </tbody>
										  </table>
										</div>
									</div>
									<!-- /.box-body -->
							  	</div>
							  	<!-- /.box -->
							</div>
						</div>
					</section>
					<!-- /.content -->
				  </div>
			</div>
			
  <!-- /.modal -->

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Save Services</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="{{url('services-save')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6 mt-3">
								<label for="">Title</label>
								<input value="{{old('title')}}" type="text" name="title" class="form-control" placeholder="title">
                            @error('title')
                                <div class="error">{{ $message }}</div>
                            @enderror
							</div>
							<div class="col-md-6 mt-3">
								<label for="">Short Description</label>
								<input value="{{old('short')}}" type="text" name="short" class="form-control" placeholder="short description">
                            @error('short')
                                <div class="error">{{ $message }}</div>
                            @enderror
							</div>
							<div class="col-md-6 mt-3">
								<label for="">Description</label>
								<input value="{{old('description')}}" type="text" name="description" class="form-control" placeholder="Description">
                            @error('description')
                                <div class="error">{{ $message }}</div>
                            @enderror
							</div>
							<div class="col-md-6 mt-3">
								<label for="">Thumbnail</label>
								<input type="file" name="thumbnails" class="form-control" >
								<small>Image should be 430x566 px.</small>
                            @error('thumbnail')
                                <div class="error">{{ $message }}</div>
                            @enderror
							</div>
							<div class="col-md-12 mt-4">
								<hr>
							</div>
							<div class="col-md-6 mt-3">
								<label for="">image</label>
								<input type="file" name="img" class="form-control" >
								<small>Image width should be 1728px.</small>
                            @error('img')
                                <div class="error">{{ $message }}</div>
                            @enderror
							</div>
							<div class="col-md-6 mt-3">
								<label for="">Video URL</label>
								<input value="{{old('url')}}" type="text" name="urls" class="form-control" placeholder="url" id="inputBox" class="hidden">
                            @error('url')
                                <div class="error">{{ $message }}</div>
                            @enderror
							</div>
							<div class="col-md-12 mt-3">
								<button type="submit" class="btn btn-danger text-start" >Save</button>
							</div>
						</div>
					</form>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-danger text-start" data-bs-dismiss="modal">Close</button>
				</div> -->
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
  <!-- /.modal -->

		  	<!-- /.content-wrapper -->
			<footer class="main-footer">
				<div class="pull-right d-none d-sm-inline-block">
					<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					  <li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">FAQ</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="https://themeforest.net/item/novo-admin-project-management-dashboard-template/46592166?s_rank=1" target="_blank">Purchase Now</a>
					  </li>
					</ul>
				</div>
				  &copy; 2024 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
			</footer>

			<!-- Control Sidebar -->
			<aside class="control-sidebar">
				  
				<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
				<ul class="nav nav-tabs control-sidebar-tabs">
				  <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
				  <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <!-- Home tab content -->
				  <div class="tab-pane active" id="control-sidebar-home-tab">
					  <div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>    
						<p>Users</p>
						<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
					  </div>
					  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
						<input type="text" name="s" placeholder="Search" class="w-p100">
					  </div>
					  <div class="media-list media-list-hover mt-20">
						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-success" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/1.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
							</p>
							<p>Praesent tristique diam...</p>
							  <span>Just now</span>
						  </div>
						</div>

						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-danger" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/2.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Luke</strong></a>
							</p>
							<p>Cras tempor diam ...</p>
							  <span>33 min ago</span>
						  </div>
						</div>

						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-warning" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/3.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							  <span>42 min ago</span>
						  </div>
						</div>

						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-primary" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/4.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							  <span>42 min ago</span>
						  </div>
						</div>          
						
						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-success" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/1.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
							</p>
							<p>Praesent tristique diam...</p>
							  <span>Just now</span>
						  </div>
						</div>

						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-danger" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/2.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Luke</strong></a>
							</p>
							<p>Cras tempor diam ...</p>
							  <span>33 min ago</span>
						  </div>
						</div>

						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-warning" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/3.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							  <span>42 min ago</span>
						  </div>
						</div>

						<div class="media py-10 px-0">
						  <a class="avatar avatar-lg status-primary" href="#">
							<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/4.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p class="fs-16">
							  <a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							  <span>42 min ago</span>
						  </div>
						</div>
						  
					  </div>

				  </div>
				  <!-- /.tab-pane -->
				  <!-- Settings tab content -->
				  <div class="tab-pane" id="control-sidebar-settings-tab">
					  <div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>    
						<p>Todo List</p>
						<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
					  </div>
					<ul class="todo-list mt-20">
						<li class="py-15 px-5 by-1">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
						  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
						  <!-- todo text -->
						  <span class="text-line">Nulla vitae purus</span>
						  <!-- Emphasis label -->
						  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
						  <!-- General tools such as edit or delete-->
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
						  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
						  <span class="text-line">Phasellus interdum</span>
						  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5 by-1">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
						  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
						  <span class="text-line">Quisque sodales</span>
						  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
						  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
						  <span class="text-line">Proin nec mi porta</span>
						  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5 by-1">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
						  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
						  <span class="text-line">Maecenas scelerisque</span>
						  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
						  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
						  <span class="text-line">Vivamus nec orci</span>
						  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5 by-1">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
						  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
						  <!-- todo text -->
						  <span class="text-line">Nulla vitae purus</span>
						  <!-- Emphasis label -->
						  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
						  <!-- General tools such as edit or delete-->
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
						  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
						  <span class="text-line">Phasellus interdum</span>
						  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5 by-1">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
						  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
						  <span class="text-line">Quisque sodales</span>
						  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
						<li class="py-15 px-5">
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
						  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
						  <span class="text-line">Proin nec mi porta</span>
						  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
						  <div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						  </div>
						</li>
					  </ul>
				  </div>
				  <!-- /.tab-pane -->
				</div>
			</aside>
			<!-- /.control-sidebar -->
		  
		  	<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		  	<div class="control-sidebar-bg"></div>
		</div>
		<!-- ./wrapper -->
		
			
		<div id="chat-box-body">
			<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
				<div id="chat-overlay"></div>
				<span class="icon-Group-chat fs-30"><span class="path1"></span><span class="path2"></span></span>
			</div>

			<div class="chat-box">
				<div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
					<div class="btn-group">
					  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
						  <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
					  </button>
					  <div class="dropdown-menu min-w-200">
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Color me-15"></span>
							New Group</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
							Contacts</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
							Groups</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
							Calls</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
							Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
							Help</a>
						<a class="dropdown-item fs-16" href="#">
							<span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
							Privacy</a>
					  </div>
					</div>
					<div class="text-center flex-grow-1">
						<div class="text-dark fs-18">Mayra Sibley</div>
						<div>
							<span class="badge badge-sm badge-dot badge-primary"></span>
							<span class="text-muted fs-12">Active</span>
						</div>
					</div>
					<div class="chat-box-toggle">
						<a id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" href="#">
						  <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
						</a>                    
					</div>
				</div>
				<div class="chat-box-body">
					<div class="chat-box-overlay">   
					</div>
					<div class="chat-logs">
						<div class="chat-msg user">
							<div class="d-flex align-items-center">
								<span class="msg-avatar">
									<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/2.jpg" class="avatar avatar-lg">
								</span>
								<div class="mx-10">
									<a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
									<p class="text-muted fs-12 mb-0">2 Hours</p>
								</div>
							</div>
							<div class="cm-msg-text">
								Hi there, I'm Jesse and you?
							</div>
						</div>
						<div class="chat-msg self">
							<div class="d-flex align-items-center justify-content-end">
								<div class="mx-10">
									<a href="#" class="text-dark hover-primary fw-bold">You</a>
									<p class="text-muted fs-12 mb-0">3 minutes</p>
								</div>
								<span class="msg-avatar">
									<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/3.jpg" class="avatar avatar-lg">
								</span>
							</div>
							<div class="cm-msg-text">
							   My name is Anne Clarc.         
							</div>        
						</div>
						<div class="chat-msg user">
							<div class="d-flex align-items-center">
								<span class="msg-avatar">
									<img src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/images/avatar/2.jpg" class="avatar avatar-lg">
								</span>
								<div class="mx-10">
									<a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
									<p class="text-muted fs-12 mb-0">40 seconds</p>
								</div>
							</div>
							<div class="cm-msg-text">
								Nice to meet you Anne.<br>How can i help you?
							</div>
						</div>
					</div><!--chat-log -->
				</div>
				<div class="chat-input">      
					<form>
						<input type="text" id="chat-input" placeholder="Send a message..."/>
						<button type="submit" class="chat-submit" id="chat-submit">
							<span class="icon-Send fs-22"></span>
						</button>
					</form>      
				</div>
			</div>
		</div>
		
		<!-- Page Content overlay -->
		
		
@endsection
