-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-03-2016 a las 00:51:00
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kingdata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrador del Sistema', NULL, NULL, NULL, NULL),
('vendedor', 1, 'Vendedor', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `ClienteID` int(11) NOT NULL,
  `ClienteNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ClienteCedula` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ClienteDireccion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ClienteEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ClienteTelefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ClienteContacto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Observaciones` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RutaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FormasPagos`
--

CREATE TABLE IF NOT EXISTS `FormasPagos` (
  `FormaPagoID` int(11) NOT NULL,
  `FormaPagoNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1457483926),
('m140506_102106_rbac_init', 1457483931);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ordenes`
--

CREATE TABLE IF NOT EXISTS `Ordenes` (
  `OrdenID` int(11) NOT NULL,
  `OrdenFecha` date NOT NULL,
  `OrdenEstado` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Observaciones` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ordencol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ClienteID` int(11) NOT NULL,
  `FormaPagoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ordenes_Productos`
--

CREATE TABLE IF NOT EXISTS `Ordenes_Productos` (
  `OrdenID` int(11) NOT NULL,
  `ProductoID` int(11) NOT NULL,
  `CantidadProducto` int(11) DEFAULT NULL,
  `TotalPrecio` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE IF NOT EXISTS `Productos` (
  `ProductoID` int(11) NOT NULL,
  `ProductoNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ProductoDescripcion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoModelo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoColor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoSKU` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoIm1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoIm2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoIm3` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductoDisponible` int(11) DEFAULT NULL,
  `ProductoMaximo` int(11) DEFAULT NULL,
  `Productocol` int(11) DEFAULT NULL,
  `ProductoPrecio` decimal(8,2) DEFAULT NULL,
  `ProductoIva` decimal(8,2) DEFAULT NULL,
  `TipoProductoID` int(11) NOT NULL,
  `ProveedorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedores`
--

CREATE TABLE IF NOT EXISTS `Proveedores` (
  `ProveedorID` int(11) NOT NULL,
  `ProveedorNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ProveedorEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProveedorTelefono` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProveedorDireccion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Roles`
--

CREATE TABLE IF NOT EXISTS `Roles` (
  `RolID` int(11) NOT NULL,
  `RolNombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Roles`
--

INSERT INTO `Roles` (`RolID`, `RolNombre`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rutas`
--

CREATE TABLE IF NOT EXISTS `Rutas` (
  `RutaID` int(11) NOT NULL,
  `RutaNombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `RutaFecha` date NOT NULL,
  `UsuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TiposProductos`
--

CREATE TABLE IF NOT EXISTS `TiposProductos` (
  `TipoProductoID` int(11) NOT NULL,
  `TipoProductoNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `UsuarioID` int(11) NOT NULL,
  `UsuarioNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UsuarioApellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UsuarioEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UsuarioAlias` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UsuarioTelefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UsuarioClave` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `UsuarioDireccion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Usuariocol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RolID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`UsuarioID`, `UsuarioNombre`, `UsuarioApellido`, `UsuarioEmail`, `UsuarioAlias`, `UsuarioTelefono`, `UsuarioClave`, `UsuarioDireccion`, `Usuariocol`, `RolID`) VALUES
(1, 'Administrador', 'Administrador', 'admin@gmail.com', 'admin ', NULL, '$2y$13$I7RG8AmD5q2MC6V.H.ECkOxmOai4YBdK0mFipIHR0fH2jQosj3K6y', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`ClienteID`),
  ADD KEY `fk_Clientes_Rutas_idx` (`RutaID`);

--
-- Indices de la tabla `FormasPagos`
--
ALTER TABLE `FormasPagos`
  ADD PRIMARY KEY (`FormaPagoID`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `Ordenes`
--
ALTER TABLE `Ordenes`
  ADD PRIMARY KEY (`OrdenID`),
  ADD KEY `fk_Ordenes_Clientes1_idx` (`ClienteID`),
  ADD KEY `fk_Ordenes_FormasPagos1_idx` (`FormaPagoID`);

--
-- Indices de la tabla `Ordenes_Productos`
--
ALTER TABLE `Ordenes_Productos`
  ADD PRIMARY KEY (`OrdenID`,`ProductoID`),
  ADD KEY `fk_Orden_has_Productos_Productos1_idx` (`ProductoID`),
  ADD KEY `fk_Orden_has_Productos_Ordenes1_idx` (`OrdenID`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`ProductoID`),
  ADD KEY `fk_Productos_TiposProductos1_idx` (`TipoProductoID`),
  ADD KEY `fk_Productos_Proveedors1_idx` (`ProveedorID`);

--
-- Indices de la tabla `Proveedores`
--
ALTER TABLE `Proveedores`
  ADD PRIMARY KEY (`ProveedorID`);

--
-- Indices de la tabla `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`RolID`);

--
-- Indices de la tabla `Rutas`
--
ALTER TABLE `Rutas`
  ADD PRIMARY KEY (`RutaID`),
  ADD KEY `fk_Rutas_Usuarios1_idx` (`UsuarioID`);

--
-- Indices de la tabla `TiposProductos`
--
ALTER TABLE `TiposProductos`
  ADD PRIMARY KEY (`TipoProductoID`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD KEY `fk_Usuarios_Roles1_idx` (`RolID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `ClienteID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `FormasPagos`
--
ALTER TABLE `FormasPagos`
  MODIFY `FormaPagoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Ordenes`
--
ALTER TABLE `Ordenes`
  MODIFY `OrdenID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Proveedores`
--
ALTER TABLE `Proveedores`
  MODIFY `ProveedorID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Roles`
--
ALTER TABLE `Roles`
  MODIFY `RolID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Rutas`
--
ALTER TABLE `Rutas`
  MODIFY `RutaID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TiposProductos`
--
ALTER TABLE `TiposProductos`
  MODIFY `TipoProductoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD CONSTRAINT `fk_Cliente_Ruta` FOREIGN KEY (`RutaID`) REFERENCES `Rutas` (`RutaID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Ordenes`
--
ALTER TABLE `Ordenes`
  ADD CONSTRAINT `fk_Ordenes_Clientes1` FOREIGN KEY (`ClienteID`) REFERENCES `Clientes` (`ClienteID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ordenes_FormasPagos1` FOREIGN KEY (`FormaPagoID`) REFERENCES `FormasPagos` (`FormaPagoID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Ordenes_Productos`
--
ALTER TABLE `Ordenes_Productos`
  ADD CONSTRAINT `fk_Orden_has_Productos_Ordenes1` FOREIGN KEY (`OrdenID`) REFERENCES `Ordenes` (`OrdenID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Orden_has_Productos_Productos1` FOREIGN KEY (`ProductoID`) REFERENCES `Productos` (`ProductoID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD CONSTRAINT `fk_Productos_Proveedores1` FOREIGN KEY (`ProveedorID`) REFERENCES `Proveedores` (`ProveedorID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_TiposProductos1` FOREIGN KEY (`TipoProductoID`) REFERENCES `TiposProductos` (`TipoProductoID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Rutas`
--
ALTER TABLE `Rutas`
  ADD CONSTRAINT `fk_Rutas_Usuarios1` FOREIGN KEY (`UsuarioID`) REFERENCES `Usuarios` (`UsuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `fk_Usuarios_Roles1` FOREIGN KEY (`RolID`) REFERENCES `Roles` (`RolID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
