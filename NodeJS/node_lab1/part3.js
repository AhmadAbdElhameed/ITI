const express = require('express');
const app = express();

app.get("/",function(req,res){
    res.send("<h1>It's Working</h1>");
})

app.listen(8080,function(){
    console.log("Server is running on port 8080")
})
