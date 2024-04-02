function handleLogout() {
  fetch('logout.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'logout=true'
  })
 .then(response => response.text())
 .then(data => {
    if (data === 'success') {
      window.location.href = 'customer_login.php';
    } else {
      console.error('Failed to log out.');
    }
  })
 .catch(error => {
    console.error('Error:', error);
  });
}