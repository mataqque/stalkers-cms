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
const database = require('../config/key.js').mongoURI;

app.use(helmet());

//INICIANDO MONGO DB 
mongoose.set('useNewUrlParser', true);
mongoose.set('useFindAndModify', false);
mongoose.set('useCreateIndex', true);
mongoose.set('useUnifiedTopology', true);

mongoose.connect(database,{ useNewUrlParser: true })
  .then(() => console.log('MongoDB Connected'))
  .catch(err => console.log(err));

//ALMACENAR IMAGENES CON MULTER
const storage = multer.diskStorage({
  destination:path.join(__dirname,"../public/img/uploads"),
  filename:function(req,file,cb,filename){
    cb(null,file.originalname)
  }
});
app.use(multer({storage:storage}).single("image"));


// SETTINGS 
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

app.set("views",path.join(__dirname,"../views"));
app.set('view engine', 'hbs');
app.engine('hbs',exphbs({
    defaultLayout: "main", 
    partialsDir:path.join(app.get("views"),"partials"),
    layoutDir: path.join(app.get("views"),"layouts"),
    extname: ".hbs",
    helpers:require("./helpers")
    }));
 
app.use(session({
    saveUninitialized:false,
    resave:false,
    secret:"Hola mundo"
}));

app.use(function(req, res, next) {
  res.locals.success_msg = req.flash('success_msg');
  res.locals.error_msg = req.flash('error_msg');
  res.locals.error = req.flash('error');
  next();
});
//ALL SETTINGS INICIAR LAS DESPUES DE LAS CONFIGURACIONES
app.use(passport.initialize()); 
app.use(passport.session());
app.use(flash());
app.use(express.static(path.join(__dirname,"../public")));
app.use(express.urlencoded({extended:true}));

// LLAMANDO RUTAS
require("../passport/local-auth")(passport);
app.use("/dashboard",require("../routes/dashboard")); // LLAMAR PRIMERO PARA EVITAR EL ERROR 404 
app.use("/",require("../routes/index"));

app.set("port",PORT);
app.listen(app.get("port"),function(){
    console.log("Listen Port: ",app.get("port"))
});

