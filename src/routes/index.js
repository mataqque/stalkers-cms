const router = require("express").Router();
const home = require("../controllers/home"); // controlador home
const images = require("../controllers/image");// controlador images
const Image = require("../models/image");
const path = require("path");
const servicesFire = require("../../services/firebase");
const db = servicesFire.db;
const sitemap = require("../controllers/sitemap");
const passport = require('passport');
const {ensureAuthenticated,forwardAuthenticated} = require("../passport/auth");
const admin = require("firebase-admin")
var rutas;



router.post("/rutas",function(req,res){
    // console.log()
  rutas = {ruta1:req.body.valor}
  res.send("completado")
})

router.get("/",function(req,res,next){
    let date = new Date(1995,11,17);
    let data = {cate1:[],cate2:[],cate3:[],cate4:[],separado:[]};
  
    async function rutaprincipal (typecategoria,categoria,valor,cant){
        let collection  = await db.collection(typecategoria).where("views",">=",0).limit(cant).get().then(snapshot => {
           if (snapshot.empty){
               console.log('Documentos no encontrados.');
               next();
             return;
           }else{
         snapshot.forEach(doc => {
           let savedata = doc.data();
               data[categoria].push({
                 titulo:savedata.titulo,
                 fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
                 url:savedata.categoria+"/"+savedata.url,
                 articulo:savedata.resumen,
                 cantcomentarios:savedata.cantcomentarios,
                 cantlike:savedata.cantlike,
                 imagen:savedata.imagen,
                 index:savedata.index,
                 views:savedata.views,
               })})
            }
            if(valor == true){
                
            }
            return true;
            }).catch(err => {
           throw err;
         });
         return collection;
    }
    Promise.all([
      rutaprincipal("diabetes","cate1",false,4),
      rutaprincipal("salud","cate2",false,4),
      rutaprincipal("articulos","cate3",true,4)
    ]).then(values =>{
      // data.separado.push(data[articulos][0]);
      // data[categoria].splice(0,1);
      res.render("templates/homepage",{layout:"homepage",data});
    }).catch(err=>console.log(err))
});


router.get("/login",forwardAuthenticated,(req,res)=>{
    res.render("templates/login",{layout:"login"});
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

router.get("/politica-de-cookies",(req,res)=>{
  res.render("templates/cookies",{layout:"politica-de-cookie"});
})
router.get("/politica-de-privacidad",(req,res)=>{
  res.render("templates/privacidad",{layout:"politica-de-cookie"});
});


router.get("/dashboard",ensureAuthenticated,(req,res)=>{
  res.render("templates/dashboard",{layout:"dashboard"})  
});

router.get("/dashboardpagina",(req,res)=>{
  res.sendFile(path.join(__dirname,"../views/templates/dashboardpagina.html"));  
});

router.post("/addpaginaweb",(req,res)=>{
    
    let data = {
          content:req.body.texto,
          fecha:new Date(),
          titulo:req.body.titulo,
          url:req.body.url,
          resumen:req.body.resumen,
          categoria:req.body.categoria,
          imagen:req.body.imagen,
          index:req.body.index,
          views:0,
          likes:0,
          cantcomentarios:0,
        }
    const addpagina = db.collection(data.categoria).doc(data.url).set(data);
    res.send("se guardo!");
    let campo = {}
    campo[data.url] = {
        url:data.categoria+data.url,
        imagen:data.imagen,
        lastmod:data.fecha,
      }
    const sitemap = db.collection("sitemap").doc("post_sitemap1.xml").update(campo);
});

router.get("/profile",function(req,res){
  let date = new Date();
  let collection  =  db.collection("articulos");
  collection.where("categoria","in",["articulos"]).get().then(snapshot => {
    if (snapshot.empty) {
      console.log('No hay documentos profile.');
      return;
    }else{
      snapshot.forEach(doc => {
        console.log(doc.data().titulo)
      })
    }})
  collection.where("categoria","in",["salud"]).limit.get().then(snapshot => {
    if (snapshot.empty) {
      console.log('No matching documents jodido.');
      return;
    }else{
      snapshot.forEach(doc => {
        console.log(doc.data().titulo)
      })
    }})
    res.send("ingreso")
});

function confirmacion(req,res,next){
    // console.log("ingreso aqui")
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
router.post("/motrar_galeria",async(req,res)=>{
	const imagenes_mongo = await Image.find()
	res.send(imagenes_mongo)
})
router.post("/upload",async(req,res)=>{
	console.log(req.file) 
    const image = new Image();
    image.title = req.body.title;
    image.descripition = req.body.description;
    image.filename = req.body.filename;
    image.path = "img/uploads/"+req.file.filename;
    image.originalname = req.file.originalname;
    image.mimetype = req.file.mimetype;
    image.size = req.file.size;
    await image.save()
    res.send("subido")
});
//permite encontrar al archivo sitemap

router.get("/sitemap.xml",sitemap.linksitemap);

router.get("/main-sitemap.xsl",(req,res)=>{
  res.header('Content-Type', 'application/xml');
  res.sendFile(path.join(__dirname,"main-sitemap.xsl"));
});

router.get("/*sitemap*xml",sitemap.DinamicRouteSitemap);
router.get("/:articulos/:articulo",confirmacion,(req,res,next)=>{
    console.log(req.params.articulos)
    console.log(req.params.articulo)
    let data = [];
    let index;
    db.collection(req.params.articulos).where("url","==",req.params.articulo)
    .get().then(snapshot => {
        if (snapshot.empty) {
          console.log('No hay documentos articulos.');
          next();
          return;
        }else{
            snapshot.forEach(doc => {
                let savedata = doc.data();
                data.push({
                  titulo:savedata.titulo,
                  fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
                  url:savedata.categoria+"/"+savedata.url,
                  articulo:savedata.content,
                  cantcomentarios:savedata.cantcomentarios,
                  cantlike:savedata.cantlike,
                  index:savedata.index,
                  views:savedata.views,
                })
                index = data[0].index;
            });
            res.render("templates/articulo",{layout:"publicaciones",data,index});
            db.collection(req.params.articulos).doc(req.params.articulo).update({
              views:admin.firestore.FieldValue.increment(1)
            })
        }
      }).catch(err => {
        throw err;
      });
});

router.use(function(req, res, next){
  res.status(404);
  let linkcss = "/css/404.css"
  if (req.accepts('html')){
    res.render('templates/404', {linkcss});
    return;
  }
});

module.exports = router;