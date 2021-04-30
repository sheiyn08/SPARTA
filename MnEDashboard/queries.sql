-- Get valid entries by course

SELECT course_id, SUM(valid)
FROM 
(
  SELECT 
    course_id, 
    grade, 
    CASE WHEN grade = 0 THEN 0 ELSE 1 END AS valid
  FROM sparta_analytics_grade
) AS a
GROUP BY 1

-- All Grades top 100 records
SELECT * FROM public.sparta_analytics_grade LIMIT 100

-- SPARTA Students by demographic
SELECT 
  attainment,
  COUNT(*)
FROM sparta_analytics_spartaprofile
GROUP BY 1
ORDER BY 1

-- defining generation buckets
SELECT 
  age,
  COUNT(*)
FROM sparta_analytics_spartaprofile
WHERE age BETWEEN 18 AND 34 -- millenial
WHERE age BETWEEN 35 AND 50 -- gen x
WHERE age BETWEEN 51 AND 69 -- boomer
WHERE age BETWEEN 18 AND 34 -- millenial
-- null
-- no data
GROUP BY 1
ORDER BY 1

-- written in db_query
SELECT
CASE
WHEN age < 18 THEN '1. Minor'
WHEN age < 25 THEN '2. Gen-Z'
WHEN age < 39 THEN '3. Millenial'
WHEN age < 55 THEN '4. Gen-X'
ELSE '5. Boomer'
END AS generation,
COUNT(*) AS count
FROM sparta_analytics_spartaprofile
GROUP BY 1 ORDER BY 1



-- defining municipalities according to mapbox code
SELECT 
  municipality,
  COUNT(*)
FROM sparta_analytics_spartaprofile
WHERE municipality LIKE Abra%
-- null
-- no data
GROUP BY 1
ORDER BY 1

