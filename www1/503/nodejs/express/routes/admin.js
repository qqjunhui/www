var express = require('express');
var router = express.Router();

/* GET home page. */

function middle(req,res,next){
   if(!req.cookies.login){
      res.redirect("/login/")
   }
   next();
}

router.get('/', middle,function(req, res, next) {
  res.render('admin', { title: 'Express' });
});


module.exports = router;
