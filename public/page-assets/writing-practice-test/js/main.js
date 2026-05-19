document.addEventListener("DOMContentLoaded", function () {

    renderTests("general-container",  TESTS_DATA.general,  "general");
    renderTests("academic-container", TESTS_DATA.academic, "academic");
    renderTips("tips-container", TIPS_DATA);
    initSearch();

});

function diffClass(difficulty) {
    const d = difficulty.toLowerCase();
    if (d === "free") return "diff-free";
    if (d === "paid") return "diff-paid";
    return "diff-free";
}

function diffLabel(difficulty) {
    return difficulty.charAt(0).toUpperCase() + difficulty.slice(1).toLowerCase();
}

function clockIcon() {
    return `<svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width:14px;height:14px;">
                <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
            </svg>`;
}

function checkIcon() {
    return `<svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width:14px;height:14px;">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>`;
}

function renderTests(containerId, tests, moduleType) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = tests.map(test => `
        <div class="col-12 col-md-6 col-xl-4 test-item">
            <article class="test-card ${moduleType} h-100 d-flex flex-column bg-white">
                <div class="card-header-custom d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-3">
                        <div class="test-number-badge">${test.id}</div>
                        <span class="text-navy fw-semibold">${test.title}</span>
                    </div>
                    <div class="${diffClass(test.difficulty)} d-flex align-items-center gap-1">
                        <div class="diff-dot"></div>
                        <span class="diff-label">${diffLabel(test.difficulty)}</span>
                    </div>
                </div>
                <div class="card-body p-4 flex-grow-1">
                    <div class="mb-3">
                        <span class="task-label t1">${moduleType === "general" ? "Task 1 — Letter" : test.task1Type}</span>
                        <p class="task-question mb-0 test-content">${test.task1}</p>
                    </div>
                    <hr class="text-muted opacity-25">
                    <div>
                        <span class="task-label t2">Task 2 — Essay</span>
                        <p class="task-question mb-0 test-content">${test.task2}</p>
                    </div>
                </div>
                <div class="card-footer-custom d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-3 text-muted" style="font-size:12px;">
                        <span>${clockIcon()} 60 min</span>
                        <span>${checkIcon()} AI+Human</span>
                    </div>
                    <a href="https://online.ieltsprepandpractice.com/" class="card-cta">Start Test &rarr;</a>
                </div>
            </article>
        </div>
    `).join("");
}

function renderTips(containerId, tips) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = tips.map(tip => `
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="tip-card bg-white p-4 h-100">
                <div class="tip-icon mb-3">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="20" height="20">
                        ${tip.icon}
                    </svg>
                </div>
                <h4 class="text-navy fw-semibold" style="font-size:15px;">${tip.title}</h4>
                <p class="text-muted mb-0" style="font-size:13px; font-weight:300;">${tip.text}</p>
            </div>
        </div>
    `).join("");
}

function initSearch() {
    const searchInput = document.getElementById("testSearch");
    if (!searchInput) return;

    searchInput.addEventListener("keyup", function () {
        const query = searchInput.value.toLowerCase().trim();
        const testItems = document.querySelectorAll(".test-item");

        testItems.forEach(item => {
            const body = item.querySelector(".card-body");
            const text = body ? body.textContent.toLowerCase() : "";
            item.style.display = (!query || text.includes(query)) ? "" : "none";
        });
    });
}
