var mongoose = require('mongoose');

var Schema = mongoose.Schema;

var bcrypt = require('bcrypt-nodejs');

var UserSchema = new Schema({
   username: {type: String,lowercase: true, required: true, unique: true},
    password: {type: String,required: true},
    email: {type: String, required: true,lowercase: true, unique: true}
});


UserSchema.pre('save',function(next) {
    var user=this;
    bcrypt.hash(user.password,null,null,function(err,hash) {
        if(err){
            next()
        }else {
            user.password = hash;
            next();
        }
    });

});


bcrypt.hash("bacon",null,null,function(err,hash) {

});

module.exports = mongoose.model('User',UserSchema);