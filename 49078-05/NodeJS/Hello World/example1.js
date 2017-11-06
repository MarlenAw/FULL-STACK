var y = 5;	//	y is local, only available on this file


z = 8;	//	z is global

//	Could be accessed through other files
global.x = 3;

//	Make y available to other files
exports.y = y;
