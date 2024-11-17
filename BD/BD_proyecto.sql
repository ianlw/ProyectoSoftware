CREATE DATABASE IF NOT EXISTS bd_portafolios;
USE bd_portafolios;

-- Tabla Revisor
CREATE TABLE Revisor (
    id_revisor VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    habilitado BOOLEAN NOT NULL,
    contraseña VARBINARY(255) NOT NULL
);

-- Tabla Docente
CREATE TABLE Docente (
    id_docente VARCHAR(50) PRIMARY KEY,
    id_revisor VARCHAR(50),
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    habilitado BOOLEAN NOT NULL,
    contraseña VARBINARY(255) NOT NULL,
    FOREIGN KEY (id_revisor) REFERENCES Revisor(id_revisor)
);

-- Tabla Administrador
CREATE TABLE Administrador (
    id_admin VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    contraseña VARBINARY(255) NOT NULL
);

-- Tabla semestres
CREATE TABLE semestres (
    id_semestre VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    fecha_inicio DATETIME NOT NULL,
    fecha_fin DATETIME NOT NULL
);

-- Tabla Malla
CREATE TABLE Malla (
    id_malla VARCHAR(50) PRIMARY KEY,
    descripcion TEXT NOT NULL,
    anio DATETIME NOT NULL
);

-- Tabla Curso
CREATE TABLE Curso (
    id_curso VARCHAR(50) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    codigo VARCHAR(20) NOT NULL
);

-- Tabla CargaAcademica
CREATE TABLE CargaAcademica (
    id_carga_academica VARCHAR(50) PRIMARY KEY,
    id_docente VARCHAR(50) NOT NULL,
    id_curso VARCHAR(50) NOT NULL,
    id_malla VARCHAR(50) NOT NULL,
    id_semestre VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_docente) REFERENCES Docente(id_docente),
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso),
    FOREIGN KEY (id_malla) REFERENCES Malla(id_malla),
    FOREIGN KEY (id_semestre) REFERENCES semestres(id_semestre)
);

-- Tabla Portafolio
CREATE TABLE Portafolio (
    id_portafolio VARCHAR(50) PRIMARY KEY,
    id_carga_academica VARCHAR(50) NOT NULL,
    fecha_primera_subida DATETIME NOT NULL,
    nro_subidas INT NOT NULL,
    ruta_archivo VARCHAR(255) NOT NULL,
    estado BOOLEAN NOT NULL,
    FOREIGN KEY (id_carga_academica) REFERENCES CargaAcademica(id_carga_academica)
);

-- Tabla Revision
CREATE TABLE Revision (
    id_revision VARCHAR(50) PRIMARY KEY,
    fecha_revision DATETIME NOT NULL,
    comentarios TEXT NOT NULL,
    estado CHAR(1) NOT NULL,
    id_portafolio VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_portafolio) REFERENCES Portafolio(id_portafolio)
);
