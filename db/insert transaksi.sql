
INSERT INTO table_transaksi
SELECT 
  NULL,
  a.id, 
  a.harga, 
        date_format(
    from_unixtime(
         rand() * 
            (UNIX_TIMESTAMP('2021-12-01 16:00:00') - UNIX_TIMESTAMP('2021-12-13 23:00:00')) + 
             UNIX_TIMESTAMP('2021-12-13 23:00:00')
                  ), '%Y-%m-%d') as tgl_pesan,
    SEC_TO_TIME(
          FLOOR(
             TIME_TO_SEC('15:00:00') + RAND() * (
                  TIME_TO_SEC(TIMEDIFF('22:00:00', '15:00:00'))
             )
          )
        ) AS waktu
FROM table_menu a
ORDER BY RAND()
LIMIT 10
