const { DataTypes } = require('sequelize');
const sequelize = require('../config/database');

const YiishopShoppingCart = sequelize.define('YiishopShoppingCart', {
  cart_id: {
    type: DataTypes.INTEGER,
    primaryKey: true,
    autoIncrement: true,
  },
  amount: {
    type: DataTypes.FLOAT,
    allowNull: true,
  },
  product_id: {
    type: DataTypes.INTEGER,
    allowNull: false,
  },
  customer_id: {
    type: DataTypes.INTEGER,
    allowNull: true,
  },
  cartowner: {
    type: DataTypes.INTEGER,
    allowNull: false,
  },
});

module.exports = YiishopShoppingCart;
