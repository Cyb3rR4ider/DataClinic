select * 
FROM patient 
JOIN medical_record on patient.pat_id=medical_record.mdr_pat_id 
JOIN diagnosis on diagnosis.diag_pat_id=patient.pat_id 
join treatment on treatment.tr_diag_id=diagnosis.diag_id; 