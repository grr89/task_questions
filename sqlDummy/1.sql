SELECT h.name, GROUP_CONCAT(v.name SEPARATOR ', ') distinations
FROM human_vacation_dist hv JOIN human h ON hv.human_id=h.id
JOIN vacation_dist v ON hv.distination_id=v.id
GROUP BY hv.human_id
