function Person(firstName, lastName, age){
	this.firstName = firstName;
	this.lastName = lastName;
	this.age = age;
}

var people = [];

var addPeople = function(){
	var firstName = document.getElementById('txtFirstName');
	var lastName = document.getElementById('txtLastName');
	var age = document.getElementById('txtAge');
	
	var person = new Person(firstName, lastName, age);
	
	people[people.length] = person;
}

var showPeople = function(){
	for(var i = 0; i < people.length; i++){
		document.getElementById('showPanel').innerHTML = people[i];
	}
}