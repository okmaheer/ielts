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
<div class="ad-unit ad-unit--horizontal" style="
    width: 100%;
    min-height: 90px;
    background: #f8f9fa;
    border: 1px dashed #dee2e6;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #adb5bd;
    font-size: 12px;
    letter-spacing: .5px;
    overflow: hidden;
    margin: 8px 0;
">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7282407453"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

</div>

@elseif ($slot === 'vertical')
<div class="ad-unit ad-unit--vertical" style="
    width: 100%;
    min-height: 400px;
    background: #f8f9fa;
    border: 1px dashed #dee2e6;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #adb5bd;
    font-size: 12px;
    letter-spacing: .5px;
    overflow: hidden;
    position: sticky;
    top: 80px;
">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2263600332188384"
         data-ad-slot="7442189556"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

</div>
@endif
