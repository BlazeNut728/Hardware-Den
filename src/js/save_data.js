function saveData(id, pageName) {

    if (pageName = "UM")
    {
        var user = document.getElementById('username_' + id).innerText;
        var name = document.getElementById('name_' + id).innerText;
        var email = document.getElementById('email_' + id).innerText;
        var phone = document.getElementById('number_' + id).innerText;
        var page = 'admin_user';

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Data saved successfully
                    console.log(xhr.responseText);
                } else {
                    // Error occurred
                    console.error(xhr.responseText);
                }
            }
        };
        xhr.open('POST', 'save_data.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + id + '&user=' + encodeURIComponent(user) + '&name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&phone=' + encodeURIComponent(phone) + '&page=' + encodeURIComponent(page));
    }
}