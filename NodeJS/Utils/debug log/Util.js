var util = require('util');

var log1 = util.debuglog('log1');
var log2 = util.debuglog('log2');


console.log('Hello there, this is a standard message');


//	This message will appear only if NODE_DEBUG=log1 node myScript.js
//	In Windows type:  SET NODE_DEBUG=log1
//	then hit ENTER
//	then type node myScript.js

log1('This is a log1 message');
//	OUTPUT: Log1 3245: This is a log1 message   3245 is the process id


log1('This is another log1 message');	//	This message will appear only if NODE_DEBUG=log1	

log2('This is a log2 message');	//	This message will appear only if NODE_DEBUG=log2 OR NODE_DEBUG=log1,log2
