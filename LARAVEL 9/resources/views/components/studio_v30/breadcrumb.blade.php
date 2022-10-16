<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('Dashboard.index')}}">
            Dashboard
        </a>
    </li>
    <li class="breadcrumb-item ">
        <a href="{{$link2}}">
            {{$level2}}
        </a>
    </li>
    <li class="breadcrumb-item active">
        {{ucwords($level3)}}
    </li>
</ul>   