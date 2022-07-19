SELECT COUNT(*) INTO @TOT FROM table_transaksi WHERE nomor_meja IS NOT NULL;
SELECT CAST((FLOOR( 1 + RAND( ) * 5)) AS UNSIGNED) INTO @LIMIT;
SELECT CAST((FLOOR( 1 + RAND( ) * 20)) AS UNSIGNED) INTO @MEJA;
SELECT CAST((FLOOR( 1 + RAND( ) * 5)) AS UNSIGNED) INTO @HARI;

SELECT CONCAT(CAST(DATE_SUB(CURDATE(), INTERVAL @hari DAY) AS CHAR), ' ', CAST(SEC_TO_TIME(FLOOR(TIME_TO_SEC('15:00:00') + RAND() * (TIME_TO_SEC(TIMEDIFF('22:00:00', '15:00:00'))))) AS CHAR)) INTO @session_meja;

UPDATE table_transaksi SET nomor_meja = @MEJA, session_meja = @session_meja
WHERE id IN (

	SELECT id FROM (
	  SELECT table_transaksi.*, 
	         @rownum := @rownum + 1 AS rank
	    FROM table_transaksi, 
	         (SELECT @rownum := 0) r
	) d WHERE rank <= @TOT+@LIMIT AND nomor_meja IS NULL

);

SELECT @MEJA, @session_meja;