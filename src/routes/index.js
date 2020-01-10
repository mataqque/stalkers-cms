const router = require("express").Router();
const home = require("../controllers/home"); // controlador home
const images = require("../controllers/image");// controlador images
const path = require("path");
const servicesFire = require("../../services/firebase");
const db = servicesFire.db;
const sitemap = require("../controllers/sitemap");
const passport = require('passport');

router.get("/",function(req,res){
  let date = new Date();
  let data = [];
      db.collection("articulos").where("fecha","<",date).orderBy("fecha","desc").limit(3).get()
      .then((snapshot=>{
        if(snapshot.empty){
          console.log("documeto no encontrado");
        }else{
          snapshot.forEach(doc=>{
            let savedata = doc.data();
            data.push({
              titulo:savedata.titulo,
              fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
              url:savedata.categoria+"/"+savedata.url,
              articulo:savedata.content.substr(0,80),
              cantcomentarios:savedata.cantcomentarios,
              cantlike:savedata.cantlike
            });
          })
          res.render("templates/homepage",{layout:"homepage",data});
        }
        })
      )});

router.get("/login",(req,res)=>{
    res.render("templates/login");
})
router.post("/login",(req,res,next)=>{
    passport.authenticate("local",{
        successRedirect:"/dashboard",
        failureRedirect:"/login",
        failureFlash: true
    })(req,res,next);
})
router.get("/tablero",(req,res)=>{
  // res.sendFile(path.join(__dirname,"../views/templates/tablero.html"))
  res.render("templates/tablero",{layout:"publicaciones"})
})

router.post("/",(req,res)=>{
    console.log(req.body)
    if(req.body.usuario == "flavio"){
        req.session.myvariable = req.body.usuario;
        res.send("/profile");
    }else{
        let error = "error login";
        res.render("templates/home",{error});
    }
});
router.get("/sitemap.xml",sitemap.linksitemap);


router.get("/main-sitemap.xsl",(req,res)=>{
  res.header('Content-Type', 'application/xml');
  res.sendFile(path.join(__dirname,"main-sitemap.xsl"));
})

router.get("/dashboard",(req,res)=>{
  let linkcss = "/css/dashboard.css";
  let linkjs = "/js/dashboard.js";
  res.render("templates/dashboard",{linkcss,linkjs})  
});

router.get("/dashboardpagina",(req,res)=>{
  res.sendFile(path.join(__dirname,"../views/templates/dashboardpagina.html"));  
});

router.post("/addpaginaweb",(req,res)=>{
  function remplazar(){
      let palabra = req.body.titulo.replace(" ","-");
      return palabra;
  }
  console.log(req.body);
  let data = {
        content:req.body.texto,
        fecha:new Date(),
        titulo:req.body.titulo,
        url:remplazar()
  }
  db.collection("articulos").doc(req.body.titulo).set(data);
  res.send("se guardo!")
});

router.get("/profile",function(req,res){
   console.log(req.session.myvariable);
   if(req.session.myvariable == "flavio"){
    res.render("templates/profile");
    }else{
      res.redirect("/")
    }
});

router.get("/articulos/:articulo?",confirmacion,(req,res)=>{
    console.log(req.params.articulo);
    let elementoid = []
    db.collection("articulos").where("url","==",req.params.articulo).get().then(snapshot => {
        if (snapshot.empty) {
          console.log('No matching documents.');
          return;
        }else{
            snapshot.forEach(doc => {
                console.log(doc.id, '=>', doc.data());
                elementoid = doc.id
            });
            res.render("templates/articulo",{layout:"publicaciones"})
        }
      })
      .catch(err => {
        console.log('Error getting documents', err);
      });
});

function confirmacion(req,res,next){
    console.log("ingreso aqui")
    next();
  }

router.post("/contactos",(req,res)=>{
  console.log(req.body.usuario)
  if(req.body.usuario == "flavio"){
    req.session.myvariable = req.body.usuario;
    res.send("profile");
  }else{
    res.send("Credencial erreonea");
  }
   
}); 
router.get("/registrar",function(req,res){
    db.ref("contactos").child("usuario").remove();
    res.send("Eliminado")
});

router.get("/close",(req,res)=>{
  delete req.session.myvariable;
  
});

router.get("/*sitemap*xml",(req,res)=>{
    let idsitemap = [];
    console.log(req.originalUrl.substr(1,this.length));
    db.collection("sitemap").doc(req.originalUrl.substr(1,this.length))
    .collection("subsitemap").get().then(snatshop=>{
      if(snatshop.empty){
        res.render("templates/404");
      }else{
        snatshop.forEach(doc=>{
              let array = (doc.data())
              idsitemap.push({id:array.loc,lastmod:array.lastmod});
            });
            res.header('Content-Type', 'application/xml');
            res.render("templates/sitemap",{layout:"subsitemap",idsitemap}); 
      }
    }).catch(erro=>{
        console.log(erro.message);
    });
});

router.use(function(req, res, next){
    res.status(404);
    let linkcss = "/css/404.css"
    if (req.accepts('html')) {
      res.render('templates/404', {linkcss});
      return;
    }

  });

module.exports = router;