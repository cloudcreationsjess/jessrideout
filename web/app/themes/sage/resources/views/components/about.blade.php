<section class="component about" id="about" style="background-image: url('{{ $flex['background'] }}')">
    <div class="container">
        @if($flex['menu'])
            <nav class="about--nav" role="tablist">
                <ul>
                    @foreach($flex['menu'] as $item)
                        <li>
                            <button type="button"
                                role="tab"
                                class="js--tab-nav-btn @if($loop->first) active @endif"
                                data-tabid="{{ str_replace(' ', '-', strtolower($item['menu_item']['title'])) }}"
                            >{{ $item['menu_item']['title'] }}</button>
                        </li>
                    @endforeach
                </ul>
            </nav>
    </div>
    <div class="container">
        @foreach($flex['menu'] as $item)
            <div class="js--tab about-tabs @if($loop->first) active @endif"
                role="tabpanel"
                id="{{ str_replace(' ', '-', strtolower($item['menu_item']['title'])) }}-tab"
            >
                @foreach($item['menu_item']['content'] as $content)

                    @if( $content['acf_fc_layout'] == "paragraph" )
                        <div class="about__content">
                            {!! $content['paragraph'] !!}
                            <a href="{{ $content['file'] }}" target="_blank">Download my full resume.pdf</a>
                        </div>
                    @endif

                    @if($content['acf_fc_layout'] == "list")
                        <div class="about__list">
                            <ul>
                                @foreach($content['list'] as $listitem)
                                    <li>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                {!! $listitem['title'] !!}
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="progress-bar">
                                                    <div class="progress-bar__progress" style="width:{{ $listitem['progress'] }};"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if($content['acf_fc_layout'] == "icon_list")
                        <div class="about__icon-list">
                            @foreach($content['icon_list'] as $item)
                                <div class="about__icon-list--icon">
                                    {!! $item['title'] !!}
                                    <img src="{{ $item['icon'] }}" alt="skillset icon">
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
    </div>
    @endif
    <div class="col-lg-6">
        <div class="splash-content-col-2">
        </div>
    </div>
    </div>
    </div>
</section>
