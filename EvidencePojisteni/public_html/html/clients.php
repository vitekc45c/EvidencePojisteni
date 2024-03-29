<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="width=device-width, intial-scale=1.0" />
		<title>Pojištěnci</title>
                <link rel="icon" type="image/x-icon" href="" />
		<link rel="stylesheet" href="../main.css" type="text/css"/>
                <script defer src="../scripts/php_AddClient.php" charset="utf-8"></script>
	</head>
	<body>
	<div class="nav">
            <ul>
                <li><a href="index.html">Pojištení App</a></li>
                <li><a class="active" href="clients.php">Pojištencí</a></li>
		<li><a href="insurance.php">Pojištění</a></li>
		<li><a href="log.html">Události</a></li>
		<li><a href="about.html">O aplikaci...</a></li>
                <li><a href="login.html">Přihlásit</a></li>
                <li><a href="register.html">Registrovat</a></li>
            </ul>
	</div>
		<div class="content">
                    <div class="clientTableLabel">
                        <h2>Pojištěnci</h2>
                    </div>
                    <div class="clientTable">
                        <table>
                            <tr>
                                <th>Jméno</th>
                                <th>Bydliště</th>
                                <th></th>
                            </tr>
                            <tr>
                                <?php header('Content-type: text/html; charset=utf-8');
                                $mysqli = require __DIR__ . "../scripts/php_databaseConnect.php";
                                $sql = "SELECT * FROM clientDatabase";
                                $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<td>";
                                        echo $row['firstName + lastName'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['address + city'];
                                        echo "</td>";
                                        }
                                    } else {
                                        echo "Žádní clienti k zobrazení";
                                    }
                                ?>
                                <td>
                                    <input type="button" id="delete" value="Odstranit" />
                                    <input type="button" id="eddit" value="Editovat" />
                                </td>
                            </tr>
                        </table>
                    </div>
                        <div class="databaseTest">
                            <script type="text/javascript" src="jquery.js"></script>
                            <script type="text/javascript">
                            function reloadNames() {
                                var url = "../scripts/php_loadClient.php?t=" + (new Date()).getTime();
                                jQuery("#names").load(url);
                            }
                            jQuery(function() {
                                setInterval(reloadNames, 5000);
                            });
                            </script>
                            <div id="names"></div>
                        </div>    
                    <div class="formLabel">
                        <h2>Nový pojištěnec</h2>
                    </div>    
		<form action="../scripts/php_addClient.php" method="post">
                    <div class="form">
			<div class="form-row">
                            <label for="firstName">Jméno</label>
                            <input type="text" id="firstName" name="firstName" placeholder="Jméno" required /> 
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="email@example.com" required />
                            <label for="address">Ulice a číslo popisné</label>
                            <input type="text" id="address" name="address" placeholder="Ulice a čislo popisné" required />
                        </div>
                        <div class="form-row">
                            <label for="lastName">Příjmení</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Příjmení" required />
                            <label for="phoneNumber">Telefon</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="+xxx xxx xxx xxx" required />
                            <label for="city">Město</label>
                            <input type="text" id="city" name="city" placeholder="Město" required />
                            <label for="postalCode">PSČ</label>
                            <input type="number" id="postalCode" name="postalCode" placeholder="PSČ" required />
                            <input type="submit" onclick="addClient()" id="addClientButton" class="button" value="Uložit"/>
                        </div>
                    </div>
                </form>
                </div>
	</body>
</html>