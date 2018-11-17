const COUNTRIES = [];


document.getElementById('form').addEventListener('submit', (e) => {
    let name = document.getElementById("name").value;
    createСountry(name);
    e.preventDefault();
});

function quantityCountries() {
    let count = document.getElementById("count");
    let message = COUNTRIES.length + ' ' + 'countries';
    count.innerHTML = message;
}

function createСountry(name) {
    let сountry = { name }
    COUNTRIES.push(сountry);
    readСountry();
    quantityCountries();
    document.getElementById('form').reset();
    console.log(COUNTRIES);
}

function readСountry() {
    let сountryhtml = document.getElementById('сountry');
    сountryhtml.innerHTML = "";
    for (let i = 0; i < COUNTRIES.length; i++) {
        сountryhtml.innerHTML += `
		<div class="black">

		<button class="edit" onClick="editCountry('${i}')"> Edit </button>
		<button class="remove" onClick="remove('${i}')"> Delete </button>
		<span> ${COUNTRIES[i].name} </span>
		</div> `
    }
}

function remove(i) {
    COUNTRIES.splice(i, 1);
    readСountry();
    quantityCountries();

}

function editCountry(index) {
    let сountryhtml = document.getElementById('сountry');
    сountryhtml.innerHTML = "";
    for (let i = 0; i < COUNTRIES.length; i++) {
        if (i == index) {
            сountryhtml.innerHTML += ` <div class="red">
			<input id="input2name" placeholder="${COUNTRIES[i].name}"> 
			<button class="edit" onClick="updateCountry('${i}')">Update</button>
			<button class="remove" onClick="readСountry()">Cancel</button>
			</div>  `
        } else {
            сountryhtml.innerHTML += ` <div class="black">
			<span> ${COUNTRIES[i].name} </span>
			<button disabled class="edit" onClick="editCountry('${i}')">Edit</button>
			<button disabled class="remove" onClick="remove('${i}')">Delete</button>

			</div>  `

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