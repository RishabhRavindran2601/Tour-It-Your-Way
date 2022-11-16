function go()
{
	const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '25d7b6af83mshdfa51ca620485fep1a06c7jsn2879cc4ab0dd',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

var op1 = "304554";
var op2 = document.getElementById("inDate").value;
var op3 = document.getElementById("outDate").value;


fetch('https://tripadvisor16.p.rapidapi.com/api/v1/hotels/searchHotels?geoId=304554&checkIn='+op2.toString()+'&checkOut='+op3.toString()+'&pageNumber=1&currencyCode=IND', options)
	.then((data)=>{
		console.log(data);
		return data.json();
	}).then((objectData)=>{
		//console.log(objectData.data.data[0].title);
		let tableData = "";
		for (var i =0; i < 5; i++) {
			var a = objectData.data.data[i].title;
			var b = objectData.data.data[i].secondaryInfo;
			var c = objectData.data.data[i].bubbleRating.rating;
			var d = objectData.data.data[i].provider;

			tableData += `<div class="topnav">`;
			tableData += `<a>${objectData.data.data[i].title}</a>`;
			tableData += `<a>${objectData.data.data[i].secondaryInfo}</a>`;
			tableData += `<a>${objectData.data.data[i].bubbleRating.rating}</a>`;
			tableData += `<a>${objectData.data.data[i].provider}</a>`;
			tableData += `<button onclick="addIT('${a}','${b}',${c},'${d}');">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	}).catch(err => console.error(err));

}