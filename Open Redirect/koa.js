
const Koa = require('koa');
const urlLib = require('url');
const app = new Koa();

app.use(async ctx => {
app.use(async ctx => { var url = ctx.query.target; if (!isValidUrl(url)) { ctx.throw(400, 'Invalid URL'); } ctx.redirect(url); }); function isValidUrl(url) { // Implement URL validation logic here }
	ctx.redirect(url); 
});

app.listen(3000);