const { DataTypes } = require('sequelize');
const sequelize = require('..configdatabase');

const YiishopImage = sequelize.define('YiishopImage', {
  id {
    type DataTypes.INTEGER,
    primaryKey true,
    autoIncrement true,
  },
  title {
    type DataTypes.STRING(45),
    allowNull false,
  },
  filename {
    type DataTypes.STRING(45),
    allowNull false,
  },
  product_id {
    type DataTypes.INTEGER,
    allowNull false,
  },
});

module.exports = YiishopImage;
