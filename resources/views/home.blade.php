@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-5">
                        <h1 class="display-6 fw-bold">Welcome back, {{ auth()->user()->name }} 👋</h1>
                        <p class="text-muted">Here's your latest activity summary</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card border-0 bg-primary text-white h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-bar-ch-line fs-1"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0">Monthly Progress</h5>
                                            <p class="h2 mt-2 mb-0">75%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 bg-success text-white h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-check-circle fs-1"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0">Completed Tasks</h5>
                                            <p class="h2 mt-2 mb-0">24</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 bg-warning text-dark h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="bi bi-clock-history fs-1"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0">Pending Tasks</h5>
                                            <p class="h2 mt-2 mb-0">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h4 class="mb-4">Recent Activities</h4>
                        <div class="list-group">
                            <div class="list-group-item border-0 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-3"></i>
                                Completed task "Design Homepage"
                            </div>
                            <div class="list-group-item border-0 d-flex align-items-center">
                                <i class="bi bi-file-earmark-plus-fill text-primary me-3"></i>
                                Created new project "Mobile App"
                            </div>
                            <div class="list-group-item border-0 d-flex align-items-center">
                                <i class="bi bi-chat-dots-fill text-info me-3"></i>
                                Received new message from John
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection