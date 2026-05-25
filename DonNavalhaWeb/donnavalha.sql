CREATE DATABASE donnavalha;

USE donnavalha;

CREATE TABLE usuarios(

id INT PRIMARY KEY AUTO_INCREMENT,

nome VARCHAR(100),

email VARCHAR(100),

senha VARCHAR(100)

);

CREATE TABLE agendamentos(

id INT PRIMARY KEY AUTO_INCREMENT,

nome VARCHAR(100),

barbeiro VARCHAR(100),

servico VARCHAR(100),

data_agendamento DATE,

horario VARCHAR(20)

);