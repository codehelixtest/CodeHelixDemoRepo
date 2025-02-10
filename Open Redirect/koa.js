
const Koa = require('koa');
const urlLib = require('url');
const app = new Koa();

app.use(async ctx => {
	var url = ctx.query.target;
const Koa = require('koa');
const urlLib = require('url');
const app = new Koa();

app.use(async ctx => {
	var url = ctx.query.target;
	if (isValidUrl(url)) {
		ctx.redirect(url);
	} else {
		ctx.status = 400;
		ctx.body = 'Invalid URL';
	}
});

function isValidUrl(url) {
	// Implement URL validation logic here
	return true; // Placeholder
}

app.listen(3000);
});

app.listen(3000);