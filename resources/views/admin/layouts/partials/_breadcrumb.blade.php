<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">{{$title}}</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @foreach($crumbs as $crumb)
                            @if($active == $crumb)
                                <li class="breadcrumb-item active" aria-current="page">{{$crumb}}</li>
                            @else
                                <li class="breadcrumb-item"><a href="#">{{$crumb}}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>