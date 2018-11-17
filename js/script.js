const COUNTRIES = [];


document.getElementById('form').addEventListener('submit', (e) => {
    let name = document.getElementById("name").value;
    if (name == '') {
        alert("No Data");
    } else {
        createСountry(name);
    }
    e.preventDefault();
});

function quantityCountries() {
    let count = document.getElementById("count");
    let message = COUNTRIES.length + ' ' + 'countries';
    count.innerHTML = message;
}

function readСountry() {
    let сountryhtml = document.getElementById('countries');
    сountryhtml.innerHTML = "";
    for (let i = 0; i < COUNTRIES.length; i++) {
        сountryhtml.innerHTML += `
        <tr class="black">
        <td> ${COUNTRIES[i].name}  </td>
        <td><button class="edit" onClick="editCountry('${i}')"> Edit </button></td>
        <td><button class="remove" onClick="remove('${i}')"> Delete </button></td>
        </tr> `
    }
}


function editCountry(index) {
    let сountryhtml = document.getElementById('countries');
    сountryhtml.innerHTML = "";
    for (let i = 0; i < COUNTRIES.length; i++) {
        if (i == index) {
            сountryhtml.innerHTML += `
            <tr class="red">
            <td><input id="input2name" type="text" placeholder="${COUNTRIES[i].name}"> </td>
            <td><button class="edit" onClick="updateCountry('${i}')">Update</button></td>
            <td><button class="remove" onClick="readСountry()">Cancel</button></td>
            </tr> `
        } else {
            сountryhtml.innerHTML += `
            <tr class="black">
            <td> ${COUNTRIES[i].name} </td>
            <td><button disabled class="edit" onClick="editCountry('${i}')"> Edit </button></td>
            <td><button disabled class="remove" onClick="remove('${i}')"> Delete </button></td>
            </tr>  `
        }
    }
}


function updateCountry(index) {
    let updatename = document.getElementById('input2name').value;
    if (updatename == '') {
        alert("No Data");
    } else {
        COUNTRIES[index].name = updatename;
        readСountry();
    }
}

function remove(i) {
    COUNTRIES.splice(i, 1);
    readСountry();
    quantityCountries();
}

function createСountry(name) {
    let сountry = { name }
    COUNTRIES.push(сountry);
    readСountry();
    quantityCountries();
    document.getElementById('form').reset();
}