const { environment } = require('config');
const express = require('express');
const helmet = require('helmet');
const morgan = require('morgan');
const compression = require('compression');
const minifyHTML = require('express-minify-html');

const { version } = require('../package.json');
const routes = require('./routes');

const app = express();

if (environment === 'production') {
  app.use(helmet());
}

if (environment !== 'test') {
  app.use(morgan('combined'));
}

app.use(compression());
app.set('view engine', 'pug');
app.set('views', './src/views');
app.use(minifyHTML({
  override: true,
  htmlMinifier: {
    collapseWhitespace: true,
    removeComments: true,
    sortAttributes: true,
    sortClassName: true,
  },
}));

app.use(express.static('./src/public'));

app.use(routes);

app.get('/robots.txt', (req, res) => res.type('text/plain').send('User-agent: *\nDisallow:'));

app.get('/status', (req, res) => res.status(200).send());

app.get('/version', (req, res) => res.json({
  version,
  environment: app.get('env'),
  viewCache: app.get('view cache') || false,
}));

app.get('*', (req, res) => res.status(404).redirect('/'));

module.exports = app;
