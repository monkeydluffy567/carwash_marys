//-----------Imports------------------

var createError = require('http-errors');
//express
var express = require('express');
//metodo path se encarga de unir directorios
var path = require('path');
var cookieParser = require('cookie-parser');
//para registrar las peticiones que llegan
var morgan = require('morgan');
//importar parser de JSON
var bodyParser = require('body-parser')

//const http = require('http');
var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');


app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
//-----------Static Files------------------    
//para archivos imagenes framework archivos css, js, etc
app.use(express.static(path.join(__dirname, 'public')));

//-----------Middlewares------------------
app.use(morgan('dev'));
//parseando JSON
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
//para entender todos los datos que vengan del formulario y como configuracion extended false por que no enviara imagenes
app.use(express.urlencoded({ extended: true }));

//-----------Settings------------------
//configuracion de CORS
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Authorization, X-API-KEY, Origin, X-Requested-With, Content-Type, Access-Control-Allow-Request-Method');
    res.header('Access-Control-Allow-Methods', 'GET,POST,OPTIONS,PUT,DELETE');
    res.header('Allow', 'GET,POST,OPTIONS,PUT,DELETE');
    next();
});

//-----------Routes------------------
//importando routes
const routeAutomoviles = require('./routes/automoviles.routes');
const routeBoletas = require('./routes/boletas.routes');
const routeProformas = require('./routes/proformas.routes');
const routeRoles = require('./routes/roles.routes');
const routeServicios = require('./routes/servicios.routes');
const routeUsuarios = require('./routes/usuarios.routes');

app.use('/api/automoviles/', routeAutomoviles);
app.use('/api/boletas/', routeBoletas);
app.use('/api/proformas/', routeProformas);
app.use('/api/roles/', routeRoles);
app.use('/api/servicios', routeServicios);
app.use('/api/usuarios', routeUsuarios);
// catch 404 and forward to error handler
app.use(function(req, res, next) {
    next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
    // set locals, only providing error in development
    res.locals.message = err.message;
    res.locals.error = req.app.get('env') === 'development' ? err : {};

    // render the error page
    res.status(err.status || 500);
    res.render('error');
});


module.exports = app;