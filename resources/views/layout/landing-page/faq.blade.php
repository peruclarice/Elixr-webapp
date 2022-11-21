<!-- 
This layout describes the landing page faq section
All changes for the faq section can be made here and only content concerning 
faq should be added here
-->


<div class="container" id="faq">
    <div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
        <div class="app__inner">
            <div class="app__content">
                <h2>FAQs</h2>
                <p>Here are some of the commonly asked question about Elixr</p>
            </div>
        </div>
    </div>
    <div class="section__wrapper">

        <div class="row g-4 justify-content-center align-items-center py-1 pb-5 flx-rev">
            
            <div class="col-lg-8 wow fadeInDown" data-wow-duration="1.5s">
                <div class="accordion " id="accordionExample">
                    
                    @foreach ($data as $response)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingId{{$loop->index}}">
                          <button class="accordion-button
                            @if ($loop->index ==0)
                                
                            @else
                                collapsed
                            @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$loop->index}}" 
                           aria-expanded="false" 
                           aria-controls="collapseTwo{{$loop->index}}">
                              {{$response['Question']}}
                          </button>
                        </h2>
                        <div id="collapseTwo{{$loop->index}}" class="accordion-collapse collapse
                            @if ($loop->index ==0)
                                show
                            @endif
                            " aria-labelledby="headingId{{$loop->index}}" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            {{$response['Answer']}}
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
            </div>
        </div>

    </div>
</div>
