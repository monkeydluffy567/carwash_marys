const mysql = require('mysql');

const mysqlConection = mysql.createConnection({
    database: 'car_wash',

    host: 'localhost',
    user: 'root',
    password: '',



});

mysqlConection.connect(function(err) {
    if (err) {
        console.log(err);
        return;
    } else {
        console.log('Database is connected');
    }
});

module.exports = mysqlConection;