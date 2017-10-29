var options = {
	url: "universitylist.json",

	getValue: "FIELD2",

	list: {
		match: {
			enabled: true
		}
	}
};

$("#provider-json").easyAutocomplete(options);
