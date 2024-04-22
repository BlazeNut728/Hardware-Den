function showPage(pageId) {
    
    var pages = document.getElementsByClassName('page');
    for (var i = 0; i < pages.length; i++) {
      pages[i].style.display = 'none';
    }
    
    
    var pageToShow = document.getElementById(pageId);
    if (pageToShow) {
      pageToShow.style.display = 'block';
    }
}

function showSidebar(sidebarID) {
    
    var sidebar = document.getElementsByClassName('info');
    for (var i = 0; i < sidebar.length; i++) {
        sidebar[i].style.display = 'none';
    }
    
    
    var sidebarToShow = document.getElementById(sidebarID);
    if (sidebarToShow) {
        sidebarToShow.style.display = 'block';
    }
}

