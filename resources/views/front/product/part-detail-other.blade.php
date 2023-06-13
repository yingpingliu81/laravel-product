<ul class="nav nav-tabs" id="myTab" role="tablist">
    @if($product->description)
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" href="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</a>
        </li>
    @endif
    @if($product->feature)
        <li class="nav-item" role="presentation">
            <a class="nav-link @if(!$product->description) active @endif" id="features-tab" data-bs-toggle="tab" data-bs-target="#features"  href="#features" type="button" role="tab" aria-controls="features" aria-selected="true">Features</a>
        </li>
    @endif
    @if($product->specification)
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" href="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="true">Specifications</a>
        </li>
    @endif
    @if($product->package)
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="parts-tab" data-bs-toggle="tab" data-bs-target="#parts" href="#parts"  type="button" role="tab" aria-controls="parts" aria-selected="true">PARTS INCLUDED</a>
        </li>
    @endif
    @if($product->downloads)
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" href="#resources"  type="button" role="tab" aria-controls="resources" aria-selected="true">Resources</a>
        </li>
    @endif
</ul>
<div class="tab-content" id="myTabContent">
    @if($product->description)
        <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="desc">
                {!! $product->description !!}
            </div>
        </div>
    @endif
    @if($product->feature)
        <div class="tab-pane fade @if(!$product->description) active show @endif" id="features" role="tabpanel" aria-labelledby="features-tab">
            <div class="feature">
                {!! $product->feature !!}
            </div>
        </div>
    @endif
    @if($product->specification)
        <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
            <div class="specifications">
                {!! $product->specification !!}
            </div>
        </div>
    @endif
    @if($product->package)
        <div class="tab-pane fade" id="parts" role="tabpanel" aria-labelledby="parts-tab">
            <div class="feature">
                {!! $product->package !!}
            </div>
        </div>
    @endif
    @if($product->downloads)
        <div class="tab-pane fade" id="resources" role="tabpanel" aria-labelledby="resources-tab">
            <div class="specifications">
                <ul class="time-list">
                    @foreach($product->downloads ?? []  as $download)
                        <li class="time-item ">
                            <div class="name"><a title="Commercial Solar Roof Ventilation Fan" target="_blank" href="{{url($download)}}">PDF Download <span class="fa fa-download"></span></a>                                            </div>
                            <div class="date">{{basename($download,'.pdf')}}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
