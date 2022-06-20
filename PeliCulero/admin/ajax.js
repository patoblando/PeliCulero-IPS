// Trae la información de la base de datos y la muestra en el DOM
const getData = async () => {
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };
    try {
        let response = await fetch("./API/info.php", requestOptions)
        response = await response.text()
        response = JSON.parse(response)
        renderData(response)
    } catch (e) {
        console.log(e);
    }
}

let table = document.getElementById('table')

// Renderiza cada fila
const renderData = (data) => {
    console.log(data)
    for(elem of data){
        renderElement(elem.id)
        renderElement(elem.username)
        renderElement(elem.active)
        renderElement(elem.ban)
        renderButtonBan(elem)
    }
}

// Renderiza cada elemento
const renderElement = (elem) => {
    let div = document.createElement('div')
    div.innerHTML = JSON.stringify(elem).replace(/['"]+/g, '')
    table.appendChild(div)
}

const renderButtonBan = x => {
    if(x.ban == 0 || x.ban == 1){
        let div = document.createElement('div')
        let button = document.createElement('button')
        button.setAttribute("user-id", x.id);
        button.addEventListener( 'click', e => {
            let id = e.target.getAttribute('user-id')
            toggleBan(id)
        })
        button.innerHTML = x.ban == 1 ? 'Desbanear' : 'Banear'
        div.appendChild(button)
        table.appendChild(div)
    }
}

// Si el usuario tiene ban, se lo quita y si no lo tiene, se lo pone
const toggleBan = (id) => {
    var formdata = new FormData();
    formdata.append("id", id);

    var requestOptions = {
      method: 'POST',
      body: formdata,
      redirect: 'follow'
    };

    fetch("./API/toggleBan.php", requestOptions)
      .then(response => response.text())
      .then(result => console.log(result))
      .then(location.reload())
      .catch(error => console.log('error', error));
}

getData()