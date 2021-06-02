DROP DATABASE if EXISTS Backup;
CREATE DATABASE Backup;
USE Backup;
CREATE TABLE usuarios(
  user VARCHAR (50) PRIMARY KEY NOt NULL,
  pass VARCHAR (50) NOT NULL,
  super BOOLEAN NOT NULL,
  fechaInicioLicencia DATE NOT NULL,
  fechaFinalLicencia DATE NOT NULL
);
INSERT INTO
  usuarios(
    user,
    pass,
    super,
    fechaInicioLicencia,
    fechaFinalLicencia
  )
VALUES(
    "dextter1913",
    "123",
    TRUE,
    '2021-05-11',
    '2022-05-14'
  ),(
    "admin",
    "123",
    TRUE,
    '2021-05-11',
    '2022-05-14'
  );
CREATE TABLE empleados(
    idEmp VARCHAR (20) PRIMARY KEY NOT NULL,
    nombreEmp VARCHAR (50) NOT NULL,
    apellidoEmp VARCHAR (50) NOT NULL,
    telefonoEmp VARCHAR (20) NOT NULL,
    direccionEmp VARCHAR (50) NOT NULL,
    correoEmp VARCHAR (50) NOT NULL,
    fechanacEmp DATE NOT NULL,
    user VARCHAR (50) NOT NULL,
    index(user),
    FOREIGN KEY (user) REFERENCES usuarios(user)
  );
INSERT INTO
  empleados(
    idEmp,
    nombreEmp,
    apellidoEmp,
    telefonoEmp,
    direccionEmp,
    correoEmp,
    fechanacEmp,
    user
  )
VALUES(
    "1035391050",
    "Cristian Orlando",
    "Aguirre Cataño",
    "3166857000",
    "cra 33 47 35 int 172",
    "clau32usa@gmail.com",
    '1994-07-16',
    "dextter1913"
  ),(
    "159753456258",
    "Developer",
    "Atlaz",
    "3166857000",
    "cra 33 47 35 int 172",
    "clau32usa@gmail.com",
    '1994-07-16',
    "admin"
  );
CREATE TABLE zonas(
    idzona INTEGER AUTO_INCREMENT PRIMARY KEY,
    nombrezona VARCHAR (60) NOT NULL
  );
CREATE TABLE cliente(
    idCl VARCHAR (20) PRIMARY KEY NOT NULL,
    nombreCl VARCHAR (50) NULL,
    apellidoCl VARCHAR (50) NULL,
    nombrenegocio VARCHAR (50) NULL,
    ciudadCl VARCHAR (30) NULL,
    direccionCl VARCHAR (50) NULL,
    barrio VARCHAR (50) NULL,
    correoCl VARCHAR (50) NULL,
    telefonoCl VARCHAR (50) NULL,
    fechanacCl VARCHAR (255) NULL,
    idzona INTEGER NOT NULL,
    index(idzona),
    FOREIGN KEY (idzona) REFERENCES zonas (idzona),
    user VARCHAR (50) NOT NULL,
    index(user),
    FOREIGN KEY (user) REFERENCES usuarios (user)
  );
CREATE TABLE categorias(
    nomCategoria VARCHAR (50) PRIMARY KEY NOT NULL
  );
CREATE TABLE productos(
    idProd INTEGER (20) PRIMARY KEY AUTO_INCREMENT,
    nomProd VARCHAR (50) NOT NULL,
    precioProd float (25) NOT NULL,
    precioVenta float (25) NOT NULL,
    nomCategoria VARCHAR (50) NOT NULL,
    descripcionProd TEXT NOT NULL,
    Stock INTEGER (3) NOT NULL,
    user VARCHAR (50) NOT NULL,
    index (nomCategoria),
    FOREIGN KEY (nomCategoria) REFERENCES categorias(nomCategoria),
    INDEX (user),
    FOREIGN KEY (user) REFERENCES usuarios (user)
  );
CREATE TABLE preciosProductos(
    idprecio INTEGER AUTO_INCREMENT PRIMARY KEY,
    precio DOUBLE NOT NULL,
    idProd INTEGER (20),
    index(idProd),
    FOREIGN KEY (idProd) REFERENCES productos(idProd)
  );
CREATE TABLE facturaVentas(
    Nfactura INTEGER (25) PRIMARY KEY AUTO_INCREMENT,
    fechaFactura DATE NOT NULL,
    ValorFactura FLOAT (25) NULL
  );
CREATE TABLE venta(
    idventa INTEGER (20) PRIMARY KEY AUTO_INCREMENT,
    fechaventa DATE NOT NULL,
    cantidad INTEGER (10) NOT NULL,
    totalV FLOAT (25) NOT NULL,
    Estadoventa VARCHAR (25) NULL,
    cliente VARCHAR (20) NOT NULL,
    producto INTEGER (20) NOT NULL,
    Factura INTEGER (25) NULL,
    index(cliente),
    FOREIGN KEY (cliente) REFERENCES cliente(idCl),
    index(producto),
    FOREIGN KEY (producto) REFERENCES productos(idProd),
    index(Factura),
    FOREIGN KEY (Factura) REFERENCES facturaVentas(Nfactura)
  );
CREATE TABLE gastos(
    idgasto INTEGER AUTO_INCREMENT PRIMARY KEY,
    fijos INTEGER (25) NOT NULL,
    variables INTEGER (25) NOT NULL,
    fechagasto DATETIME
  );
CREATE TABLE totales(
    idtotal INTEGER AUTO_INCREMENT PRIMARY KEY,
    cantidad INTEGER (25) NOT NULL,
    estado VARCHAR (25) NOT NULL,
    fechatotal DATETIME
  );
CREATE TABLE compras(
    NumeroFactura INTEGER NOT NULL PRIMARY KEY,
    Prefijo VARCHAR (10) NOT NULL,
    Cantidad INTEGER NOT NULL,
    ValorUnitario INTEGER NOT NULL,
    FechaCompra DATE NOT NULL,
    Total INTEGER NOT NULL,
    Descripcion VARCHAR (255) NOT NULL
  );
CREATE TABLE logs(
    idlog INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FechaLogeo DATETIME,
    FechaDeslogeo DATETIME,
    user VARCHAR (50) NOT NULL,
    index(user),
    FOREIGN KEY (user) REFERENCES usuarios(user)
  );
/*SELECT * FROM usuarios WHERE user = 'dextter1913' AND pass = '123' AND super = TRUE AND fechaInicioLicencia = '2021-05-11' AND fechaFinalLicencia <= '2021-05-14';                       
--ON DELETE CASCADE
UPDATE usuarios SET fechaInicioLicencia = CURDATE() WHERE user = 'dextter1913';                          
SELECT * FROM usuarios WHERE user = 'dextter1913' AND pass = '123' AND super = TRUE AND fechaInicioLicencia <= fechaFinalLicencia;


///////////////////////////////////////////////////////////////////
Query para eliminar constraing y modificar para poder habilitar el delete o el update en cascada
ALTER TABLE cliente DROP CONSTRAINT cliente_ibfk_2;
ALTER TABLE cliente DROP CONSTRAINT cliente_ibfk_1;

ALTER TABLE cliente 
  ADD CONSTRAINT cliente_ibfk_1
  FOREIGN KEY (user) 
  REFERENCES usuarios(user) 
  ON DELETE CASCADE;

*/
