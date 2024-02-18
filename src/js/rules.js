function displayRules() {
    fetch('../json/rules.json')
        .then(response => response.json())
        .then(data => {
            for (const rule in data) {
                const ruleItem = document.createElement('article');
                ruleItem.innerHTML = `<br><h3>${data[rule].heading}</h3>
                <p>${data[rule].description}</p>`;
                document.querySelector('.rules-card').appendChild(ruleItem);
            }
        })
        .catch(error => console.log(error));
}
displayRules();