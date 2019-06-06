-- Database: childCare

-- DROP DATABASE "childCare";

CREATE DATABASE childCare;

    -- Table: public.users

    -- Table: public.age
------------------------------------------------------------------------------
----------------------          AGE TABLE        -----------------------------
------------------------------------------------------------------------------
-- DROP TABLE public.age;

CREATE TABLE age
(
    id SERIAL PRIMARY KEY,
    age_group text
) 

    -- Table: public.allergies
------------------------------------------------------------------------------
----------------------------- ALLERGIES TABLE      ---------------------------
------------------------------------------------------------------------------
-- DROP TABLE public.allergies;

CREATE TABLE allergies
(
    id SERIAL PRIMARY KEY,
    allergy_type text
)

    -- Table: public."time"
------------------------------------------------------------------------------
-------------------------   TIME TABLE      ----------------------------------
------------------------------------------------------------------------------
--DROP TABLE public."time";

CREATE TABLE time
(
    id SERIAL PRIMARY KEY,
    whatTime text
) 


    -- Table: public.program
------------------------------------------------------------------------------  
------------------------ PROGRAM TABLE      ---------------------------------- 
------------------------------------------------------------------------------
-- DROP TABLE public.program;

CREATE TABLE program
(
    id SERIAL PRIMARY KEY,
    program_type text 
)

    -- Table: public.potty_trained
------------------------------------------------------------------------------
---------------------------  POTTY TABLE    ----------------------------------
------------------------------------------------------------------------------
-- DROP TABLE public.potty_trained;

CREATE TABLE potty_trained
(
    id SERIAL PRIMARY KEY,
    pottied boolean
)
    

------------------------------------------------------------------------------
----------------------------    USER TABLE      ------------------------------
------------------------------------------------------------------------------
-- DROP TABLE public.users;

CREATE TABLE users
(
    name text,
    password text,
    phone text,
    admin boolean,
    email text UNIQUE,
    id SERIAL PRIMARY KEY,
    program_id text
)



    -- Table: public.children
------------------------------------------------------------------------------
-------------------------  CHILDREN TABLE       ------------------------------
------------------------------------------------------------------------------
-- DROP TABLE public.children;

CREATE TABLE children
(
    child_name text,
    birthday date,
    notes text,
    user_id integer,
    id SERIAL PRIMARY KEY,
    time_id integer
)


    -- Table: public.child_allergies
------------------------------------------------------------------------------
-----------------------  CHILD.ALLERGIES TABLE -------------------------------
------------------------------------------------------------------------------
-- DROP TABLE public.child_allergies;

CREATE TABLE child_allergies
(
    id SERIAL PRIMARY KEY,
    child_id integer,
    allergies_id integer
)

-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------
-- ALTER TABLE users
-- ADD FOREIGN KEY (program_id) REFERENCES program(id)