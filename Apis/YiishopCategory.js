const { DataTypes } = require('sequelize');
const sequelize = require('../config/database');

const YiishopCategory = sequelize.define('YiishopCategory', {
  category_id: {
    type: DataTypes.INTEGER,
    primaryKey: true,
    autoIncrement: true,
  },
  parent: {
    type: DataTypes.INTEGER,
    allowNull: true,
  },
  title: {
    type: DataTypes.STRING(45),
    allowNull: false,
  },
  description: {
    type: DataTypes.TEXT,
    allowNull: true,
  },
  language: {
    type: DataTypes.STRING(45),
    allowNull: true,
  },
});

module.exports = YiishopCategory;
