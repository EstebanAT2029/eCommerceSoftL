const express = require('express');
const bodyParser = require('body-parser');
const sequelize = require('./config/database');
const { YiishopCategory, YiishopCustomer, YiishopImage, YiishopOrder, YiishopProductOrder, YiishopProduct, YiishopShoppingCart } = require('./models');

const app = express();
const port = 3000;

app.use(bodyParser.json());

// Sincronizar la base de datos
sequelize.sync()
  .then(() => console.log('Base de datos sincronizada'))
  .catch((err) => console.log('Error sincronizando base de datos:', err));

// CRUD para YiishopCategory
app.get('/categories', async (req, res) => {
  try {
    const categories = await YiishopCategory.findAll();
    res.json(categories);
  } catch (error) {
    res.status(500).send(error.message);
  }
});

app.post('/category', async (req, res) => {
  try {
    const category = await YiishopCategory.create(req.body);
    res.status(201).json(category);
  } catch (error) {
    res.status(500).send(error.message);
  }
});

// Similarmente puedes crear rutas CRUD para YiishopCustomer, YiishopImage, YiishopOrder, YiishopProductOrder, YiishopProduct y YiishopShoppingCart

app.listen(port, () => {
  console.log(`API corriendo en http://localhost:${port}`);
});
