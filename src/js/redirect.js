document.addEventListener("DOMContentLoaded", function() {
        
        var cardLinks = document.querySelectorAll(".card-link");
        
        
        cardLinks.forEach(function(cardLink) {
            
            cardLink.addEventListener("click", function(event) {
                
                event.preventDefault();
                
                
                var targetUrl = cardLink.getAttribute("href");
                
                
                window.location.href = targetUrl;
            });
        });
    });
