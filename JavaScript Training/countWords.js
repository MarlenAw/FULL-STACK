var st = "To be or not to be";

//	#1
var aWords = st.split(' ');
console.log( 'There are ' + aWords.length + ' words in st');


//	#2
var aWordsCount =[];
aWords.forEach(function( word ){
	
	var foundIndex = -1;
	
	for(var i=0; i < aWordsCount.length; i++)
	{					
		if(aWordsCount[i].word === word)
			foundIndex = i;		
	}
	
	if(foundIndex >= 0) {
		//	Word already exist, just increment the counter
		aWordsCount[foundIndex].count++;
	}
	else
		{
			//	Word not exist, should add
			var obj = { word: word, count: 1 }
			
			//	Add to array of aWordsCount
			aWordsCount.push(obj);
		}
	
});

//console.log(aWordsCount);
aWordsCount.forEach(function(obj){
	console.log(obj.word + " " + obj.count);
});