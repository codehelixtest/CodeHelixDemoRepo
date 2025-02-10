
console.log('WIP')
const express = require('express');
const router = express.Router()

router.get('/login',function(req, res){
let url = req.query.url; if (!isValidUrl(url)) { return res.status(400).send('Invalid URL'); } res.redirect(url);
    if(req.session.isAuthenticated()){
        res.redirect('http://example.com/'+followPath); //false positive
    }else{
        res.redirect('/');
    }
}); 

router.get('/goto',function(req, res){
    let url = encodeURI(req.query.url); //vulnerability
    res.redirect(url);
}); 


module.exports = router
