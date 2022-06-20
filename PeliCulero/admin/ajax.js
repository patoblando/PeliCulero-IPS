// let response = []
const getData = async () => {
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };
    try {
        let response = await fetch("./API/info.php", requestOptions)
        response = await response.text()
        response = JSON.parse(response)
        // console.log(response)
        renderData(response)
        // return response
    } catch (e) {
        console.log(e);
        // return []
    }

}


let table = document.getElementById('table')


const renderData = (data) => {
    console.log(data)
    for(elem of data){
        let id = document.createElement('div')
        let user = document.createElement('div')
        let active = document.createElement('div')
        let ban = document.createElement('div')
        id.innerHTML = JSON.stringify(elem.id)
        user.innerHTML = JSON.stringify(elem.username)
        active.innerHTML = JSON.stringify(elem.active)
        ban.innerHTML = JSON.stringify(elem.ban)
        table.appendChild(id);
        table.appendChild(user);
        table.appendChild(active);
        table.appendChild(ban);
    }
}


getData()