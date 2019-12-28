const router = require("express").Router();
const home = require("../controllers/home"); // controlador home
const images = require("../controllers/image");// controlador images
const path = require("path");
const db = require("../../services/firebase");
const sitemap = require("../controllers/sitemap");

router.get("/",function(req,res){
  let linkcss = "/css/main.css"
    if(!req.session.myvariable){
      res.render('templates/home',{linkcss});
      }else if(req.session.myvariable){
        res.redirect("/profile");
      };
    });


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
})

router.get("/profile",function(req,res){
   console.log(req.session.myvariable);
   if(req.session.myvariable == "flavio"){
    res.render("templates/profile");
    }else{
      res.redirect("/")
    }
});

router.get("/articulo/:autor?",confirmacion,(req,res)=>{
    let nombrearticulo = "El mejor idioma";
    let linkcss =  "/css/categoria.css";
    let autorarticulo = req.params.autor;
    console.log(req.params.autor)
    res.render("templates/articulo",{nombrearticulo,autorarticulo,linkcss});
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
  res.send("eliminado")
});

router.use(function(req, res, next){
    res.status(404);
    if (req.accepts('html')) {
      res.render('templates/404', { url: req.url });
      return;
    }

  });


module.exports = router;