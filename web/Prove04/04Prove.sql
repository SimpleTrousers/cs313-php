create table public.user
(
	id serial not null primary key,
	username varchar(100) not null unique,
	password varchar(100) not null,
	first_name varchar(100) not null,
	last_name varchar(100) not null,
	admin boolean not null
);

create table public.history
(
	id serial not null primary key,
	nurse_id int not null references public.user(id),
	appointment_id int not null references public.appointment(id),
	notes varchar(500) not null
);

create table public.appointment
(
	id serial not null primary key,
	military_hour int not null,
	day int not null,
	month int not null,
	year int not null,
	doctor_id int not null references public.user(id),
	patient_id int not null references public.user(id)
);