SELECT CASE
    WHEN pathway LIKE '%Manager' THEN 'Analytics Manager'
    WHEN pathway LIKE '%Analyst' THEN 'Data Analyst'
    WHEN pathway LIKE '%Associate' THEN 'Data Associate'
    WHEN pathway LIKE '%Engineer' THEN 'Data Engineer'
    WHEN pathway LIKE '%Scientist' THEN 'Data Scientist'
    WHEN pathway LIKE '%Steward' THEN 'Data Steward'
    ELSE 'Learner' END AS pathway,

COUNT(*) FROM sparta_analytics_pathwayapplication
GROUP BY 1
ORDER BY 1

