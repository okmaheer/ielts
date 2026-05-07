{{-- Sticky Footer Ad — fixed slim banner at bottom of every page, dismissible --}}
<style>
    #sticky-footer-ad {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background: #fff;
        border-top: 2px solid #e0e0e0;
        box-shadow: 0 -2px 8px rgba(0,0,0,0.10);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90px !important;
        max-height: 90px !important;
        overflow: hidden !important;
        padding: 0;
    }
    #sticky-footer-ad .ad-inner {
        width: 728px;
        max-width: 100%;
        height: 90px;
        overflow: hidden;
        position: relative;
    }
    /* Force the AdSense iframe to stay within bounds */
    #sticky-footer-ad ins,
    #sticky-footer-ad iframe {
        max-height: 90px !important;
        height: 90px !important;
    }
    #sticky-footer-ad .sticky-ad-close {
        position: absolute;
        top: 4px;
        right: 6px;
        z-index: 10000;
        background: #efefef;
        border: none;
        border-radius: 50%;
        width: 22px;
        height: 22px;
        font-size: 12px;
        line-height: 22px;
        text-align: center;
        cursor: pointer;
        color: #444;
        padding: 0;
        flex-shrink: 0;
    }
    #sticky-footer-ad .sticky-ad-close:hover { background: #ccc; }

    body.has-sticky-ad { padding-bottom: 90px; }

    /* Mobile: slim 50px banner */
    @media (max-width: 767px) {
        #sticky-footer-ad,
        #sticky-footer-ad ins,
        #sticky-footer-ad iframe {
            height: 60px !important;
            max-height: 60px !important;
        }
        #sticky-footer-ad .ad-inner {
            height: 60px;
            width: 100%;
        }
        body.has-sticky-ad { padding-bottom: 60px; }
    }
</style>

<div id="sticky-footer-ad">
    <button class="sticky-ad-close" onclick="closeStickyAd()" title="Close">&#x2715;</button>
    <div class="ad-inner">
        <ins class="adsbygoogle"
             style="display:block; width:100%; height:90px;"
             data-ad-client="ca-pub-2263600332188384"
             data-ad-slot="8198386964"
             data-ad-format="horizontal"
             data-full-width-responsive="false"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
</div>

<script>
    document.body.classList.add('has-sticky-ad');
    function closeStickyAd() {
        var el = document.getElementById('sticky-footer-ad');
        if (el) {
            el.style.display = 'none';
            document.body.classList.remove('has-sticky-ad');
        }
    }
</script>
