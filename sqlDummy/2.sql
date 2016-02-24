SELECT h.name
FROM human_vacation_dist hv JOIN human h ON hv.human_id=h.id
JOIN vacation_dist v ON hv.distination_id=v.id
WHERE v.name='Cuba' OR v.name='Sochi'
GROUP BY hv.human_id
HAVING COUNT(*)=2
