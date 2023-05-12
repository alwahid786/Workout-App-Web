var app = require('express')();
var server = require('http').Server(app);
// var io = require('socket.io')(server);
var redis = require('redis');

const io = require('socket.io')(server, {
cors: {
    origin: '*',
}
});

weapp.get('/', function(req, res) {
    res.send('Working Fine');
});

io.on('connection', function (socket) {
    console.log("client connected");

    socket.on('message', (message) => {
    console.log('Received message:', message);

    // Broadcast the message to all connected clients
    io.emit('message', message);
});
    
});
server.listen(6379, function() {
    console.log('working fineaa');
});