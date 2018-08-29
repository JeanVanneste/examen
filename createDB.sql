-- Table: public.grades

-- DROP TABLE public.grades;

CREATE TABLE public.grades
(
    matricule integer,
    grade integer,
    id integer NOT NULL DEFAULT nextval('grades_id_seq'::regclass),
    CONSTRAINT grades_pkey PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.grades
    OWNER to examen;
