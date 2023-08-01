<div class="row product-left">
    <ul >
        @foreach($cates as $item)
            <li class="product-left-has-sub @if($item->slug == 'discontinued-items') hide @endif">
                <a href="{{url($item->slug)}}" class="{{Request::is($item->slug) || Request::is('*'.$item->slug.'*') ? 'active' : ''}}">{{$item->title}}</a>
            </li>
        @endforeach
    </ul>
</div>
