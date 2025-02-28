-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-02-2025 a las 18:45:10
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `yiishop`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishopcategory`
-- 

CREATE TABLE `yiishopcategory` (
  `category_id` int(11) NOT NULL auto_increment,
  `parent` int(11) default NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) default NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `yiishopcategory`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishopcustomer`
-- 

CREATE TABLE `yiishopcustomer` (
  `customer_id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `address` varchar(45) NOT NULL,
  `zipcode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `yiishopcustomer`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishopimage`
-- 

CREATE TABLE `yiishopimage` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `filename` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `yiishopimage`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishoporder`
-- 

CREATE TABLE `yiishoporder` (
  `order_id` int(11) NOT NULL auto_increment,
  `customer_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) default NULL,
  `ordering_confirmed` tinyint(1) default NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `yiishoporder`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishopproductorder`
-- 

CREATE TABLE `yiishopproductorder` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `product_shipped` tinyint(1) default NULL,
  `product_arrived` tinyint(1) default NULL,
  PRIMARY KEY  (`product_id`,`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `yiishopproductorder`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishopproducts`
-- 

CREATE TABLE `yiishopproducts` (
  `product_id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `price` varchar(45) default NULL,
  `color` varchar(45) default NULL,
  `weight` varchar(45) default NULL,
  `material` varchar(45) default NULL,
  `size` varchar(45) default NULL,
  `unit` varchar(45) default NULL,
  `language` varchar(45) default NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `yiishopproducts`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `yiishopshoppingcart`
-- 

CREATE TABLE `yiishopshoppingcart` (
  `cart_id` int(11) NOT NULL auto_increment,
  `amount` float default NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) default NULL,
  `cartowner` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `yiishopshoppingcart`
-- 


