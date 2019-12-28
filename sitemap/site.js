const express = require("express");
const app = express();
const fs = require("fs");
const path = require("path");
parseString = require("xml2js").parseString;

var json;

app.get("/mostrar",(req,res)=>{
fs.readFile(path.join(__dirname,"../sitemap.xml"),"utf8",(err,data)=>{
    if(err) console.log(err);
    parseString(data,function(err,result){
        if(err) console.log(err);
        json = result;
        console.log(json.urlset.url);
        res.send(json);
    });
    })
});

app.get("/agregar",(req,res)=>{
    res.send()
})

app.get("/",function(req,res){  
    res.sendFile(path.join(__dirname,"index.html"));
})
app.listen(2000,()=>{console.log("open port: ",2000)})



// fs.writeFile("sitemap.xml","\n"+`<image:image>`,{flag:"a+"},function(error){
//     if(error){
//         console.log(error);
//     }else{

//     }
// })
// class sitemap{
//     constructor(cadena,valor){
        
//     }
//     configuracion(){
//         return 2
//     }
// }
// var nuevo = new sitemap(1,3);
// console.log(nuevo.configuracion());