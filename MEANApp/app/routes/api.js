/**
 * Created by mohmaya on 01/06/17.
 */
//http://localhost:8080/users
//Obtaining data via post
//var express = require('express');
//var app = express();

var User = require('../models/user');

module.exports = function(router){
    router.post('/users',function(req,res) {
        var user = new User();
        if(! req.body) {
            res.send('End');
        }else {
            user.username = req.body.username;
            user.password = req.body.password;
            user.email = req.body.email;
            //
            //console.log(req.body);
            if(req.body.username == null || req.body.username == '' || req.body.password == null || req.body.password == '' || req.body.email == null || req.body.email == '' ){//if one of the fields is empty
                res.send('form incomplete');
            }else{
                user.save(function(err) {
                    if(err)
                    {
                        res.send('Username or Email Already exists');
                    }else{
                        res.send('User Created');
                    }
                });
            }

        }
    });
    return router;
}