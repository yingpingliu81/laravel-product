<div class="row product-left">
    <ul >
        @foreach($cates as $item)
            <li class="product-left-has-sub">
                <a href="{{url('product/accessories/'.$item->slug)}}" class="{{Request::is('product/accessories/'.$item->slug) || Request::is('*'.$item->slug.'*') ? 'active' : ''}}">{{$item->title}}</a>
            </li>
        @endforeach
    </ul>
</div>
