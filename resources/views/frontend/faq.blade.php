@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | FAQ
@endsection

@section('orders')
    current
@endsection


@section('content')
    <div class="main-container">
        <div class="main container">
                <div class="row">
                  <div class="col-md-10 mx-auto dis-float">
                      <div class="faq_header">
                          <h1 class="faq_header__title">How can we help you?</h1>
                      </div>
                        <div class="faq-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              @foreach ($faqs as $faq)
                                <div class="panel panel--style panel-default"> 
                                  <div class="panel-heading bg-transparent accordion-tab--area" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                      <a class="acordion__btn collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        {{ $faq->question }}
                                      </a>
                                    </h4>
                                  </div> 
                                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body panel--content">
                                      {!! $faq->answer !!} 
                                    </div>
                                  </div>
                                </div>
                              @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection