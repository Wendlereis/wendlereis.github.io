function Person(firstName, lastName, age){
	this.firstName = firstName;
	this.lastName = lastName;
	this.age = age;
}

var people = [];

var addPeople = function(){
	var firstName = document.getElementById('txtFirstName').value;
	var lastName = document.getElementById('txtLastName').value;
	var age = document.getElementById('txtAge').value;
		
	people.push(new Person(firstName, lastName, age));
}

var showPeople = function(){
	var allpeople = "";
	
	for(var i = 0; i < people.length; i++){
		allpeople += "People "+i+": "+people[i].firstName+" "+people[i].lastName+" "+people[i].age+"<br>";
	}
	
	document.getElementById('showPanel').innerHTML = allpeople;
}