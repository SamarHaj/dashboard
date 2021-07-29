var server = require('ws').Server;
var s = new server({ port : 5001 });
var myObj = ["users login:"]
s.on('connection' , function (ws){
ws.on('message' , function(message) {
	console.log("Recieved" + message);
	

 
  		myObj.push(message);

	var myJSON = JSON.stringify(myObj);

	ws.send(myJSON);
    

}); 

});