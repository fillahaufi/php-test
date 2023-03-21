select * 
from tnilai, tmahasiswa, tmatakuliah 
join tmahasiswa.NIRM == tnilai.NIRM 
join tmatakuliah.KodeMK == tnilai.KodeMK