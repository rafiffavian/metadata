PGDMP         &                x            skripsi    10.11    10.11 f    ~           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �           1262    16393    skripsi    DATABASE     �   CREATE DATABASE skripsi WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE skripsi;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16396    database    TABLE        CREATE TABLE public.database (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_sim bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.database;
       public         postgres    false    3            �            1259    16394    database_id_seq    SEQUENCE     x   CREATE SEQUENCE public.database_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.database_id_seq;
       public       postgres    false    3    197            �           0    0    database_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.database_id_seq OWNED BY public.database.id;
            public       postgres    false    196            �            1259    16515    database_roles    TABLE       CREATE TABLE public.database_roles (
    id bigint NOT NULL,
    id_sim bigint,
    id_database bigint,
    id_user bigint,
    permission character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_role bigint
);
 "   DROP TABLE public.database_roles;
       public         postgres    false    3            �            1259    16513    database_roles_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.database_roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.database_roles_id_seq;
       public       postgres    false    217    3            �           0    0    database_roles_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.database_roles_id_seq OWNED BY public.database_roles.id;
            public       postgres    false    216            �            1259    16406    download    TABLE     �   CREATE TABLE public.download (
    id bigint NOT NULL,
    name character varying(255),
    file text,
    id_table bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.download;
       public         postgres    false    3            �            1259    16404    download_id_seq    SEQUENCE     x   CREATE SEQUENCE public.download_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.download_id_seq;
       public       postgres    false    3    199            �           0    0    download_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.download_id_seq OWNED BY public.download.id;
            public       postgres    false    198            �            1259    16418 	   isi_table    TABLE     s  CREATE TABLE public.isi_table (
    id bigint NOT NULL,
    attribute text,
    definisi text,
    standard_acuan text,
    keterangan text,
    jenis_data text,
    relasi text,
    id_table bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    kodifikasi text,
    sinonim text,
    jenis_table text
);
    DROP TABLE public.isi_table;
       public         postgres    false    3            �            1259    16416    isi_table_id_seq    SEQUENCE     y   CREATE SEQUENCE public.isi_table_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.isi_table_id_seq;
       public       postgres    false    201    3            �           0    0    isi_table_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.isi_table_id_seq OWNED BY public.isi_table.id;
            public       postgres    false    200            �            1259    16531    menus    TABLE     �   CREATE TABLE public.menus (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_category integer NOT NULL
);
    DROP TABLE public.menus;
       public         postgres    false    3            �            1259    16529    menus_id_seq    SEQUENCE     u   CREATE SEQUENCE public.menus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.menus_id_seq;
       public       postgres    false    3    221            �           0    0    menus_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;
            public       postgres    false    220            �            1259    16430 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id bigint NOT NULL,
    migration character varying(255) DEFAULT ''::character varying NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    3            �            1259    16428    migrations_id_seq    SEQUENCE     z   CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    203    3            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    202            �            1259    16440    role    TABLE     �   CREATE TABLE public.role (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    id_user bigint
);
    DROP TABLE public.role;
       public         postgres    false    3            �            1259    16438    role_id_seq    SEQUENCE     t   CREATE SEQUENCE public.role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.role_id_seq;
       public       postgres    false    3    205            �           0    0    role_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.role_id_seq OWNED BY public.role.id;
            public       postgres    false    204            �            1259    16498 	   role_user    TABLE       CREATE TABLE public.role_user (
    id bigint NOT NULL,
    id_database bigint,
    id_role bigint,
    id_table bigint,
    id_sim bigint,
    permission character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.role_user;
       public         postgres    false    3            �            1259    16496    role_user_id_seq    SEQUENCE     y   CREATE SEQUENCE public.role_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.role_user_id_seq;
       public       postgres    false    3    213            �           0    0    role_user_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.role_user_id_seq OWNED BY public.role_user.id;
            public       postgres    false    212            �            1259    16450    sim    TABLE     �   CREATE TABLE public.sim (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.sim;
       public         postgres    false    3            �            1259    16448 
   sim_id_seq    SEQUENCE     s   CREATE SEQUENCE public.sim_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.sim_id_seq;
       public       postgres    false    3    207            �           0    0 
   sim_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.sim_id_seq OWNED BY public.sim.id;
            public       postgres    false    206            �            1259    16506 	   sim_roles    TABLE     �   CREATE TABLE public.sim_roles (
    id bigint NOT NULL,
    id_sim bigint,
    id_user bigint,
    permission character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_role bigint
);
    DROP TABLE public.sim_roles;
       public         postgres    false    3            �            1259    16504    sim_roles_id_seq    SEQUENCE     y   CREATE SEQUENCE public.sim_roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.sim_roles_id_seq;
       public       postgres    false    3    215            �           0    0    sim_roles_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.sim_roles_id_seq OWNED BY public.sim_roles.id;
            public       postgres    false    214            �            1259    16460    table    TABLE       CREATE TABLE public."table" (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_database bigint,
    id_user bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public."table";
       public         postgres    false    3            �            1259    16458    table_id_seq    SEQUENCE     u   CREATE SEQUENCE public.table_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.table_id_seq;
       public       postgres    false    3    209            �           0    0    table_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.table_id_seq OWNED BY public."table".id;
            public       postgres    false    208            �            1259    16523 
   table_role    TABLE     (  CREATE TABLE public.table_role (
    id bigint NOT NULL,
    id_sim bigint,
    id_database bigint,
    id_table bigint,
    id_user bigint,
    permission character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_role bigint
);
    DROP TABLE public.table_role;
       public         postgres    false    3            �            1259    16521    table_role_id_seq    SEQUENCE     z   CREATE SEQUENCE public.table_role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.table_role_id_seq;
       public       postgres    false    219    3            �           0    0    table_role_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.table_role_id_seq OWNED BY public.table_role.id;
            public       postgres    false    218            �            1259    16470    user    TABLE     �  CREATE TABLE public."user" (
    id bigint NOT NULL,
    name character varying(255) DEFAULT ''::character varying NOT NULL,
    id_role bigint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    id_user bigint,
    email character varying(255),
    password character varying(255) DEFAULT ''::character varying NOT NULL,
    remember_token character varying(100)
);
    DROP TABLE public."user";
       public         postgres    false    3            �            1259    16468    user_id_seq    SEQUENCE     t   CREATE SEQUENCE public.user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public       postgres    false    211    3            �           0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
            public       postgres    false    210            �
           2604    16399    database id    DEFAULT     j   ALTER TABLE ONLY public.database ALTER COLUMN id SET DEFAULT nextval('public.database_id_seq'::regclass);
 :   ALTER TABLE public.database ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196    197            �
           2604    16518    database_roles id    DEFAULT     v   ALTER TABLE ONLY public.database_roles ALTER COLUMN id SET DEFAULT nextval('public.database_roles_id_seq'::regclass);
 @   ALTER TABLE public.database_roles ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    216    217    217            �
           2604    16409    download id    DEFAULT     j   ALTER TABLE ONLY public.download ALTER COLUMN id SET DEFAULT nextval('public.download_id_seq'::regclass);
 :   ALTER TABLE public.download ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    199    199            �
           2604    16421    isi_table id    DEFAULT     l   ALTER TABLE ONLY public.isi_table ALTER COLUMN id SET DEFAULT nextval('public.isi_table_id_seq'::regclass);
 ;   ALTER TABLE public.isi_table ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    200    201            �
           2604    16534    menus id    DEFAULT     d   ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);
 7   ALTER TABLE public.menus ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    221    220    221            �
           2604    16433    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    202    203    203            �
           2604    16443    role id    DEFAULT     b   ALTER TABLE ONLY public.role ALTER COLUMN id SET DEFAULT nextval('public.role_id_seq'::regclass);
 6   ALTER TABLE public.role ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    205    204    205            �
           2604    16501    role_user id    DEFAULT     l   ALTER TABLE ONLY public.role_user ALTER COLUMN id SET DEFAULT nextval('public.role_user_id_seq'::regclass);
 ;   ALTER TABLE public.role_user ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    212    213    213            �
           2604    16453    sim id    DEFAULT     `   ALTER TABLE ONLY public.sim ALTER COLUMN id SET DEFAULT nextval('public.sim_id_seq'::regclass);
 5   ALTER TABLE public.sim ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    207    206    207            �
           2604    16509    sim_roles id    DEFAULT     l   ALTER TABLE ONLY public.sim_roles ALTER COLUMN id SET DEFAULT nextval('public.sim_roles_id_seq'::regclass);
 ;   ALTER TABLE public.sim_roles ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    214    215    215            �
           2604    16463    table id    DEFAULT     f   ALTER TABLE ONLY public."table" ALTER COLUMN id SET DEFAULT nextval('public.table_id_seq'::regclass);
 9   ALTER TABLE public."table" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    209    208    209            �
           2604    16526    table_role id    DEFAULT     n   ALTER TABLE ONLY public.table_role ALTER COLUMN id SET DEFAULT nextval('public.table_role_id_seq'::regclass);
 <   ALTER TABLE public.table_role ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    218    219    219            �
           2604    16473    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    210    211    211            c          0    16396    database 
   TABLE DATA               U   COPY public.database (id, name, id_sim, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    197   �n       w          0    16515    database_roles 
   TABLE DATA               w   COPY public.database_roles (id, id_sim, id_database, id_user, permission, created_at, updated_at, id_role) FROM stdin;
    public       postgres    false    217   +o       e          0    16406    download 
   TABLE DATA               ]   COPY public.download (id, name, file, id_table, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    199   Ho       g          0    16418 	   isi_table 
   TABLE DATA               �   COPY public.isi_table (id, attribute, definisi, standard_acuan, keterangan, jenis_data, relasi, id_table, id_user, created_at, updated_at, kodifikasi, sinonim, jenis_table) FROM stdin;
    public       postgres    false    201   �o       {          0    16531    menus 
   TABLE DATA               N   COPY public.menus (id, name, created_at, updated_at, id_category) FROM stdin;
    public       postgres    false    221   �o       i          0    16430 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    203   9q       k          0    16440    role 
   TABLE DATA               I   COPY public.role (id, name, created_at, updated_at, id_user) FROM stdin;
    public       postgres    false    205   �r       s          0    16498 	   role_user 
   TABLE DATA               s   COPY public.role_user (id, id_database, id_role, id_table, id_sim, permission, created_at, updated_at) FROM stdin;
    public       postgres    false    213   As       m          0    16450    sim 
   TABLE DATA               H   COPY public.sim (id, name, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    207   �s       u          0    16506 	   sim_roles 
   TABLE DATA               e   COPY public.sim_roles (id, id_sim, id_user, permission, created_at, updated_at, id_role) FROM stdin;
    public       postgres    false    215   �s       o          0    16460    table 
   TABLE DATA               Y   COPY public."table" (id, name, id_database, id_user, created_at, updated_at) FROM stdin;
    public       postgres    false    209   �s       y          0    16523 
   table_role 
   TABLE DATA               }   COPY public.table_role (id, id_sim, id_database, id_table, id_user, permission, created_at, updated_at, id_role) FROM stdin;
    public       postgres    false    219   t       q          0    16470    user 
   TABLE DATA               u   COPY public."user" (id, name, id_role, created_at, updated_at, id_user, email, password, remember_token) FROM stdin;
    public       postgres    false    211   2t       �           0    0    database_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.database_id_seq', 9, true);
            public       postgres    false    196            �           0    0    database_roles_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.database_roles_id_seq', 35, true);
            public       postgres    false    216            �           0    0    download_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.download_id_seq', 10, true);
            public       postgres    false    198            �           0    0    isi_table_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.isi_table_id_seq', 23, true);
            public       postgres    false    200            �           0    0    menus_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.menus_id_seq', 16, true);
            public       postgres    false    220            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 26, true);
            public       postgres    false    202            �           0    0    role_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.role_id_seq', 8, true);
            public       postgres    false    204            �           0    0    role_user_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.role_user_id_seq', 2, true);
            public       postgres    false    212            �           0    0 
   sim_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('public.sim_id_seq', 9, true);
            public       postgres    false    206            �           0    0    sim_roles_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.sim_roles_id_seq', 122, true);
            public       postgres    false    214            �           0    0    table_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.table_id_seq', 9, true);
            public       postgres    false    208            �           0    0    table_role_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.table_role_id_seq', 20, true);
            public       postgres    false    218            �           0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 8, true);
            public       postgres    false    210            �
           2606    16403    database PRIMARY 
   CONSTRAINT     P   ALTER TABLE ONLY public.database
    ADD CONSTRAINT "PRIMARY" PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.database DROP CONSTRAINT "PRIMARY";
       public         postgres    false    197            �
           2606    16415    download PRIMARY00000 
   CONSTRAINT     U   ALTER TABLE ONLY public.download
    ADD CONSTRAINT "PRIMARY00000" PRIMARY KEY (id);
 A   ALTER TABLE ONLY public.download DROP CONSTRAINT "PRIMARY00000";
       public         postgres    false    199            �
           2606    16427    isi_table PRIMARY00001 
   CONSTRAINT     V   ALTER TABLE ONLY public.isi_table
    ADD CONSTRAINT "PRIMARY00001" PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.isi_table DROP CONSTRAINT "PRIMARY00001";
       public         postgres    false    201            �
           2606    16437    migrations PRIMARY00002 
   CONSTRAINT     W   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT "PRIMARY00002" PRIMARY KEY (id);
 C   ALTER TABLE ONLY public.migrations DROP CONSTRAINT "PRIMARY00002";
       public         postgres    false    203            �
           2606    16447    role PRIMARY00003 
   CONSTRAINT     Q   ALTER TABLE ONLY public.role
    ADD CONSTRAINT "PRIMARY00003" PRIMARY KEY (id);
 =   ALTER TABLE ONLY public.role DROP CONSTRAINT "PRIMARY00003";
       public         postgres    false    205            �
           2606    16457    sim PRIMARY00004 
   CONSTRAINT     P   ALTER TABLE ONLY public.sim
    ADD CONSTRAINT "PRIMARY00004" PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.sim DROP CONSTRAINT "PRIMARY00004";
       public         postgres    false    207            �
           2606    16467    table PRIMARY00005 
   CONSTRAINT     T   ALTER TABLE ONLY public."table"
    ADD CONSTRAINT "PRIMARY00005" PRIMARY KEY (id);
 @   ALTER TABLE ONLY public."table" DROP CONSTRAINT "PRIMARY00005";
       public         postgres    false    209            �
           2606    16481    user PRIMARY00006 
   CONSTRAINT     S   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT "PRIMARY00006" PRIMARY KEY (id);
 ?   ALTER TABLE ONLY public."user" DROP CONSTRAINT "PRIMARY00006";
       public         postgres    false    211            �
           2606    16520 "   database_roles database_roles_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.database_roles
    ADD CONSTRAINT database_roles_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.database_roles DROP CONSTRAINT database_roles_pkey;
       public         postgres    false    217            �
           2606    16536    menus menus_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.menus DROP CONSTRAINT menus_pkey;
       public         postgres    false    221            �
           2606    16503    role_user role_user_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.role_user
    ADD CONSTRAINT role_user_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.role_user DROP CONSTRAINT role_user_pkey;
       public         postgres    false    213            �
           2606    16511    sim_roles sim_roles_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.sim_roles
    ADD CONSTRAINT sim_roles_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.sim_roles DROP CONSTRAINT sim_roles_pkey;
       public         postgres    false    215            �
           2606    16528    table_role table_role_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.table_role
    ADD CONSTRAINT table_role_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.table_role DROP CONSTRAINT table_role_pkey;
       public         postgres    false    219            �
           1259    16495    fki_fk_database    INDEX     J   CREATE INDEX fki_fk_database ON public."table" USING btree (id_database);
 #   DROP INDEX public.fki_fk_database;
       public         postgres    false    209            �
           2606    16490    table fk_database    FK CONSTRAINT     �   ALTER TABLE ONLY public."table"
    ADD CONSTRAINT fk_database FOREIGN KEY (id_database) REFERENCES public.database(id) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 =   ALTER TABLE ONLY public."table" DROP CONSTRAINT fk_database;
       public       postgres    false    2766    197    209            �           0    0 !   CONSTRAINT fk_database ON "table"    COMMENT     =   COMMENT ON CONSTRAINT fk_database ON public."table" IS 'mm';
            public       postgres    false    2792            c   C   x���LI,ILJ,N-0�4�4�4202�5��52W04�22"lb\��F�M��Ͱ�q��qqq ,C�      w      x������ � �      e   O   x�34�LI,I4�qtr�Q�/J�KW)M�54��0525�4Ы����4�4202�5��52W04�21�26�&����� ��e      g   E   x�32��Ȃ��N��01�$��Y��&�FF��F�
��VFVFX�2�!4������ o�!u      {   -  x�u��N�0���S�k�ia�g/5�x��ep�Rp����]���z#�7�����ܻMw�O	
Qlp���h4��2	j�T��(��Q&A/�m��i��F�(��%��M�<�����I�*[!�����ۉ>B[��l�N?R9\�qş^YO�;�!�֭6���K��I��8�]�G�3��b�cm���Ʌ�(6��6ni�������� r�E�)�8�Ͽ��b� 3��c�Ӱ�=֮�.�3�e�i���7s���Y�~B3c?K��F�;yR����<3/7 �ɇ��      i   x  x�u��n�0��뇙l��]&Etd-����T$$tCq��cC'Fґ0G|]�kN�=�ǒ�%޻�N\�Ԁ�nY����9-龗��$D�q}6%��0�>�L�ׂ3F�H*��ք��Ә
gZ�8ek��`�Qu�2\6L�;`�>>n��s���*s�<��t�X��s�d�a3�qX��s@�rZ)�����[Ҡ)����:N]��H������wʞ#P��������ZP�_�Һ�pI�G&�5dPu�z�)�=���I�C]K�Di������[	��1���-C�z]O�޳��A����̛$�.���ߒ<��k���n5�p�_�gdq�I�x�R>�����+Ka���H��K�2|~ �/��M�      k   p   x�3�tL����4202�50�52P00�25�2��*f�e�����)kl�U̔ˌ�3�$�(/1G���S��!V1S.sN��b�:-���rYp�&�df�K�X�a3����� zf6�      s   =   x�3���4����FF���F�
&V��VXŸ�@̰�JY`����� �0      m      x������ � �      u      x������ � �      o   =   x���IL�IU0��4�4202�5��52W04�21�20�&�e	�e�]�!]�f\1z\\\ �g�      y      x������ � �      q     x�m�Ko�P F��+���������
���-^y��C��w�L&3�ۓ�KN�,��� O >A� �VF�>#_��0gq&e.<��#�KA֢܉g����J�+���ɯ>�GR����=^X�x<_
8;qϵsu����7�=!�&��$]N��c�f��!���U$�z|ܯa#R!aA*(5�� ��#��e����e�����C-^�icC������Ϯ@T$��̦�}��i�JÊ`��iɌD�L�^��t-7���{��ݶ�z�ڬ�<��U�R-h�J����b��_a�U�~�_n,*��';�/�YVm0�*�ΜJ����������l���*��5���G�[�nW�������줶�x�I;ho֭P#���� �F��F����
������>!� ��R�2�}�Y�E��?ʇ�-�6���h�:��o�~&��m�ز7!��P�T��$ ��	�\f��p��b�Q��4NN\�a��/��<>k�T��C��E��e'�$��'w��G     