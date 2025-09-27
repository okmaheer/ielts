{{-- resources/views/vendor/cookie-consent/dialogContents.blade.php --}}

<!-- Cookie Consent Sticky Popup -->
<div class="js-cookie-consent cookie-consent-popup" id="cookieConsentPopup" style="display: none;">
    <div class="cookie-popup-container">
        <!-- Header -->
        <div class="cookie-popup-header">
            <div class="d-flex align-items-center">
                <div class="cookie-popup-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="ms-2">
                    <h6 class="mb-0 text-white fw-bold">Privacy & Cookies</h6>
                </div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="cookie-popup-body">
            <div class="d-flex">
                <div class="me-3">
                    <span class="cookie-emoji">🍪</span>
                </div>
                <div class="flex-grow-1">
                    <p class="cookie-popup-text cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Actions -->
        <div class="cookie-popup-footer">
            <div class="d-flex justify-content-between align-items-center w-100">
                <button type="button" class="btn btn-link text-muted p-0 js-cookie-decline" style="font-size: 12px; text-decoration: none;">
                    Decline
                </button>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-outline-info btn-sm cookie-settings-btn" data-bs-toggle="modal" data-bs-target="#cookieSettingsModal">
                        Settings
                    </button>
                    <button type="button" class="btn btn-info btn-sm js-cookie-consent-agree cookie-consent__agree">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal -->
<div class="modal fade" id="cookieSettingsModal" tabindex="-1" aria-labelledby="cookieSettingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #0dcaf0 0%, #0aa2c0 100%);">
                <h5 class="modal-title text-white" id="cookieSettingsModalLabel">
                    <i class="fas fa-cog me-2"></i>Cookie Preferences
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-4">Manage your cookie preferences. You can enable or disable different types of cookies below.</p>
                
                <!-- Essential Cookies -->
                <div class="cookie-category mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h6 class="mb-1">Essential Cookies</h6>
                            <small class="text-muted">Required for basic site functionality</small>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="essentialCookies" checked disabled>
                            <label class="form-check-label" for="essentialCookies">Always On</label>
                        </div>
                    </div>
                    <small class="text-muted">These cookies are essential for the website to function and cannot be switched off.</small>
                </div>

                <!-- Analytics Cookies -->
                <div class="cookie-category mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h6 class="mb-1">Analytics Cookies</h6>
                            <small class="text-muted">Help us understand how visitors use our site</small>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="analyticsCookies">
                            <label class="form-check-label" for="analyticsCookies"></label>
                        </div>
                    </div>
                    <small class="text-muted">These cookies help us understand how visitors interact with the website by collecting anonymous information.</small>
                </div>

                <!-- Marketing Cookies -->
                <div class="cookie-category mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h6 class="mb-1">Marketing Cookies</h6>
                            <small class="text-muted">Used to deliver relevant advertisements</small>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="marketingCookies">
                            <label class="form-check-label" for="marketingCookies"></label>
                        </div>
                    </div>
                    <small class="text-muted">These cookies are used to make advertising more relevant to you and your interests.</small>
                </div>

                <!-- Functional Cookies -->
                <div class="cookie-category mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h6 class="mb-1">Functional Cookies</h6>
                            <small class="text-muted">Enable enhanced functionality and personalization</small>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="functionalCookies">
                            <label class="form-check-label" for="functionalCookies"></label>
                        </div>
                    </div>
                    <small class="text-muted">These cookies enable enhanced functionality like chat support and personalization.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="saveCookiePreferences">
                    <i class="fas fa-save me-1"></i>Save Preferences
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.cookie-consent-popup {
    position: fixed;
    bottom: 20px;
    left: 20px;
    max-width: 380px;
    z-index: 1050;
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
}

.cookie-consent-popup.show {
    transform: translateY(0);
    opacity: 1;
}

.cookie-popup-container {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15), 0 4px 20px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.08);
    overflow: hidden;
}

.cookie-popup-header {
    background: linear-gradient(135deg, #0dcaf0 0%, #0aa2c0 100%);
    padding: 12px 16px;
}

.cookie-popup-icon {
    width: 24px;
    height: 24px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 12px;
}

.cookie-popup-body {
    padding: 16px;
}

.cookie-emoji {
    font-size: 24px;
    display: block;
    line-height: 1;
}

.cookie-popup-text {
    font-size: 13px;
    line-height: 1.5;
    color: #374151;
    margin-bottom: 0;
}

.cookie-popup-text a {
    color: #0dcaf0;
    text-decoration: none;
    font-weight: 500;
}

.cookie-popup-text a:hover {
    text-decoration: underline;
    color: #0aa2c0;
}

.cookie-popup-footer {
    padding: 12px 16px;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
}

.cookie-settings-btn.btn-outline-info {
    font-size: 12px;
    padding: 6px 12px;
    border-color: #0dcaf0;
    color: #0dcaf0;
    background: transparent;
    font-weight: 500;
}

.cookie-settings-btn.btn-outline-info:hover {
    border-color: #0dcaf0;
    background-color: #0dcaf0;
    color: white;
}

.btn-info.btn-sm, .btn-info {
    font-size: 12px;
    padding: 6px 16px;
    background-color: #0dcaf0;
    border-color: #0dcaf0;
    color: white;
    font-weight: 500;
}

.btn-info.btn-sm:hover, .btn-info:hover {
    background-color: #0aa2c0;
    border-color: #0aa2c0;
    color: white;
}

.btn-info.btn-sm:focus, .btn-info:focus {
    background-color: #0aa2c0;
    border-color: #0aa2c0;
    box-shadow: 0 0 0 0.2rem rgba(13, 202, 240, 0.25);
}

.cookie-category {
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 15px;
    background: #f8f9fa;
}

.form-check-input:checked {
    background-color: #0dcaf0;
    border-color: #0dcaf0;
}

.form-check-input:focus {
    border-color: #0dcaf0;
    box-shadow: 0 0 0 0.2rem rgba(13, 202, 240, 0.25);
}

/* Responsive adjustments */
@media (max-width: 480px) {
    .cookie-consent-popup {
        left: 10px;
        right: 10px;
        max-width: none;
        bottom: 10px;
    }
    
    .cookie-popup-footer .d-flex {
        flex-direction: column;
        gap: 8px;
    }
    
    .cookie-popup-footer .d-flex > div {
        width: 100%;
        justify-content: center !important;
    }
}

@keyframes subtle-pulse {
    0%, 100% { 
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15), 0 4px 20px rgba(0, 0, 0, 0.1); 
    }
    50% { 
        box-shadow: 0 10px 40px rgba(13, 202, 240, 0.15), 0 4px 20px rgba(13, 202, 240, 0.1); 
    }
}

.cookie-popup-container {
    animation: subtle-pulse 3s ease-in-out infinite;
}
</style>