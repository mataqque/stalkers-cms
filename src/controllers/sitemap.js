const {db} = require("../../services/firebase");
const sitemap = {};

sitemap.linksitemap = function(req,res){
    let all = [];
    db.collection("pruebasitemap").get().then(snapshot=>{
      snapshot.forEach(doc=>{
        for(num in doc.data()){
          all.push({
            url:doc.data()[num].url,
            lastmod:doc.data()[num].lastmod.toDate().toLocaleDateString(undefined),
          })
        }
      });
      console.log(all)
      res.header('Content-Type', 'application/xml');
      res.render("templates/sitemap",{layout:"site",all});
    });
  }

  sitemap.DinamicRouteSitemap = function(req,res){
    let idsitemap = [];
    let linkcss = "/css/404.css"
    console.log(req.originalUrl)
    // console.log(req.originalUrl.substr(1,this.length));

    const sitemapbasedatos = db.collection("sitemap").doc(req.originalUrl.substr(1,this.length)).get().then(doc=>{
      if(!doc.exists){
        res.render("templates/404",{linkcss});
      }else{
            let contenedor = doc.data();
            let content = [];
            // const options = { timeZoneName:"short",hour:"numeric",minute:"2-digit"};
            console.log(doc.data().cantidadmaxima)
            for(num in contenedor){
                content.push({
                url:req.protocol+'://'+req.get("host")+"/"+contenedor[num].url,
                lastmod:contenedor[num].lastmod.toDate().toLocaleDateString(undefined),
                imagenes:contenedor[num].imagen,
                });
            }
            console.log(content)
            res.header('Content-Type', 'application/xml');
            res.render("templates/sitemap",{layout:"subsitemap",content}); 
      }
    }).catch(erro=>{
        console.log(erro.message);
    });
  }
module.exports = sitemap;
