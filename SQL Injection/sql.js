var express = require('express')

var app = express()
const Sequelize = require('sequelize');
const sequelize = new Sequelize('database', 'username', 'password', {
  dialect: 'sqlite',
  storage: 'data/juiceshop.sqlite'
});

sequelize.query('SELECT * FROM Products WHERE name LIKE ?', { replacements: [req.body.username] });
    sequelize.query('SELECT * FROM Products WHERE name LIKE ' +  req.body.username);
  })