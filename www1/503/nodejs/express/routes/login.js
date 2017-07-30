var express = require('express');
var mysql = require('mysql');
var router = express.Router();
const crypto = require('crypto');
const hash = crypto.createHash('md5');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('login', { title: 'Express' });
});
// router.post('/checklogin', function(req, res, next) {
//
//      var uname=req.body.uname;
//      var upass=req.body.upass;
//
//     var connection = mysql.createConnection({
//         host     : 'localhost',
//         user     : 'root',
//         password : '',
//         database : 'kaoshi'
//     });
//     var sql="select * from user";
//     connection.query(sql,function(error,result){
//
//         console.log(result);
//         if(error){
//             res.end();
//             return false;
//         }
//         var flag=true;
//         for(var i=0;i<result.length;i++){
//             if(result[i].uname==uname){
//                  hash.update(upass);
//                  upass=hash.digest('hex')
//                 console.log(upass);
//                 if(result[i].upass==upass){
//                       flag=false;
//                      res.cookie("login","yes");
//                      res.cookie("uname",uname);
//                      res.redirect("/admin");
//                      res.end();
//                      break;
//                 }
//             }
//         }
//         if(flag){
//             res.redirect("/login");
//             res.end();
//         }
//     })

// });
module.exports = router;
