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

router.get("/",function(req,res){
  let init = true;
  let date = new Date();
  let data = {cate:[],cate2:[],post:[],separado:[]};
  let collection  =  db.collection("articulos")
        collection.where("categoria","==","articulos").get().then(snapshot => {
        if (snapshot.empty){
            console.log('No matching documents.');
          return;
        }else{
      snapshot.forEach(doc => {
        let savedata = doc.data();
            data.cate.push({
              titulo:savedata.titulo,
              fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
              url:savedata.categoria+"/"+savedata.url,
              articulo:savedata.resumen,
              cantcomentarios:savedata.cantcomentarios,
              cantlike:savedata.cantlike,
              imagen:savedata.imagen,
              index:savedata.index,
              views:savedata.views,
            });
          });
        }});
        collection.where("categoria","in",["diabetes"]).orderBy("fecha","desc").limit(4).get().then(snapshot => {
          if (snapshot.empty){
              console.log('No matching documents.');
            return;
          }else{
        snapshot.forEach(doc => {
          let savedata = doc.data();
              data.cate2.push({
                titulo:savedata.titulo,
                fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
                url:savedata.categoria+"/"+savedata.url,
                articulo:savedata.resumen,
                cantcomentarios:savedata.cantcomentarios,
                cantlike:savedata.cantlike,
                imagen:savedata.imagen,
                index:savedata.index,
                views:savedata.views,
              });
            })
          }});
  

      db.collection("articulos").where("fecha","<",date).orderBy("fecha","desc").limit(4).get()
      .then((snapshot=>{
        if(snapshot.empty){
          console.log("documeto no encontrado");
        }else{
          snapshot.forEach(doc=>{
            if(init==true){
            let savedata = doc.data();
              data.separado.push({
              titulo:savedata.titulo,
              fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
              url:savedata.categoria+"/"+savedata.url,
              articulo:savedata.resumen,
              cantcomentarios:savedata.cantcomentarios,
              cantlike:savedata.cantlike,
              imagen:savedata.imagen,
              index:savedata.index,
              views:savedata.views,
              });
              init = false;
            }else{
              let savedata = doc.data();
              data.post.push({
              titulo:savedata.titulo,
              fecha:savedata.fecha.toDate().toLocaleDateString("es-Es"),
              url:savedata.categoria+"/"+savedata.url,
              articulo:savedata.resumen,
              cantcomentarios:savedata.cantcomentarios,
              cantlike:savedata.cantlike,
              imagen:savedata.imagen,
              index:savedata.index,
              views:savedata.views,
              });
            }
          })
          res.render("templates/homepage",{layout:"homepage",data});
          }
        })

      )});



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
      console.log('No matching documents.');
      return;
    }else{
      snapshot.forEach(doc => {
        console.log(doc.data().titulo)
      })
    }})
  collection.where("categoria","in",["salud"]).limit.get().then(snapshot => {
    if (snapshot.empty) {
      console.log('No matching documents.');
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
    let data = [];
    let index;
    db.collection(req.params.articulos).where("url","==",req.params.articulo)
    .get().then(snapshot => {
        if (snapshot.empty) {
          console.log('No matching documents.');
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