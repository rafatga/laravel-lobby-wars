/**
 * JS Settings App
 */
let jsonSettings = document.querySelector(
    '[data-settings-selector="settings-json"]'
)
window.settings = jsonSettings ? JSON.parse(jsonSettings.textContent) : {}
