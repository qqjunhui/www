var express = require('express');
var xlsx = require('node-xlsx');//处理表格
var multer  = require('multer');
var mysql  = require('mysql');
var storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, './uploads')
    },
    filename: function (req, file, cb) {
        cb(null, file.fieldname + '-' + Date.now()+file.originalname)
    }
})

var upload = multer({ storage: storage })
var router = express.Router();

/* GET home page. */

function middle(req,res,next){
   if(!req.cookies.login){
      res.redirect("/login/")
   }
   next();
}

router.get('/add', middle,function(req, res, next) {
  res.render('addstu', { title: 'Express' });
});
router.post('/upload', upload.single('file'),function(req, res, next) {
    var data=xlsx.parse(req.file.path);
    var datas=[];
    for(var i=1;i<data[1].data.length;i++){
        var arr=[data[1].data[i][1]];
        datas.push(arr);


    }

    var connection = mysql.createConnection({
        host     : 'localhost',
        user     : 'root',
        password : 'root',
        database : 'kaoshi'
    });
    connection.query("insert into teach (tname) values ?",[datas],function(error){

        console.log(1111);
    })

    res.end("upload");
});


module.exports = router;
