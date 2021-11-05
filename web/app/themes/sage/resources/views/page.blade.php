@extends('layouts.app')

@section('content')
    @php($flexible = get_field('flex_content'))
    @if($flexible)
        @foreach ($flexible as $flex)

            @if($flex['acf_fc_layout'] == 'splash')
                <x-splash :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'about')
                <x-about :flex="$flex" />
            @endif

            @if($flex['acf_fc_layout'] == 'portfolio')
                <x-portfolio :flex="$flex" />
            @endif

        @endforeach

    @endif
@endsection
