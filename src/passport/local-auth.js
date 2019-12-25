const passport = require("passport");
const LocalStrategy = require("passport-local");

passport.use("local-singup", new LocalStrategy({
    usernameField:"email",
    passportField:"password",
    passReqToCallBack:true

},(req,email,password,done) =>{
    const user = new user()
}));