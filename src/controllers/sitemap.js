const db = require("../../services/firebase");
const sitemap = {};

sitemap.linksitemap = function(req,res){
    var fullUrl = req.protocol + '://' + req.get('host') + req.originalUrl;
    console.log(fullUrl)
    let idsitemap = [];
    let datemof = [];
    db.collection("sitemap").get().then(snapshot=>{
      snapshot.forEach(doc=>{
        idsitemap.push({id:req.protocol+'://'+req.get("host")+"/"+doc.id,datemof:doc.data()});
      });
      console.log(idsitemap)
      res.header('Content-Type', 'application/xml');
      res.render("templates/sitemap",{layout:"site",idsitemap});
    });
  }

  sitemap.DinamicRouteSitemap = function(req,res){
        console.log(req.params.sitemap)
        res.send("ingreso")
  }
module.exports = sitemap;