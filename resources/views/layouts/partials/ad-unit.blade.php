@php
    /*
     * Ad Unit Partial
     * Usage: @include('layouts.partials.ad-unit', ['slot' => 'horizontal'])
     *        @include('layouts.partials.ad-unit', ['slot' => 'vertical'])
     *
     * Slots:
     *   horizontal  — 728×90 leaderboard, used between test passages
     *   vertical    — 160×600 wide skyscraper, used in listening sidebar
     */
    $slot = $slot ?? 'horizontal';
@endphp

@if ($slot === 'horizontal')
<div class="ad-unit ad-unit--horizontal" style="margin: 8px 0;">
    <ins class="adsbygoogle"
         style="display:block; width:728px; height:90px;"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7282407453"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

@elseif ($slot === 'vertical')
<div class="ad-unit ad-unit--vertical" style="margin: 8px 0;">
    <ins class="adsbygoogle"
         style="display:inline-block; width:300px; height:600px;"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7442189556"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
@endif
