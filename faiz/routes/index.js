var express = require('express');
var router = express.Router();

/* GET home page. */

router.get('/:id', function(req, res, next) {
  var id=req.params.id;
  res.send(id)
 // res.send(id)
});

module.exports = router;
