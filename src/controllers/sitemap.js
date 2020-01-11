const {db} = require("../../services/firebase");
const sitemap = {};

sitemap.linksitemap = function(req,res){
    var fullUrl = req.protocol + '://' + req.get('host') + req.originalUrl;
    let idsitemap = [];
    let lastmod = [];
    db.collection("sitemap").get().then(snapshot=>{
      snapshot.forEach(doc=>{
        idsitemap.push({id:req.protocol+'://'+req.get("host")+"/"+doc.id,lastmod:doc.data()});
      });
      res.header('Content-Type', 'application/xml');
      res.render("templates/sitemap",{layout:"site",idsitemap});
    });
  }

  sitemap.DinamicRouteSitemap = function(req,res){
        console.log(req.params.sitemap)
        res.send("ingreso")
  }
module.exports = sitemap;