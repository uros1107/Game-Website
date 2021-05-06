<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">@yield('title')</h2>
                <div class="breadcrumb-wrapper col-12">
                    @if(@isset($breadcrumbs))
                    <ol class="breadcrumb">
                        {{-- this will load breadcrumbs dynamically from controller --}}
                        @foreach ($breadcrumbs as $breadcrumb)
                        <li class="breadcrumb-item">
                            @if(isset($breadcrumb['link']))
                            <a href="{{ $breadcrumb['link'] }}">
                                @endif{{$breadcrumb['name']}}@if(isset($breadcrumb['link'])) </a>
                            @endif
                        </li>
                        @endforeach
                    </ol>
                    @endisset
                </div>
            </div>
        </div>
    </div>

    @if(isset($user_management))
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrum-right">
            <div class="dropdown">
                <!-- <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div> -->
                <button type="button" class="btn" style="background: #7367f0;color:#ebeefd" data-toggle="modal"
                    data-target="#inlineForm">Add User</button>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('create-user') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label>Name: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control" required>
                        </div>

                        <label>Email: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Email Address" name="email" class="form-control" required>
                        </div>

                        <label>Password: </label>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required>
                        </div>

                        <label>Game Name: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Game Name" name="game_name" class="form-control" required>
                        </div>

                        <label>Guild Name: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Guild Name" name="guild_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>