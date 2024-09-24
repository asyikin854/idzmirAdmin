@extends('layouts.simple.master')
@section('title', 'To-Do')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/todo.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>To-Do</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item active">To-Do</li>
@endsection

@section('content')
    <div class="container-fluid email-wrap bookmark-wrap todo-wrap">
        <div class="row">
            <div class="col-xl-3 xl-30 box-col-12">
                <div class="email-sidebar md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">To Do
                        filter</a>
                    <div class="email-left-aside md-sidebar-aside">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-app-sidebar left-bookmark custom-scrollbar">
                                    <div class="d-flex align-items-center">
                                        <div class="media-size-email"><img class="me-3 img-40 rounded-circle"
                                                src="{{ asset('assets/images/user/user.png') }}" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-600">Mark Jecno</h6>
                                            <p>Markjecno@gmail.com</p>
                                        </div>
                                    </div>
                                    <ul class="nav main-menu">
                                        <li class="nav-item">
                                            <button class="btn-primary badge-light d-block btn-mail w-100"><i class="me-2"
                                                    data-feather="check-circle"> </i>To Do List</button>
                                        </li>
                                        <li class="nav-item"> <a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-primary"><i
                                                        data-feather="file-plus"></i></span><span class="title ms-2">All
                                                    Task</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-success"><i
                                                        data-feather="check-circle"></i></span><span
                                                    class="title ms-2">Completed</span><span
                                                    class="badge badge-success">3</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-danger"><i
                                                        data-feather="cast"></i></span><span
                                                    class="title ms-2">Pending</span><span
                                                    class="badge badge-danger">2</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-info"><i
                                                        data-feather="activity"></i></span><span class="title ms-2">In
                                                    Process</span><span class="badge badge-primary">2</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0)"><span
                                                    class="iconbg badge-light-danger"><i
                                                        data-feather="trash"></i></span><span
                                                    class="title ms-2">Trash</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 xl-70 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">To-Do</h3>
                    </div>
                    <div class="card-body">
                        <div class="todo">
                            <div class="todo-list-wrapper">
                                <div class="todo-list-container">
                                    <div class="mark-all-tasks">
                                        <div class="mark-all-tasks-container"><span class="mark-all-btn"
                                                id="mark-all-finished" role="button"><span class="btn-label">Mark all as
                                                    finished</span><span class="action-box completed"><i class="icon"><i
                                                            class="icon-check"></i></i></span></span><span
                                                class="mark-all-btn move-down" id="mark-all-incomplete" role="button"><span
                                                    class="btn-label">Mark all as Incomplete</span><span
                                                    class="action-box"><i class="icon"><i
                                                            class="icon-check"></i></i></span></span></div>
                                        <div class="todo-list-footer ms-2">
                                            <div class="add-task-btn-wrapper"><span class="add-task-btn">
                                                    <button class="btn btn-primary"><i class="icon-plus"></i> Add new
                                                        task</button></span></div>
                                        </div>
                                    </div>
                                    <div class="todo-list-body">
                                        <div class="todo-list-footer">
                                            <div class="new-task-wrapper mb-4">
                                                <textarea id="new-task" placeholder="Enter new task here. . ."></textarea><span class="btn btn-danger cancel-btn"
                                                    id="close-task-panel">Close</span><span
                                                    class="btn btn-success ms-3 add-new-task-btn" id="add-task">Add
                                                    Task</span>
                                            </div>
                                        </div>
                                        <ul id="todo-list">
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Check validation involves making sure all your
                                                        tags are properly closed and nested.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-primary">In Progress</span>
                                                        <h5 class="assign-name m-0">10 Nov</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Test the outgoing links from all the pages to
                                                        the specific domain under test.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">04 Aug</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="completed task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Test links are used to send emails to admin or
                                                        other users from web pages.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-success">Done</span>
                                                        <h5 class="assign-name m-0">25 Feb</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Options to create forms, if any, form deletes a
                                                        view or modify the forms.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-primary">In Progress</span>
                                                        <h5 class="assign-name m-0">15 Dec</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Wrong inputs in the forms to the fields in the
                                                        forms.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">11 Nov</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task completed">
                                                <div class="task-container">
                                                    <h4 class="task-label">Check if the instructions provided are perfect
                                                        to satisfy its purpose.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-danger">Pending</span>
                                                        <h5 class="assign-name m-0">04 Sept</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task">
                                                <div class="task-container">
                                                    <h4 class="task-label">Application server and Database server
                                                        interface.</h4>
                                                    <div class="d-flex align-items-center gap-4"><span
                                                            class="badge badge-light-success">Done</span>
                                                        <h5 class="assign-name m-0">08 July</h5><span
                                                            class="task-action-btn"><span
                                                                class="action-box large delete-btn" title="Delete Task"><i
                                                                    class="icon"><i
                                                                        class="icon-trash"></i></i></span><span
                                                                class="action-box large complete-btn"
                                                                title="Mark Complete"><i class="icon"><i
                                                                        class="icon-check"></i></i></span></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-popup hide">
                                <p><span class="task"></span><span class="notification-text"></span></p>
                            </div>
                        </div>
                        <!-- HTML Template for tasks-->
                        <script id="task-template" type="tect/template">
			  <li class="task">
				<div class="task-container">
				  <h4 class="task-label"></h4>
				  <div class="d-flex align-items-center gap-4">
					<span class="badge badge-light-danger">Pending</span>
					<h5 class="assign-name">16 Jan</h5>
					<span class="task-action-btn">
					  <span class="action-box large delete-btn" title="Delete Task">
						<i class="icon"><i class="icon-trash"></i></i>
					  </span>
					  <span class="action-box large complete-btn" title="Mark Complete">
						<i class="icon"><i class="icon-check"></i></i>
					  </span>
					</span>
				  </div>
				</div>
			  </li>
			</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/todo/todo.js') }}"></script>
@endsection
