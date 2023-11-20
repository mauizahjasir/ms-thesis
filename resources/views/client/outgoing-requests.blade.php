@extends('layouts.app')

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('client.topbar')
    <div class="app-main">
        @include('client.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @include('alert')
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">My Outgoing Requests</div>
                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Request for</th>
                                        <th>Owner's Approval</th>
                                    </tr>
                                    </thead>

                                    @foreach ($requests as $request)
                                        <tr>
                                            <td>{{ $request->asset }}</td>
                                            <td>
                                                @if($request->status === \App\Models\AssetsRequest::AWAITING_OWNER_APPROVAL)
                                                    <div class="badge badge-warning">Pending</div>
                                                @else
                                                    <div class="badge badge-success">Done</div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </div>
</div>
</body>
