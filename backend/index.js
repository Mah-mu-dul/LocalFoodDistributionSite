var con = require("./connection")
const cors = require('cors');


var express = require('express')
var app = express()
var bodyParser = require('body-parser')

app.use(cors());
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended: true }))


app.get('/', (req, res) => {
    // res.sendFile(__dirname + "/AddProduct.html")
    res.send("working")
})

app.get('/showUsers', (req, res) => {
    // res.sendFile(__dirname + "/AddProduct.html")
    const sql = "SELECT * FROM User_T"
    con.query(sql, (error, results) => {
        if (error) {
            console.error(error);
        } else {

            res.send(results)
        }
    });
})


app.get('/getProducts', (req, res) => {
    // res.sendFile(__dirname + "/AddProduct.html")
    const sql = "SELECT * FROM product_T"
    con.query(sql, (error, results) => {
        if (error) {
            console.error(error);
        } else {

            res.send(results)
        }
    });
})
app.post('/addproduct', (req, res) => {
    const { Product_id, Image_URL, User_id, Name, Quantity, Manufacture_date, Expire_date, Price, Vat } = req.body

    const sql = "INSERT INTO Product_T(Product_id,Image_URL, User_id, Name, Quantity, Manufacture_date, Expire_date, Price, Vat) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
    const values = [Product_id, Image_URL, User_id, Name, Quantity, Manufacture_date, Expire_date, Price, Vat];

    // Assuming you are using the mysql library
    con.query(sql, values, (error, results, fields) => {
        if (error) {
            console.error(error);
        } else {
            console.log("Data inserted successfully!");
            res.send("itemm added succesfully")
        }

    });
})
app.post('/register', (req, res) => {
    const bodyKeys = Object.keys(req.body);
    const bodyValues = Object.values(req.body);
    const sql = `INSERT INTO User_T (${bodyKeys.join(', ')}) VALUES (${Array(bodyValues.length).fill('?').join(', ')})`;
    const values = bodyValues;
    con.query(sql, values, (error, results, fields) => {
        if (error) {
            console.error(error);
            return res.status(500).send("Internal Server Error");
        } else {
            console.log("Data inserted successfully!");
            return res.send("Item added successfully");
        }
    });
    
})
app.post('/login', (req, res) => {
    // res.sendFile(__dirname + "/AddProduct.html")
    const { User_id, Password } = req.body
    const sql = `SELECT Password FROM User_T 
                WHERE User_id = ${User_id}`

    con.query(sql, (error, results) => {
        try {
            if (error) {
                console.error(error);
            } else {
                results.forEach(i => {
                    if (i.Password === Password) {
                        res.send(true)
                    }
                });
            }
            res.send(false)
        } catch (error) {
            res.send(false)
        }
    });
})

app.listen(7000)


