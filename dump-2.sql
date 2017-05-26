--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: schema; Type: SCHEMA; Schema: -; Owner: ziom
--

CREATE SCHEMA schema;


ALTER SCHEMA schema OWNER TO ziom;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: beer_table; Type: TABLE; Schema: public; Owner: ziom; Tablespace: 
--

CREATE TABLE beer_table (
    "Id" integer NOT NULL,
    "Name" text,
    "Price" double precision
);


ALTER TABLE public.beer_table OWNER TO ziom;

--
-- Name: beer_table_Id_seq; Type: SEQUENCE; Schema: public; Owner: ziom
--

CREATE SEQUENCE "beer_table_Id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."beer_table_Id_seq" OWNER TO ziom;

--
-- Name: beer_table_Id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: ziom
--

ALTER SEQUENCE "beer_table_Id_seq" OWNED BY beer_table."Id";


SET search_path = schema, pg_catalog;

--
-- Name: beer_table; Type: TABLE; Schema: schema; Owner: ziom; Tablespace: 
--

CREATE TABLE beer_table (
    "Id" integer NOT NULL,
    "Name" text,
    "Price" integer
);


ALTER TABLE schema.beer_table OWNER TO ziom;

--
-- Name: beer_table_Id_seq; Type: SEQUENCE; Schema: schema; Owner: ziom
--

CREATE SEQUENCE "beer_table_Id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE schema."beer_table_Id_seq" OWNER TO ziom;

--
-- Name: beer_table_Id_seq; Type: SEQUENCE OWNED BY; Schema: schema; Owner: ziom
--

ALTER SEQUENCE "beer_table_Id_seq" OWNED BY beer_table."Id";


SET search_path = public, pg_catalog;

--
-- Name: Id; Type: DEFAULT; Schema: public; Owner: ziom
--

ALTER TABLE ONLY beer_table ALTER COLUMN "Id" SET DEFAULT nextval('"beer_table_Id_seq"'::regclass);


SET search_path = schema, pg_catalog;

--
-- Name: Id; Type: DEFAULT; Schema: schema; Owner: ziom
--

ALTER TABLE ONLY beer_table ALTER COLUMN "Id" SET DEFAULT nextval('"beer_table_Id_seq"'::regclass);


SET search_path = public, pg_catalog;

--
-- Data for Name: beer_table; Type: TABLE DATA; Schema: public; Owner: ziom
--

INSERT INTO beer_table VALUES (1, 'Toporek(Bojan)', 4.5);
INSERT INTO beer_table VALUES (2, 'Czerwony smok', 5);
INSERT INTO beer_table VALUES (3, 'Guiness', 7);
INSERT INTO beer_table VALUES (4, 'Atak chmielu', 8);
INSERT INTO beer_table VALUES (5, 'Heban', 5.5);
INSERT INTO beer_table VALUES (6, 'Paulaner', 6);
INSERT INTO beer_table VALUES (7, 'Noteckie', 3);


--
-- Name: beer_table_Id_seq; Type: SEQUENCE SET; Schema: public; Owner: ziom
--

SELECT pg_catalog.setval('"beer_table_Id_seq"', 7, true);


SET search_path = schema, pg_catalog;

--
-- Data for Name: beer_table; Type: TABLE DATA; Schema: schema; Owner: ziom
--

INSERT INTO beer_table VALUES (1, 'Ciechan miodowy', 5);
INSERT INTO beer_table VALUES (2, 'Atak Chmielu', 7);
INSERT INTO beer_table VALUES (3, 'Czarny smok', 4);


--
-- Name: beer_table_Id_seq; Type: SEQUENCE SET; Schema: schema; Owner: ziom
--

SELECT pg_catalog.setval('"beer_table_Id_seq"', 3, true);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

