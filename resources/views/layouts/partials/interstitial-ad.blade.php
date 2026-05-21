{{-- Page-transition interstitial ad overlay --}}
{{-- Shows for 5 seconds when navigating between internal pages, then redirects. --}}
@if (config('ads.enabled'))
<style>
    #ipp-interstitial {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 99999;
        background: rgba(0, 0, 0, 0.82);
        align-items: center;
        justify-content: center;
    }
    #ipp-interstitial.is-visible {
        display: flex;
    }
    #ipp-interstitial-box {
        background: #fff;
        border-radius: 12px;
        padding: 24px;
        width: min(520px, 92vw);
        max-height: 90vh;
        overflow: hidden;
        position: relative;
        box-shadow: 0 20px 60px rgba(0,0,0,0.4);
        text-align: center;
    }
    #ipp-interstitial-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
    }
    #ipp-interstitial-label {
        font-size: 11px;
        color: #9ca3af;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    #ipp-interstitial-skip {
        background: #f3f4f6;
        border: none;
        border-radius: 20px;
        padding: 5px 14px;
        font-size: 12px;
        font-weight: 600;
        color: #374151;
        cursor: pointer;
        white-space: nowrap;
        transition: background 0.15s;
    }
    #ipp-interstitial-skip:hover { background: #e5e7eb; }
    #ipp-interstitial-countdown {
        display: inline-block;
        background: #06BBCC;
        color: #fff;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        line-height: 24px;
        font-size: 12px;
        font-weight: 700;
        margin-right: 6px;
    }
    #ipp-interstitial-ad-wrap {
        min-height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div id="ipp-interstitial" role="dialog" aria-modal="true" aria-label="Advertisement">
    <div id="ipp-interstitial-box">
        <div id="ipp-interstitial-header">
            <span id="ipp-interstitial-label">Advertisement</span>
            <button id="ipp-interstitial-skip" onclick="ippInterstitialSkip()">
                <span id="ipp-interstitial-countdown">5</span> Skip
            </button>
        </div>
        <div id="ipp-interstitial-ad-wrap">
            <ins class="adsbygoogle"
                 style="display:block;width:100%;"
                 data-ad-client="{{ config('ads.client', 'ca-pub-2263600332188384') }}"
                 data-ad-slot="9656135372"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
        </div>
    </div>
</div>

<script>
(function () {
    'use strict';

    var _destUrl   = null;
    var _timer     = null;
    var _remaining = 5;
    var _adPushed  = false;

    /* Only show once per 2 minutes across navigations */
    var COOLDOWN_MS = 120000;
    var STORAGE_KEY = 'ipp_intl_last';

    function canShow() {
        try {
            var last = parseInt(sessionStorage.getItem(STORAGE_KEY) || '0', 10);
            return Date.now() - last > COOLDOWN_MS;
        } catch (e) { return true; }
    }

    function markShown() {
        try { sessionStorage.setItem(STORAGE_KEY, String(Date.now())); } catch (e) {}
    }

    function isInternal(href) {
        try {
            var a = document.createElement('a');
            a.href = href;
            return a.hostname === window.location.hostname;
        } catch (e) { return false; }
    }

    function shouldIntercept(anchor) {
        if (!anchor || !anchor.href) return false;
        if (anchor.target === '_blank') return false;
        if (anchor.hasAttribute('data-no-interstitial')) return false;
        if (!isInternal(anchor.href)) return false;
        /* Skip anchors on the same page */
        var a = document.createElement('a');
        a.href = anchor.href;
        if (a.pathname === window.location.pathname && a.search === window.location.search) return false;
        return true;
    }

    function startCountdown() {
        var el = document.getElementById('ipp-interstitial-countdown');
        _remaining = 5;
        if (el) el.textContent = _remaining;

        _timer = setInterval(function () {
            _remaining--;
            if (el) el.textContent = Math.max(_remaining, 0);
            if (_remaining <= 0) {
                clearInterval(_timer);
                ippInterstitialRedirect();
            }
        }, 1000);
    }

    function showInterstitial(url) {
        _destUrl = url;
        var overlay = document.getElementById('ipp-interstitial');
        if (!overlay) return;
        overlay.classList.add('is-visible');
        markShown();

        /* Push ad only once per page load */
        if (!_adPushed) {
            _adPushed = true;
            try { (window.adsbygoogle = window.adsbygoogle || []).push({}); } catch (e) {}
        }
        startCountdown();
    }

    window.ippInterstitialSkip = function () {
        clearInterval(_timer);
        ippInterstitialRedirect();
    };

    window.ippInterstitialRedirect = function () {
        var overlay = document.getElementById('ipp-interstitial');
        if (overlay) overlay.classList.remove('is-visible');
        if (_destUrl) window.location.href = _destUrl;
    };

    document.addEventListener('click', function (e) {
        var anchor = e.target.closest('a');
        if (!anchor) return;
        if (!shouldIntercept(anchor)) return;
        if (!canShow()) return;
        e.preventDefault();
        showInterstitial(anchor.href);
    });
})();
</script>
@endif
