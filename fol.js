function gone(){

	const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '25d7b6af83mshdfa51ca620485fep1a06c7jsn2879cc4ab0dd',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

fetch('https://tripadvisor16.p.rapidapi.com/api/v1/restaurant/searchRestaurants?locationId=304554', options)
		.then((data)=>{
			console.log(data);
			return data.json();
		}).then((objectData)=>{
			//console.log(objectData.data.data[i].averageRating);
			let tableData = "";

		for (var i =0; i < 5; i++) {
			var a = objectData.data.data[i].name;
			var b = objectData.data.data[i].averageRating;
			var c = objectData.data.data[i].establishmentTypeAndCuisineTags[0];
			var d = objectData.data.data[i].currentOpenStatusText;

			tableData += `<div class="topnav">`;
			tableData += `<a>${objectData.data.data[i].name}</a>`;
			tableData += `<a>${objectData.data.data[i].averageRating}</a>`;
			tableData += `<a>${objectData.data.data[i].establishmentTypeAndCuisineTags[0]}</a>`;
			tableData += `<a>${objectData.data.data[i].currentOpenStatusText}</a>`;
			tableData += `<button onclick="addIT('${a}',${b},'${c}','${d}');">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	})

}