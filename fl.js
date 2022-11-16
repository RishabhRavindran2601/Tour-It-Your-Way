function go(){


const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '25d7b6af83mshdfa51ca620485fep1a06c7jsn2879cc4ab0dd',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

var op1 = document.getElementById("src").value;
var op2 = document.getElementById("dst").value;
var op3 = document.getElementById("inDate").value;
var op4 = document.getElementById("outDate").value;
var op5 = document.getElementById("adults").value;
var op6 = document.getElementById("childs").value;

fetch('https://tripadvisor16.p.rapidapi.com/api/v1/flights/searchFlights?sourceAirportCode='+op1.toString()+'&destinationAirportCode='+op2.toString()+'&date=2022-12-01&itineraryType=ONE_WAY&sortOrder=PRICE&numAdults=1&numSeniors=0&classOfService=ECONOMY&returnDate=2022-12-03&currencyCode=IND', options)
	.then((data)=>{
		//console.log(data);
		return data.json();
	}).then((objectData)=>{
		let tableData = "";

		for (var i =0; i < 5; i++) {
			var a = objectData.data.flights[i].segments[0].legs[0].flightNumber;
			var b = objectData.data.flights[i].segments[0].legs[0].originStationCode;
			var c = objectData.data.flights[i].segments[0].legs[0].destinationStationCode;
			var d = objectData.data.flights[i].purchaseLinks[0].totalPricePerPassenger;
			var e = objectData.data.flights[i].segments[0].legs[0].departureDateTime.substring(11,15);
			var f = objectData.data.flights[i].segments[0].legs[0].arrivalDateTime.substring(11,15);
			

			tableData += `<div class="topnav">`;

			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].flightNumber}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].departureDateTime.substring(11,15)}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].originStationCode}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].arrivalDateTime.substring(11,15)}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].destinationStationCode}</a>`;
			tableData += `<a>${objectData.data.flights[i].purchaseLinks[0].totalPricePerPassenger}</a>`;
			tableData += `<button onclick="addIT(${a},'${b}','${c}',${d},'${e}','${f}');">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	})

}