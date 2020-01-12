const admin = require("firebase-admin");
const servicesFire = {}
var serviceAccount = require("./firebaseclave.json");
const appAdmin =  admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: "https://prueba-a4587.firebaseio.com"
  });

servicesFire.db = appAdmin.firestore();
servicesFire.storage = appAdmin.storage();
module.exports = servicesFire