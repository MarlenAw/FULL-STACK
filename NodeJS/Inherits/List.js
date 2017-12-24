function List() {
	this.arr = [];
}

List.prototype.add = function( obj ) {
	this.arr.push( obj );
}

List.prototype.size = function () {
	return this.arr.length;
}

List.prototype.print = function () {
	
	this.arr.forEach(function(value){
		console.log(value);
	})
	
}

//	Allow 'require' from other files
module.exports = List;