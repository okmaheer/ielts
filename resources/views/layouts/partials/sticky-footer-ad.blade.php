{{--
    Sticky Footer Ad — fixed at bottom of every page, dismissible.
    AdSense unit to create: Display > Responsive, name it "Sticky Footer"
    Replace data-ad-slot below with the new slot ID you get from AdSense.
--}}
<style>
    #sticky-footer-ad {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background: #fff;
        border-top: 1px solid #e0e0e0;
        box-shadow: 0 -2px 8px rgba(0,0,0,0.10);
        text-align: center;
        padding: 4px 36px 4px 4px;
        height: 60px;
        max-height: 60px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #sticky-footer-ad .sticky-ad-close {
        position: absolute;
        top: 4px;
        right: 8px;
        background: #f1f1f1;
        border: none;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        font-size: 13px;
        line-height: 24px;
        text-align: center;
        cursor: pointer;
        color: #555;
        padding: 0;
    }
    #sticky-footer-ad .sticky-ad-close:hover {
        background: #ddd;
        color: #000;
    }
    #sticky-footer-ad .ad-inner {
        width: 100%;
        max-width: 728px;
        overflow: hidden;
    }
    /* Push page content up so sticky ad doesn't cover it */
    body.has-sticky-ad {
        padding-bottom: 64px;
    }
</style>

<div id="sticky-footer-ad">
    <button class="sticky-ad-close" onclick="closeStickyAd()" title="Close ad">&#x2715;</button>
    <div class="ad-inner">
        <ins class="adsbygoogle"
             style="display:inline-block; width:100%; height:50px;"
             data-ad-client="ca-pub-2263600332188384"
             data-ad-slot="8198386964"
             data-ad-format="horizontal"
             data-full-width-responsive="true"></ins>
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
