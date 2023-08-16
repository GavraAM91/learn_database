<!DOCTYPE html>
<html lang="en">
<head>
    <title>BELAJAR MENGHUBUNGKAN DATABASE</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-color: #8d99ae;
            background-position: center;
            background-repeat: no-repeat; 
        }
        .judul {
            color: white; 
            font-size: 26px;
            font-family: Helvetica;
            text-align: center;
        }

        table {
            background-color: #e9ecef;
            margin: 0 auto; 
            font-family: Helvetica;
            text-align: center;
            border-collapse: collapse;
            border-spacing: 5px;
            min-width: 400px;
            border-radius: 10px 10px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            opacity: 0.9;
        }

        table th, table td {
            padding: 20px;
            text-align: center;
        }

        table tr th{
            background-color: #343a40;   
            color: #f1faee;
        }

        .table tr:hover {
            background-color: #adb5bd;
        }

        table tr:nth-child(even) {
            background-color: #dee2e6;
        }
    </style>
</head>
<body>
    <div class = "table">
        <h2 class = "judul">List Data</h2>
        <table>
        <tr>
                <th>No</th>
                <th>ID</th>
                <th>NAMA</th>
                <th>ADDRESS</th>
            </tr>
                <?php
                    include 'connect_database.php';
                    $users = mysqli_query($conn, "SELECT * FROM `users`");
                    $no = 1;
                    foreach ($users as $row){
                        echo "<tr>           
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['address']."</td>
                            </tr>";
                            $no++;
                    }
                ?>
        </table>    
    </div>
</body>
</html>
