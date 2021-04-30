SELECT CASE 
WHEN municipality LIKE 'Abra%' THEN 'Abra'
WHEN municipality LIKE 'Agusan%' AND municipality LIKE '%Norte%' THEN 'Agusan del Norte'
WHEN municipality LIKE 'Agusan%' AND municipality LIKE '%Sur%' THEN 'Agusan del Sur'
WHEN municipality LIKE 'Aklan%' THEN 'Aklan'
WHEN municipality LIKE 'Albay%' THEN 'Albay'
WHEN municipality LIKE 'Antique%' THEN 'Antique'
WHEN municipality LIKE 'Apayao%' THEN 'Apayao'
WHEN municipality LIKE 'Aurora%' THEN 'Aurora'
WHEN municipality LIKE 'Basilan%' THEN 'Basilan'
WHEN municipality LIKE 'Bataan%' THEN 'Bataan'
WHEN municipality LIKE 'Batanes%' THEN 'Batanes'
WHEN municipality LIKE 'Batangas%' THEN 'Batangas'
WHEN municipality LIKE 'Benguet%' THEN 'Benguet'
WHEN municipality LIKE 'Biliran%' THEN 'Biliran'
WHEN municipality LIKE 'Bohol%' THEN 'Bohol'
WHEN municipality LIKE 'Bukidnon%' THEN 'Bukidnon'
WHEN municipality LIKE 'Bulacan%' THEN 'Bulacan'
WHEN municipality LIKE 'Cagayan%' THEN 'Cagayan'
WHEN municipality LIKE 'Camarines%' AND municipality LIKE '%Norte%' THEN 'Camarines Norte'
WHEN municipality LIKE 'Camarines%' AND municipality LIKE '%Sur%' THEN 'Camarines Sur'
WHEN municipality LIKE 'Camiguin%' THEN 'Camiguin'
WHEN municipality LIKE 'Capiz%' THEN 'Capiz'
WHEN municipality LIKE 'Catanduanes%' THEN 'Catanduanes'
WHEN municipality LIKE 'Cavite%' THEN 'Cavite'
WHEN municipality LIKE 'Cebu%' THEN 'Cebu'
WHEN municipality LIKE 'Compostela%' AND municipality LIKE '%Valley%' THEN 'Compostela Valley'
WHEN municipality LIKE 'Davao%' AND municipality LIKE '%Norte%' THEN 'Davao del Norte'
WHEN municipality LIKE 'Davao%' AND municipality LIKE '%Sur%' THEN 'Davao del Sur'
WHEN municipality LIKE 'Davao%' AND municipality LIKE '%Oriental%' THEN 'Davao Oriental'
WHEN municipality LIKE 'Dinagat%' AND municipality LIKE '%Islands%' THEN 'Dinagat Islands'
WHEN municipality LIKE 'Eastern%' AND municipality LIKE '%Samar%' THEN 'Eastern Samar'
WHEN municipality LIKE 'Guimaras%' THEN 'Guimaras'
WHEN municipality LIKE 'Ifugao%' THEN 'Ifugao'
WHEN municipality LIKE 'Ilocos%' AND municipality LIKE '%Norte%' THEN 'Ilocos Norte'
WHEN municipality LIKE 'Ilocos%' AND municipality LIKE '%Sur%' THEN 'Ilocos Sur'
WHEN municipality LIKE 'Iloilo%' THEN 'Iloilo'
WHEN municipality LIKE 'Isabela%' THEN 'Isabela'
WHEN municipality LIKE 'Kalinga%' THEN 'Kalinga'
WHEN municipality LIKE 'La%' AND municipality LIKE '%Union%' THEN 'La Union'
WHEN municipality LIKE 'Laguna%' THEN 'Laguna'
WHEN municipality LIKE 'Lanao%' AND municipality LIKE '%Norte%' THEN 'Lanao del Norte'
WHEN municipality LIKE 'Lanao%' AND municipality LIKE '%Sur%' THEN 'Lanao del Sur'
WHEN municipality LIKE 'Leyte%' THEN 'Leyte'
WHEN municipality LIKE 'Maguindanao%' THEN 'Maguindanao'
WHEN municipality LIKE 'Marinduque%' THEN 'Marinduque'
WHEN municipality LIKE 'Masbate%' THEN 'Masbate'
WHEN municipality LIKE 'Metropolitan%' AND municipality LIKE '%Manila%' THEN 'Metropolitan Manila'
WHEN municipality LIKE 'Misamis%' AND municipality LIKE '%Occidental%' THEN 'Misamis Occidental'
WHEN municipality LIKE 'Misamis%' AND municipality LIKE '%Oriental%' THEN 'Misamis Oriental'
WHEN municipality LIKE 'Mountain%' AND municipality LIKE '%Province%' THEN 'Mountain Province'
WHEN municipality LIKE 'Negros%' AND municipality LIKE '%Occidental%' THEN 'Negros Occidental'
WHEN municipality LIKE 'Negros%' AND municipality LIKE '%Oriental%' THEN 'Negros Oriental'
WHEN municipality LIKE 'Cotabato%' THEN 'Cotabato'
WHEN municipality LIKE 'Northern%' AND municipality LIKE '%Samar%' THEN 'Northern Samar'
WHEN municipality LIKE 'Nueva%' AND municipality LIKE '%Ecija%' THEN 'Nueva Ecija'
WHEN municipality LIKE 'Nueva%' AND municipality LIKE '%Vizcaya%' THEN 'Nueva Vizcaya'
WHEN municipality LIKE 'Occidental%' AND municipality LIKE '%Mindoro%' THEN 'Occidental Mindoro'
WHEN municipality LIKE 'Oriental%' AND municipality LIKE '%Mindoro%' THEN 'Oriental Mindoro'
WHEN municipality LIKE 'Palawan%' THEN 'Palawan'
WHEN municipality LIKE 'Pampanga%' THEN 'Pampanga'
WHEN municipality LIKE 'Pangasinan%' THEN 'Pangasinan'
WHEN municipality LIKE 'Quezon%' THEN 'Quezon'
WHEN municipality LIKE 'Quirino%' THEN 'Quirino'
WHEN municipality LIKE 'Rizal%' THEN 'Rizal'
WHEN municipality LIKE 'Romblon%' THEN 'Romblon'
WHEN municipality LIKE 'Samar%' THEN 'Samar'
WHEN municipality LIKE 'Sarangani%' THEN 'Sarangani'
WHEN municipality LIKE 'Siquijor%' THEN 'Siquijor'
WHEN municipality LIKE 'Sorsogon%' THEN 'Sorsogon'
WHEN municipality LIKE 'South%' AND municipality LIKE '%Cotabato%' THEN 'South Cotabato'
WHEN municipality LIKE 'Southern%' AND municipality LIKE '%Leyte%' THEN 'Southern Leyte'
WHEN municipality LIKE 'Sultan%' AND municipality LIKE '%Kudarat%' THEN 'Sultan Kudarat'
WHEN municipality LIKE 'Sulu%' THEN 'Sulu'
WHEN municipality LIKE 'Surigao%' AND municipality LIKE '%Norte%' THEN 'Surigao del Norte'
WHEN municipality LIKE 'Surigao%' AND municipality LIKE '%Sur%' THEN 'Surigao del Sur'
WHEN municipality LIKE 'Tarlac%' THEN 'Tarlac'
WHEN municipality LIKE 'Tawi-Tawi%' THEN 'Tawi-Tawi'
WHEN municipality LIKE 'Zambales%' THEN 'Zambales'
WHEN municipality LIKE 'Zamboanga%' AND municipality LIKE '%Norte%' THEN 'Zamboanga del Norte'
WHEN municipality LIKE 'Zamboanga%' AND municipality LIKE '%Sur%' THEN 'Zamboanga del Sur'
WHEN municipality LIKE 'Zamboanga%' AND municipality LIKE '%Sibugay%' THEN 'Zamboanga Sibugay'
WHEN municipality LIKE 'Davao%' AND municipality LIKE '%Occidental%' THEN 'Davao Occidental'
			END AS municipality, COUNT(*) FROM sparta_analytics_spartaprofile GROUP BY 1 ORDER BY 1 LIMIT 100