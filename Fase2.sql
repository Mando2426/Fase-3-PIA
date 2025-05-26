CREATE DATABASE fase2;
USE fase2;

CREATE TABLE quintas (
    ID_Quinta INT NOT NULL PRIMARY KEY,
    Nombre VARCHAR(75) NOT NULL,
    Ubicacion VARCHAR(75) NOT NULL,
    Precio DECIMAL(10,2) NOT NULL,
    Capacidad_Dia INT NOT NULL,
    Alberca TINYINT(1) NOT NULL,
    Wifi TINYINT(1) NOT NULL,
    Baños INT NOT NULL,
    Salon_Eventos TINYINT(1) NOT NULL,
    Cocina TINYINT(1) NOT NULL,
    Aire_Acondicionado TINYINT(1) NOT NULL,
    Cantidad_rentas INT NOT NULL,
    Cantidad_cancelaciones INT NOT NULL
);

CREATE TABLE reembolsos (
    ID_Reembolso INT NOT NULL PRIMARY KEY,
    ID_Reserva INT NOT NULL,
    Monto DECIMAL(10,2) NOT NULL,
    Fecha_Reembolso DATE NOT NULL,
    Motivo VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_Reserva) REFERENCES reservas(ID_Reserva)
);

CREATE TABLE reservas (
    ID_Reserva INT NOT NULL PRIMARY KEY,
    ID_Quinta INT NOT NULL,
    ID_Usuario INT NOT NULL,
    Fecha_ing DATE NOT NULL,
    Fecha_sal DATE NOT NULL,
    Total INT NOT NULL,
    Ocupada TINYINT(1) NOT NULL,
    FOREIGN KEY (ID_Quinta) REFERENCES quintas(ID_Quinta),
    FOREIGN KEY (ID_Usuario) REFERENCES usuario(ID_Usuario)
);

CREATE TABLE roles (
    ID_Rol INT NOT NULL PRIMARY KEY,
    Nombre_Rol VARCHAR(50) NOT NULL
);

CREATE TABLE usuario (
    ID_Usuario INT NOT NULL PRIMARY KEY,
    Nombre VARCHAR(75) NOT NULL,
    Apellido_P VARCHAR(25) NOT NULL,
    Apellido_M VARCHAR(25) NOT NULL,
    Correo VARCHAR(320) NOT NULL,
    Contraseña VARCHAR(320) NOT NULL,
    Telefono INT NOT NULL,
    Fecha_nac DATE NOT NULL,
    ID_Rol INT NOT NULL,
    FOREIGN KEY (ID_Rol) REFERENCES roles(ID_Rol)
);


DELIMITER //

CREATE PROCEDURE ProcesarReembolso(IN reserva_id INT)
BEGIN
    DECLARE fecha_ingreso DATE;
    DECLARE hoy DATE;
    DECLARE dias_anticipacion INT;
    DECLARE total_pago INT;
    DECLARE monto_reembolso DECIMAL(10,2);

    -- Obtener la fecha de ingreso y el total pagado
    SELECT Fecha_ing, Total INTO fecha_ingreso, total_pago
    FROM reservas
    WHERE ID_Reserva = reserva_id;

    SET hoy = CURDATE();
    SET dias_anticipacion = DATEDIFF(fecha_ingreso, hoy);

    -- Calcular el monto del reembolso
    IF dias_anticipacion >= 7 THEN
        SET monto_reembolso = total_pago;
    ELSEIF dias_anticipacion BETWEEN 3 AND 6 THEN
        SET monto_reembolso = total_pago * 0.5;
    ELSE
        SET monto_reembolso = 0;
    END IF;

    -- Insertar el reembolso
    INSERT INTO reembolsos (ID_Reserva, Monto, Fecha_Reembolso, Motivo)
    VALUES (
        reserva_id,
        monto_reembolso,
        hoy,
        CASE
            WHEN dias_anticipacion >= 7 THEN '100% reembolso'
            WHEN dias_anticipacion BETWEEN 3 AND 6 THEN '50% reembolso'
            ELSE 'Sin reembolso'
        END
    );
END //

DELIMITER ;
