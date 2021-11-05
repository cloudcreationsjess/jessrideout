<section class="component splash" id="splash" style="background-image: url('{{ $flex['background'] }}')">
    <div class="container">
        <div class="row">
            @if($flex['col_1'])
                <div class="col-lg-6">
                    <div class="splash-content-col-1 fade-in">
                        @foreach($flex['col_1'] as $col)
                            @if($col["acf_fc_layout"] == "title")
                                <h1>{!! $col['title'] !!}</h1>
                            @endif
                            @if($col["acf_fc_layout"] == "job")
                            <div class="splash--job-title">
                                    {!! $col['job'] !!}
                            </div>
                            @endif
                            @if($col["acf_fc_layout"] == "qualities")
                                {!! $col['qualities'] !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="col-lg-6">
                <div class="splash-content-col-2">
                    {{ the_image($flex['image']) }}
                </div>
            </div>
        </div>
    </div>
</section>
