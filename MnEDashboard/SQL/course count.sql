SELECT CASE
    WHEN course_id LIKE '%CX101%' THEN 'CX101'
    WHEN course_id LIKE '%SP1001%' THEN 'SP1001'
    WHEN course_id LIKE '%SP101%' THEN 'SP101'
    WHEN course_id LIKE '%SP201%' THEN 'SP201'
    WHEN course_id LIKE '%SP301%' THEN 'SP301'
    WHEN course_id LIKE '%SP501%' THEN 'SP501'
    WHEN course_id LIKE '%SP801%' THEN 'SP801'
    ELSE 'Not Enrolled' END AS course_id,

COUNT(*) FROM sparta_analytics_grade
GROUP BY 1
ORDER BY 1
LIMIT 100



