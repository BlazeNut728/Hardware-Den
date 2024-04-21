document.addEventListener("DOMContentLoaded", function() {
    const wishlistBtns = document.querySelectorAll('.wishlist-btn');
  
    wishlistBtns.forEach(btn => {
      btn.addEventListener('click', addToWishlist);
    });
  
    function addToWishlist(event) {
      const productId = event.target.parentElement.dataset.id;
  
    
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          const userId = xhr.responseText;
  
          
          fetch(`/wishlist.php?userId=${userId}`)
            .then(response => response.json())
            .then(wishlist => {
              
              wishlist.push(productId);
  
              return fetch(`/update_wishlist.php?userId=${userId}`, {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify(wishlist)
              });
            })
            .then(() => {
              alert('Product added to wishlist!');
            })
            .catch(error => {
              console.error('Error:', error);
              alert('Failed to add product to wishlist');
            });
        }
      };
      xhr.open('GET', '/get_user_id.php', true);
      xhr.send();
    }
  });
  