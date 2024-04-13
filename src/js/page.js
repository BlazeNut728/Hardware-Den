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

function editRow(id) {
    // Get the row elements
    var row = document.querySelectorAll("tr");
  
    // Loop through rows
    for (var i = 1; i < row.length; i++) {
      var cells = row[i].getElementsByTagName("td");
  
      // Find the row with the matching id
      if (parseInt(cells[0].innerText) === id) {
        // Make the row editable
        for (var j = 1; j < cells.length - 1; j++) {
          cells[j].setAttribute("contenteditable", "true");
        }
        // Change the edit button text to "Save"
        row[i].lastElementChild.innerHTML = "Saved";
        row[i].lastElementChild.setAttribute("onclick", "saveRow(" + id + ")");
      }
    }
}
  
function saveRow(id) {
    // Get the row elements
    var row = document.querySelectorAll("tr");
  
    // Loop through rows
    for (var i = 1; i < row.length; i++) {
      var cells = row[i].getElementsByTagName("td");
  
      // Find the row with the matching id
      if (parseInt(cells[0].innerText) === id) {
        var user = cells[1].innerText;
        var name = cells[2].innerText;
        var email = cells[3].innerText;
        var phone_number = cells[4].innerText;
  
        // Send an AJAX request to update the data
        var xhr = new XMLHttpRequest();
        xhr.open("POST", window.location.href, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Update the button text back to "Edit"
            row[i].lastElementChild.innerHTML = "Edit";
            row[i].lastElementChild.setAttribute("onclick", "editRow(" + id + ")");
            alert(xhr.responseText);
          }
        };
        xhr.send("id=" + id + "&user=" + encodeURIComponent(user) + "&name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email) + "&phone_number=" + encodeURIComponent(phone_number));
        
        // Make the row non-editable
        for (var j = 1; j < cells.length - 1; j++) {
          cells[j].setAttribute("contenteditable", "false");
        }
      }
    }
}
