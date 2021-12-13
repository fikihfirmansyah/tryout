@extends('store.layout')

@section('title', $siteSettings->tag_line)

@section('content')
    <!--TopBar-->
    @if($homePageSettings->enable_top_bar)
        <x-top-bar/>
    @endif

    <!--NavBar-->
    @include('store.navbar')

    <!--Hero-->
    @if($homePageSettings->enable_hero)
        <x-hero/>
    @endif

    <!--Features-->
    @if($homePageSettings->enable_features)
        <x-features/>
    @endif

    <!--Categories-->
    @if($homePageSettings->enable_categories)
        <x-categories/>
    @endif

    <!--Stats-->
    @if($homePageSettings->enable_stats)
        <x-stats/>
    @endif

    <!--Testimonials-->
    @if($homePageSettings->enable_testimonials)
        <x-testimonials/>
    @endif

    <!--CTA-->
    @if($homePageSettings->enable_cta)
        <x-cta/>
    @endif

    <!--Footer-->
    @if($homePageSettings->enable_footer)
        <x-footer/>
    @endif
@endsection
