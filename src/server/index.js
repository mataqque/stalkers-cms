const express = require("express");
const app = express();
const webApp = require("http").createServer(app);
const socket = require("socket.io")(webApp);
const path = require("path");
const exphbs = require("express-handlebars");
const PORT = process.env.PORT||3000;
const session  = require("express-session");

app.listen(app.get("port"),()=>{
    console.log(app.get("port"))
});

// settings
app.set("views",path.join(__dirname,"../views"));
app.set('view engine', 'hbs');
app.engine('hbs',exphbs({
    defaultLayout: "main",
    partialsDir:path.join(app.get("views"),"partials"),
    layoutDir: path.join(app.get("views"),"layouts"),
    extname: ".hbs",
    helpers:require("./helpers")
    }));
 
app.use(express.static(path.join(__dirname,"../public")));
app.use(express.urlencoded({extended:true}));
app.use(session({
    saveUninitialized:false,
    resave:false,
    secret:"Hola mundo"
}));

app.use(require("../routes"));

app.set("port",PORT);
app.listen(app.get("port"),function(){
    console.log("Listen Port: ",app.get("port"))
});

