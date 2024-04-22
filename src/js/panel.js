function openPanel(panelId) {
    // Hide all panels
    var panels = document.querySelectorAll('.info');
    panels.forEach(function(panel) {
        panel.style.display = "none";
    });

    // Show the selected panel
    var selectedPanel = document.getElementById(panelId);
    if (selectedPanel) {
        selectedPanel.style.display = "block";
    }
}
