const express = require('express');
const router = express.Router();
const {ensureAuthenticated,forwardAuthenticated} = require("../passport/auth");

router.get("/",ensureAuthenticated,(req,res)=>{
    res.render("templates/dashboard",{layout:"dashboard"})  
  });
router.get("/pagina",(req,res)=>{
    res.render("templates/dashboardpagina",{layout:"dashboard"});
});
router.get("/escritorio",ensureAuthenticated,(req,res)=>{
    res.render("templates/dashboardescritorio",{layout:"dashboard"});
});


module.exports = router;