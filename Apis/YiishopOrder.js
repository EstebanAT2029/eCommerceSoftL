const { DataTypes } = require('sequelize');
const sequelize = require('../config/database');

const YiishopOrder = sequelize.define('YiishopOrder', {
  order_id: {
    type: DataTypes.INTEGER,
    primaryKey: true,
    autoIncrement: true,
  },
  customer_id: {
    type: DataTypes.INTEGER,
    allowNull: false,
  },
  ordering_date: {
    type: DataTypes.INTEGER,
    allowNull: false,
  },
  ordering_done: {
    type: DataTypes.BOOLEAN,
    allowNull: true,
  },
  ordering_confirmed: {
    type: DataTypes.BOOLEAN,
    allowNull: true,
  },
});

module.exports = YiishopOrder;
