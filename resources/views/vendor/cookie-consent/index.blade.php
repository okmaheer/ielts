@if($cookieConsentConfig['enabled'] && ! $alreadyConsentedWithCookies)

    @include('cookie-consent::dialogContents')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            window.laravelCookieConsent = (function () {

                const COOKIE_VALUE = 1;
                const COOKIE_DOMAIN = '{{ config('session.domain') ?? request()->getHost() }}';
                
                const popupElement = document.getElementById('cookieConsentPopup');

                function consentWithCookies() {
                    // Accept all cookies
                    const preferences = {
                        essential: true,
                        analytics: true,
                        marketing: true,
                        functional: true
                    };
                    setCookiePreferences(preferences);
                    setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE, {{ $cookieConsentConfig['cookie_lifetime'] }});
                    hideCookieDialog();
                }

                function declineCookies() {
                    // Only essential cookies
                    const preferences = {
                        essential: true,
                        analytics: false,
                        marketing: false,
                        functional: false
                    };
                    setCookiePreferences(preferences);
                    setCookie('{{ $cookieConsentConfig['cookie_name'] }}', 0, {{ $cookieConsentConfig['cookie_lifetime'] }});
                    hideCookieDialog();
                }

                function saveCookiePreferences() {
                    const preferences = {
                        essential: true, // Always true
                        analytics: document.getElementById('analyticsCookies').checked,
                        marketing: document.getElementById('marketingCookies').checked,
                        functional: document.getElementById('functionalCookies').checked
                    };
                    
                    setCookiePreferences(preferences);
                    setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE, {{ $cookieConsentConfig['cookie_lifetime'] }});
                    
                    // Close modal and hide popup
                    const modal = bootstrap.Modal.getInstance(document.getElementById('cookieSettingsModal'));
                    modal.hide();
                    hideCookieDialog();
                    
                    // Show success message
                    alert('Your cookie preferences have been saved!');
                }

                function setCookiePreferences(preferences) {
                    setCookie('cookie_preferences', JSON.stringify(preferences), {{ $cookieConsentConfig['cookie_lifetime'] }});
                    
                    // Here you can load/unload scripts based on preferences
                    console.log('Cookie preferences saved:', preferences);
                    
                    // Example: Load analytics only if enabled
                    if (preferences.analytics) {
                        console.log('Analytics cookies enabled - load analytics scripts');
                        // loadAnalyticsScripts();
                    }
                    
                    if (preferences.marketing) {
                        console.log('Marketing cookies enabled - load marketing scripts');
                        // loadMarketingScripts();
                    }
                    
                    if (preferences.functional) {
                        console.log('Functional cookies enabled - load functional scripts');
                        // loadFunctionalScripts();
                    }
                }

                function cookieExists(name) {
                    return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
                }

                function showCookieDialog() {
                    if (popupElement) {
                        popupElement.style.display = 'block';
                        setTimeout(() => {
                            popupElement.classList.add('show');
                        }, 50);
                    }
                }

                function hideCookieDialog() {
                    if (popupElement) {
                        popupElement.classList.remove('show');
                        setTimeout(() => {
                            popupElement.style.display = 'none';
                        }, 400);
                    }
                }

                function setCookie(name, value, expirationInDays) {
                    const date = new Date();
                    date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                    document.cookie = name + '=' + value
                        + ';expires=' + date.toUTCString()
                        + ';domain=' + COOKIE_DOMAIN
                        + ';path=/{{ config('session.secure') ? ';secure' : null }}'
                        + '{{ config('session.same_site') ? ';samesite='.config('session.same_site') : null }}';
                }

                // Show popup if no consent given
                if (!cookieExists('{{ $cookieConsentConfig['cookie_name'] }}')) {
                    setTimeout(showCookieDialog, 1500);
                }

                // Event listeners
                document.addEventListener('click', function(e) {
                    if (e.target.classList.contains('js-cookie-consent-agree')) {
                        e.preventDefault();
                        consentWithCookies();
                    }
                    
                    if (e.target.classList.contains('js-cookie-decline')) {
                        e.preventDefault();
                        declineCookies();
                    }
                    
                    if (e.target.id === 'saveCookiePreferences') {
                        e.preventDefault();
                        saveCookiePreferences();
                    }
                });

                return {
                    consentWithCookies: consentWithCookies,
                    declineCookies: declineCookies,
                    hideCookieDialog: hideCookieDialog,
                    showCookieDialog: showCookieDialog,
                    saveCookiePreferences: saveCookiePreferences
                };
            })();
            
        });
    </script>

@endif