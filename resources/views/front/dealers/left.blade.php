<div class="row product-left">
    <h1>Dealers</h1>
    <ul >
        @foreach($dealers as $state)
            <li class="product-left-has-sub">
                <a href="{{url('dealers/'.$state[0]->full_state_slug)}}" class="{{Request::is('dealers/'.$state[0]->full_state_slug) ? 'active' : ''}}">{{$state[0]->full_state}}</a>
            </li>
        @endforeach
    </ul>
</div>



