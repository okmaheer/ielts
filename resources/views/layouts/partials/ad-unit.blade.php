@php
    /*
     * Responsive Ad Unit Partial — no fixed dimensions, AdSense auto-sizes.
     *
     * Usage:
     *   @include('layouts.partials.ad-unit', ['slot' => 'banner'])   — top/between-section leaderboard
     *   @include('layouts.partials.ad-unit', ['slot' => 'result'])   — post-test / results pages
     *
     * How many AdSense units to create:
     *   1. "Banner – Browsing Pages"  → data-ad-slot="7282407453"  (homepage, test listing)
     *   2. "Result – Post Test"       → data-ad-slot="7442189556"  (score, correct answers)
     *   Both should be created as "Display > Responsive" in your AdSense dashboard.
     */
    $slot = $slot ?? 'banner';
@endphp

@if ($slot === 'banner')
<div class="ad-unit-wrap" style="text-align:center; padding: 12px 0; overflow:hidden;">
    <ins class="adsbygoogle"
         style="display:block;"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7282407453"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif ($slot === 'result')
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
