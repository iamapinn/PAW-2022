var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write('<h1>Muhammad Muqtafin Nuha</h1>');
    res.write('<h2>210411100218</h2>');
    res.end();
}).listen(8080);