<?php
include('../include/db.php');
if (isset($_POST['view'])) {
   if ($_POST["view"] != '')
   {
      $update_query = "UPDATE comments SET comment_status = 1 WHERE comment_status = 0";
      mysqli_query($db, $update_query);
   }
   $query = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 5";
   $result = mysqli_query($db, $query);
   $output = '';
   if (mysqli_num_rows($result) > 0)
   {
   while ($row = mysqli_fetch_array($result))
   {
      $output .= '
      <li>
      <strong>'.$row["comment_subject"].'</strong><br />
      <small><em>'.$row["comment_text"].'</em></small>
      </li>
      ';
   }
   }
   else{
      $output .= '<li><p class="text-bold text-italic">No Notif Found</p></li>';
   }
   $status_query = "SELECT * FROM comments WHERE comment_status = 0";
   $result_query = mysqli_query($db, $status_query);
   $count = mysqli_num_rows($result_query);
   $data = array(
      'notification' => $output,
      'unseen_notification'  => $count
   );
   echo json_encode($data);
}
?>