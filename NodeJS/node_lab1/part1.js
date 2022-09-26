var http = require('http');
var fs = require('fs');
var url = require('url');


function requestHandler (req, res) {
    let urlDetails = url.parse(req.url,true);
    if(urlDetails.pathname == "/" || urlDetails.pathname =="/home"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile("home.html",function(error,data){
            console.log(error);
            res.end(data);
        })
    }else if(urlDetails.pathname == "/about"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile("about.html",function(error,data){
            console.log(error);
            res.end(data);
        })
    }else if(urlDetails.pathname == "/contact"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile("contact.html",function(error,data){
            console.log(error);
            res.end(data);
        })
    }else{
        res.writeHead(404, {'Content-Type': 'text/html'});
        fs.readFile("notfound.html",function(error,data){
            console.log(error);
            res.end(data);
        })
    }
}

http.createServer(requestHandler).listen(8080);