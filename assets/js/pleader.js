let display = {
    onload: true,
    loaded: 20
}

document.querySelector('.find').onclick = async function() {
    document.querySelector('table').style.opacity = '.4';
    let val = this.previousElementSibling.value;
    await refind(val);
    document.querySelector('table').style.opacity = '1';
}

function refind (val) {
    let xhr = new XMLHttpRequest();
        val = encodeURIComponent(val);
        xhr.open('GET', '/assets/php/search.php?table=advokats&word=' + val, true);
        xhr.send();
        display.onload = false;
        xhr.onload = function() {
            let res = JSON.parse(xhr.responseText); 
            document.querySelector('.table').innerHTML = '';
            if (!res.finded) {
                for (row of res) {
                    if (!row.finded) {
                        let html = document.createElement('tr');
                        html.innerHTML = `
                        <td>${row.name}</td>
                        <td>${row.reg_num}</td>
                        <td>${row.num_udostover}</td>
                        <td>${row.address}</td>
                        <td>${row.phone}</td>
                        `;
                        html.dataset.id = row.id;
                        document.querySelector('.table').appendChild(html);
                    } else display.onload = true;
                }
            }
        }
}

window.onscroll = function() {
    let tableBottom = document.querySelector('table').offsetTop + document.querySelector('table').offsetHeight  - window.innerHeight;
    if (display.onload) 
    if (this.pageYOffset >= tableBottom) {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/assets/php/db.php?get=advokats&loaded=' + display.loaded, true);
        xhr.send();
        display.onload = false;
        xhr.onload = function() {
            let res = JSON.parse(xhr.responseText); 
            if (res.length >= 1) {
                for (row of res) {
                    let html = document.createElement('tr');
                    html.innerHTML = `
                    <td>${row.name}</td>
                    <td>${row.reg_num}</td>
                    <td>${row.num_udostover}</td>
                    <td>${row.address}</td>
                    <td>${row.phone}</td>
                    `;
                    html.dataset.id = row.id;
                    document.querySelector('.table').appendChild(html);
                }
                display.loaded += 20;
                display.onload = true;
            } 
        }
    }
}

document.querySelector('button.review').onclick = function() {
    document.querySelector('.review_block').hidden = false;
}