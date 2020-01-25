const express = require("express");
const app = express();
const webApp = require("http").createServer(app);
const socket = require("socket.io")(webApp);
const path = require("path");
const exphbs = require("express-handlebars");
const PORT = process.env.PORT||4000;
const session  = require("express-session");
const servicesFire = require("../../services/firebase");
const passport = require("passport");
const mongoose = require("mongoose");
const flash = require("connect-flash");
const multer = require("multer");
const helmet = require("helmet")

mongoose.set('useNewUrlParser', true);
mongoose.set('useFindAndModify', false);
mongoose.set('useCreateIndex', true);
mongoose.set('useUnifiedTopology', true);
require("../passport/local-auth")(passport);

const storage = multer.diskStorage({
  destination:path.join(__dirname,"../public/img/uploads"),
  filename:function(req,file,cb,filename){
    cb(null,file.originalname)
  }
});
app.use(helmet());
app.use(multer({storage:storage}).single("image"));

app.listen(app.get("port"),()=>{
    console.log(app.get("port"))
});

const database = require('../config/key.js').mongoURI;
mongoose.connect(database,{ useNewUrlParser: true })
  .then(() => console.log('MongoDB Connected'))
  .catch(err => console.log(err));
// settings
app.use(flash());
var expiryDate = new Date( Date.now() + 60 * 60 * 1000 );
app.use(session({
    secret:"MySecret",
    resave:true,
    saveUninitialized:true,
    cookie:{
            secure: true,
            httpOnly: true,
            domain: 'example.com',
            path: 'foo/bar',
            expires: expiryDate
    }
}));
app.use(passport.initialize());
app.use(passport.session());
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

app.use("/dashboard",require("../routes/dashboard"));
app.use("/",require("../routes/index"));

app.set("port",PORT);
app.listen(app.get("port"),function(){
    console.log("Listen Port: ",app.get("port"))
});

