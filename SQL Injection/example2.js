var mysql = require('db-mysql');
var http = require('http');
var out;
var valTom;
var req = http.request(options, function(res)
{
	res.on('data', function(chunk)
	{
		valTom = chunk;
	}
	);
}
);
new mysql.Database(
{
	hostname: 'localhost',
	user: 'user',
var mysql = require('db-mysql');
var http = require('http');
var out;
var valTom;
var req = http.request(options, function(res) {
	res.on('data', function(chunk) {
		valTom = chunk;
	});
});

var dbConfig = {
	hostname: 'localhost',
	user: process.env.DB_USER,
	password: process.env.DB_PASSWORD,
	database: 'test'
};

new mysql.Database(dbConfig).connect(function(error) {
	var the_Query =
	"INSERT INTO Customers (CustomerName, ContactName) VALUES ('Tom'," + valTom + ")";
	this.query(the_Query).execute(function(error, result) {
		if (error) {
			console.log("Error: " + error);
		} else {
			console.log('GENERATED id: ' + result.id);
		}
	});
	out = resIn;
});
	database: 'test'
}
).connect(function(error)
{
	var the_Query =
	"INSERT INTO Customers (CustomerName, ContactName) VALUES ('Tom'," +
	valTom + ")";
	this.query(the_Query).execute(function(error, result)
	{
		if (error)
		{
			console.log("Error: " + error);
		}
		else
		{
			console.log('GENERATED id: ' + result.id);
		}
	}
	);
	out = resIn;
}
);
