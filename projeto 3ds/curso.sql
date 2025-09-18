-- 1️⃣ Criar o banco de dados
CREATE DATABASE IF NOT EXISTS curso;

-- 2️⃣ Selecionar o banco
USE curso;

-- 3️⃣ Criar a tabela para armazenar respostas do quiz e perguntas pessoais
CREATE TABLE IF NOT EXISTS respostas_completas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    q1 VARCHAR(5),
    q2 VARCHAR(5),
    q3 VARCHAR(5),
    q4 VARCHAR(5),
    q5 VARCHAR(5),
    q6 VARCHAR(5),
    q7 VARCHAR(5),
    q8 VARCHAR(5),
    q9 VARCHAR(5),
    q10 VARCHAR(5),
    melhor VARCHAR(255),
    profissao VARCHAR(10),
    faculdade VARCHAR(10),
    curso VARCHAR(10),
    parar_curso VARCHAR(10),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
