@php
    /*
     * Responsive Ad Unit Partial — no fixed dimensions, AdSense auto-sizes.
     *
     * Usage:
     *   @include('layouts.partials.ad-unit', ['slot' => 'banner'])      — leaderboard between test parts/passages
     *   @include('layouts.partials.ad-unit', ['slot' => 'result'])      — post-test / results pages
     *   @include('layouts.partials.ad-unit', ['slot' => 'in-content'])  — in-content on listing pages
     *   @include('layouts.partials.ad-unit', ['slot' => 'multiplex'])   — related-content / multiplex grid
     *
     * Kill switch: set ADS_ENABLED=false in .env to hide all ads.
     * Ad slot IDs: create units at https://adsense.google.com/adsense/u/0/pub-2263600332188384/myads/units
     */
    $slot = $slot ?? 'banner';
    $client = config('ads.client', 'ca-pub-2263600332188384');
@endphp

@if (!config('ads.enabled'))
{{-- ads disabled --}}
@elseif ($slot === 'banner')
<div class="ad-unit-wrap" style="text-align:center; padding: 12px 0; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="{{ $client }}"
         data-ad-slot="7282407453"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif ($slot === 'result')
<div class="ad-unit-wrap" style="text-align:center; padding: 12px 0; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="{{ $client }}"
         data-ad-slot="7442189556"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif ($slot === 'in-content')
<div class="ad-unit-wrap my-4" style="text-align:center; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="{{ $client }}"
         data-ad-slot="9656135372"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif ($slot === 'multiplex')
<div class="ad-unit-wrap my-4" style="overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="{{ $client }}"
         data-ad-slot="8594335148"
         data-ad-format="autorelaxed"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif ($slot === 'sidebar')
<div class="ad-unit-wrap" style="text-align:center; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block; min-width:250px; min-height:250px;"
         data-ad-client="{{ $client }}"
         data-ad-slot="9656135372"
         data-ad-format="auto"></ins>
    <script>
    window.addEventListener('load', function() {
        (adsbygoogle = window.adsbygoogle || []).push({});
    });
    </script>
</div>

@elseif ($slot === 'listing-bottom')
<div class="ad-unit-wrap my-4" style="text-align:center; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="{{ $client }}"
         data-ad-slot="2737320495"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
@endif
