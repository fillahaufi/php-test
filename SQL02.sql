select * 
from tnilai, tmahasiswa, tmatakuliah 
join tmahasiswa.NIRM == tnilai.NIRM 
join tmatakuliah.KodeMK == tnilai.KodeMK
where tmahasiswa.dateOfBirth < '1998-01-01' and tnilai < 60