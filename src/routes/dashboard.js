const express = require('express');
const router = express.Router();
router.get("/pagina",(req,res)=>{
    res.render("templates/dashboardpagina",{layout:"dashboard"});
});
router.get("/escritorio",(req,res)=>{
    res.render("templates/dashboardescritorio",{layout:"dashboard"});
});


module.exports = router;