$(function() {

 	loadContacts();
 	$(".loading").hide();
 	$(".content-primary").fadeIn(1000);

});

function sortJsonName(a,b){
	if(a["RoffUser:Display Name"] == null) {
		a["RoffUser:Display Name"] = a["RoffUser:Email"];
	}
	if(b["RoffUser:Display Name"] == null) {
		b["RoffUser:Display Name"] = b["RoffUser:Email"];
	}
    return a["RoffUser:Display Name"].toLowerCase() > b["RoffUser:Display Name"].toLowerCase() ? 1 : -1;
};

function createList(data){
	$.each(data, function(i, item) {
		var indicativo = item["RoffUser:Indicativo Pais Mobile Phone"];
			if(indicativo.substr(0,1) !== "+") { indicativo = "+" + indicativo;};
		var nome = item["RoffUser:Display Name"] ? item["RoffUser:Display Name"] : item["RoffUser:Email"];
		var phone = item["RoffUser:Mobile Phone"];
		var local = item["RoffUser_PesquisaAvancada_OutrosDados:Local Trabalho Nome"];
		var area = item["RoffUser_PesquisaAvancada_OutrosDados:Area Nome"];

		var row = "<li data-icon='phone'><a href='tel:" + indicativo + phone + "'>" + nome + " <small class='gray'>(" + local + ", " + area +")</small>" + "</a></li>";

		if(phone.length > 1) {

			$.ajax({
			     async: false,
			     type: "GET",
			     data: { row : row },
			     url: "data/write.php",
			     success: function(data) {
			          console.log(row);
			     }
			});

			// $(".content-primary ul").append(row);
		}

	});
	// $('.content-primary ul').listview('refresh');
}

function loadContacts(){

	// Uncomment this to generate HTML
	$.getJSON("data/json/roff.json", null, function(data) {

		data.sort(sortJsonName);

	  	createList(data);
	  	$(".loading").hide();
 			$(".content-primary").fadeIn(1000);
	});
}
