<?php 
    error_reporting(0);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/panel.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">
    <link rel="shortcut" href="img/favicon.png">
    <link rel="appel-touch-icon" href="img/favicon.png">
    <title>Main Panel</title>
</head>
<body>
    <!-- Start Nav Bar -->
    <nav>
        <div class="container">
            <div class="content-nav">
                    <h3><img src="img/favicon.png" alt=""> Admin Dashboard</h3> 
            </div>
        </div>
    </nav>
    <!-- End Nav Bar -->
    <!-- Start Buttons Control Users -->
    <div class="container-buttons-control-user">
        <div class="container">
            <h3 class="titles">Setting</h3>
            <div class="parent-buttons-events">
                <button id="updatePage" class="buttons-control-users button-8">Realod</button>
                <button id="clearTableInformationUser" class="buttons-control-users button-9">Clear Table</button>
            </div>
        </div>
    </div>
    <!-- Start User Data -->

    <!-- Start Mode Site -->
    <?php 
        if (isset($_SESSION["message_panel"])) {
            echo "<div class='message-panel'>" .  $_SESSION["message_panel"] . "</div>";
            unset($_SESSION["message_panel"]);
        }

    ?>
    <!-- Start Mode Site -->
    
    <!-- Start Table User Information -->
    <div class="container parent-table" id="dashboard" >
        <h3 class="titles">Main Panel</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#Id</th>
                    <th>Page</th>
                    <th>IP_Address</th>
                    <th>Time</th>
                    <th>User_Agent</th>
                    <th>Panel_Control</th>
                    <th>Block</th>
                </tr>
            </thead>
            <tbody id="dynamicSection" class="dynamic-section">
            </tbody>
        </table>
    </div>
    <!-- End Table User Information -->
    <script src="./js/script.js"></script>
</body>
</html>