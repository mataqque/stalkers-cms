var firebaseConfig = {
    apiKey: "AIzaSyCWaY3s3M3RJLEPfxpokbSksAytDLdl9Ho",
    authDomain: "prueba-a4587.firebaseapp.com",
    databaseURL: "https://prueba-a4587.firebaseio.com",
    projectId: "prueba-a4587",
    storageBucket: "prueba-a4587.appspot.com",
    messagingSenderId: "957528440000",
    appId: "1:957528440000:web:0e6ad1575ea9e860ddc125"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  console.log("correcto")

  document.getElementById("formulario_auth").addEventListener("submit",function(event){
      event.preventDefault();
        var email = event.target.email.value;
        var password = event.target.clave.value;

        firebase.auth().signInWithEmailAndPassword(email, password)
        .then(function(){
            alert("si existe el usuario papu")
        })
        .catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            alert("No existe el usuario papu")
        });
  },false);
  $("#butonmodal").click(function(){
      $("#exampleModal").modal()
  })

  /// autentificar facebook  :v mordishita

  var provider = new firebase.auth.FacebookAuthProvider();
  firebase.auth().useDeviceLanguage();
  provider.setCustomParameters({
    'display': 'popup'
  });
  function llamada(){
  firebase.auth().signInWithPopup(provider).then(function(result) {
    // This gives you a Facebook Access Token. You can use it to access the Facebook API.
    var token = result.credential.accessToken;
    // The signed-in user info.
    var user = result.user;
    console.log(token)
    console.log(user)
    // ...
  }).catch(function(error) {
    // Handle Errors here.
    console.log("usuario no registrado");
    console.log(error)
    var errorCode = error.code;
    var errorMessage = error.message;
    // The email of the user's account used.
    var email = error.email;
    // The firebase.auth.AuthCredential type that was used.
    var credential = error.credential;
    // ...
  });
}