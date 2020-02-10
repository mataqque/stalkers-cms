const LocalStrategy = require("passport-local").Strategy;
const User = require("../models/User");
const bcrypt = require("bcryptjs");

module.exports = function(passport){
    passport.use(new LocalStrategy({ usernameField: 'email' },(email,password,done)=>{
        User.findOne({email:email}).then((user)=>{
          if(!user){
            return done(null, false, { message: 'That email is not registered' });
          }
          bcrypt.compare(password, user.password, (err, isMatch) => {
                // isMatch = devuelve verdadero si la contraseña es correcta
                if (err) throw err;
                if (isMatch) {
                  // console.log(user);
                  return done(null, user);
                } else {
                  return done(null, false, { message: 'Password incorrect' });
                }
              });
        })
    }));

    passport.serializeUser(function(user, done) {
      done(null, user.id);
    });
    
    passport.deserializeUser(function(id, done) {
      // cerrar sesion
      console.log(id)
        User.findById(id, function(err, user) {
          done(err, user);
          console.log(user)
        });
      });
}
