INSERT INTO public.user (username, password, first_name, last_name, admin)
    VALUES ('doctor', 'doctor', 'Jimmy', 'Markin', true);

insert into public.user (username, password, first_name, last_name, admin)
    values ('nurse', 'nurse', 'Jamie', 'Larken', true);

insert into public.user (username, password, first_name, last_name, admin)
    values ('patient', 'patient', 'Jeremy', 'Parken', false);

insert into public.appointment (military_hour, day, month, year, doctor_id, patient_id)
    values (9, 10, 6, 2017, 1, 3);

insert into public.history (nurse_id, appointment_id, notes)
    values (2, 1, 'Patient has extreme rashes on left pinky toe. Prescribed ointment.');