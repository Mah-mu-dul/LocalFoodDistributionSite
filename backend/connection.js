var mysql = require('mysql')

var con = mysql.createConnection({
    host: "localhost",
    user: 'root',
    password: "",
    database: "localfood"
})

module.exports = con;