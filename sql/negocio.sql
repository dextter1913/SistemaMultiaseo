DROP DATABASE if EXISTS multiaseo;
CREATE DATABASE multiaseo;
USE multiaseo;
CREATE TABLE usuarios(
  user VARCHAR (50) PRIMARY KEY NOt NULL,
  pass VARCHAR (50) NOT NULL
);
INSERT INTO
  usuarios(user, pass)
VALUES("dextter1913", "123"),("admin","123");
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
    1994-07-16,
    "dextter1913"
  );
  CREATE TABLE zonas(
    idzona INTEGER AUTO_INCREMENT PRIMARY KEY,
    nombrezona VARCHAR (60) NOT NULL
  );
CREATE TABLE cliente(
    idCl VARCHAR (20) PRIMARY KEY NOT NULL,
    nombreCl VARCHAR (50) NOT NULL,
    apellidoCl VARCHAR (50) NOT NULL,
    nombrenegocio VARCHAR (50) NOT NULL,
    ciudadCl VARCHAR (30) NOT NULL,
    direccionCl VARCHAR (50) NOT NULL,
    barrio VARCHAR (50) NOT NULL,
    correoCl VARCHAR (50) NOT NULL,
    telefonoCl VARCHAR (20) NOT NULL,
    fechanacCl VARCHAR (255) NOT NULL,
    idzona INTEGER NULL,
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
    cantidad INTEGER (25) NOT NULL,
    fechagasto DATETIME
  );

  CREATE TABLE totales(
    idtotal INTEGER AUTO_INCREMENT PRIMARY KEY,
    cantidad INTEGER (25) NOT NULL,
    fechatotal DATETIME 
  );