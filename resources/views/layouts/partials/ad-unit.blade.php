@php
    /*
     * Responsive Ad Unit Partial — no fixed dimensions, AdSense auto-sizes.
     *
     * Usage:
     *   @include('layouts.partials.ad-unit', ['slot' => 'banner'])   — top/between-section leaderboard
     *   @include('layouts.partials.ad-unit', ['slot' => 'result'])   — post-test / results pages
     *
     * Kill switch: set ADS_ENABLED=false in .env to hide all ads.
     */
    $slot = $slot ?? 'banner';
@endphp

@if (config('ads.enabled') && $slot === 'banner')
<div class="ad-unit-wrap" style="text-align:center; padding: 12px 0; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7282407453"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif (config('ads.enabled') && $slot === 'result')
<div class="ad-unit-wrap" style="text-align:center; padding: 12px 0; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7442189556"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
@endif
