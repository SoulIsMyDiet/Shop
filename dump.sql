--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Data for Name: beer_table; Type: TABLE DATA; Schema: public; Owner: ziom
--

COPY beer_table ("Id", "Name", "Price") FROM stdin;
1	Toporek(Bojan)	4.5
2	Czerwony smok	5
3	Guiness	7
4	Atak chmielu	8
5	Heban	5.5
6	Paulaner	6
7	Noteckie	3
\.


--
-- Name: beer_table_Id_seq; Type: SEQUENCE SET; Schema: public; Owner: ziom
--

SELECT pg_catalog.setval('"beer_table_Id_seq"', 7, true);


SET search_path = schema, pg_catalog;

--
-- Data for Name: beer_table; Type: TABLE DATA; Schema: schema; Owner: ziom
--

COPY beer_table ("Id", "Name", "Price") FROM stdin;
1	Ciechan miodowy	5
2	Atak Chmielu	7
3	Czarny smok	4
\.


--
-- Name: beer_table_Id_seq; Type: SEQUENCE SET; Schema: schema; Owner: ziom
--

SELECT pg_catalog.setval('"beer_table_Id_seq"', 3, true);


--
-- PostgreSQL database dump complete
--

