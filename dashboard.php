<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen">
        <div class="w-64 bg-blue-800 text-white flex flex-col">
            <div class="h-16 flex items-center justify-center bg-blue-700">
                <h1 class="text-xl font-bold">Tableau de bord</h1>
            </div>
            <nav class="flex flex-col py-6 px-4 space-y-2">
                <a href="#" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md">Déconnexion</a>
            </nav>
        </div>
        
        <div class="flex-1 p-8">
                            <?php
                            include ("./php/connec.php");
                    $requete ="SELECT ReservationID,Date_res from reservations";
                    $query = mysqli_query ($conn,$requete);
                    echo"<h1>";echo"Client";echo"</h1>";
                    echo"<table border=1; width=800PX; class='tabl_mem';>";
                    echo "<th>ID</th>";
                    echo "<th>Date_res</th>";
                    while($row=mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>".$row["ReservationID"]."</td>";
                        echo "<td>".$row["Date_res"]."</td>";
                        echo "</tr>";
                    }
                    echo"</table>";
                    ?>
        </div>
    </div>
</body>
</html>
