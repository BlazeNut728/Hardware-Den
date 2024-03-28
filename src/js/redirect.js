document.addEventListener("DOMContentLoaded", function() {
        // Get all elements with class "card-link"
        var cardLinks = document.querySelectorAll(".card-link");
        
        // Loop through each card link
        cardLinks.forEach(function(cardLink) {
            // Add click event listener
            cardLink.addEventListener("click", function(event) {
                // Prevent the default action (following the link)
                event.preventDefault();
                
                // Get the href attribute value (target URL)
                var targetUrl = cardLink.getAttribute("href");
                
                // Redirect the user to the target URL
                window.location.href = targetUrl;
            });
        });
    });
