<?php

$info = $_GET['info'];

if ($info = 'restore') {
    $sql = '';
    $error = '';
    if (file_exists(__DIR__.'/database/grading_db.sql')) {
        // Deleting starts here
        $query_disable_checks = 'SET foreign_key_checks = 0';
        mysqli_query($conn, $query_disable_checks);
        $show_query = 'Show tables';
        $query_result = mysqli_query($conn, $show_query);
        $row = mysqli_fetch_array($query_result);
        while ($row) {
            $query = 'DROP TABLE IF EXISTS ' . $row[0];
            $query_result = mysqli_query($conn, $query);
            $show_query = 'Show tables';
            $query_result = mysqli_query($conn, $show_query);
            $row = mysqli_fetch_array($query_result);
        }
        $query_enable_checks = 'SET foreign_key_checks = 1';
        mysqli_query($conn, $query_enable_checks);
        // Deleting ends here
        $lines = file(__DIR__.'/database/grading_db.sql');
        foreach ($lines as $line) {
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            $sql .= $line;
            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($conn, $sql);
                if (! $result) {
                    $error .= mysqli_error($conn) . "\n";
                }
                $sql = '';
            }
        }
        if ($error) {
            $message = $error;
        } else {
            echo "<script>
            alert('New Database was restored!');
            window.location.href='rms.php?page=home';
            </script>";
        }
    }else{
        $message = "Uh Oh! No backup file found on the current directory!";
    }
}
?>