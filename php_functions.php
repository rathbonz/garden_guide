<?php
  function initiate_session(){
    session_start();
    $_SESSION["first_name"] = NULL;
  }

  function start_session() {
    session_start();

    if ($_SESSION["first_name"] == NULL){
      $_SESSION["first_name"] = $_POST["first-name"];
      $_SESSION["last_name"] = $_POST["last-name"];
      $_SESSION["zip_code"] = $_POST["zip-code"];
      $_SESSION["pin"] = $_POST["pin"];
    }
  }

  function destroy_session(){
      session_start();
      session_unset(); 
      session_destroy();
  }

  function pull_user() {
    $host_name = 'localhost';
    $database = 'garden_guide';
    $user_name = 'main_user';
    $password = 'xxx';
  
    $link = new mysqli($host_name, $user_name, $password, $database);
    $session_first_name = $_SESSION["first_name"];
    $session_last_name = $_SESSION["last_name"];
    $session_zip_code = $_SESSION["zip_code"];
    $session_pin = $_SESSION["pin"];

    if ($link->connect_error) {
      die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
    } 
    $sql = "SELECT user_profile_id FROM user_profile WHERE first_name = '$session_first_name' AND last_name = '$session_last_name' AND pin = '$session_pin'" ;
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $_SESSION["session_profile_id"]= $row["user_profile_id"];
      }
    } else {
        echo "0 results";
    }
  
  $link->close();
  }

  function plant_list() {
      $host_name = 'localhost';
      $database = 'garden_guide';
      $user_name = 'main_user';
      $password = 'xxx';
    
      $link = new mysqli($host_name, $user_name, $password, $database);
    
      if ($link->connect_error) {
        die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
      } 
      $sql = "SELECT * FROM plant_profile";
      $result = $link->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="plant-item">
            <div class="plant-image item-inline"><img src="images/' . $row["image_location"] . '" alt="' . ucwords($row["plant_name"]) .' Picture"></div>
                  <div class="plant-name item-inline">' . ucwords($row["plant_name"]) .'</div>
                  <div class="plant-attributes item-inline">
                      <ul>
                          <li>' . ucwords($row["gestation"]) . '</li>
                          <li>' . ucwords($row["sun_needs"]) . '</li>
                          <li>March to August</li>                                
                      </ul>
                  </div>
                  <div class="like-indicator item-inline"> <i class="material-icons" style="color: red">favorite</i> </div>
                  </div>';
              }
      }
    
    $link->close();
  }

  function plant_library() {
    $host_name = 'localhost';
    $database = 'garden_guide';
    $user_name = 'main_user';
    $password = 'xxx';
  
    $link = new mysqli($host_name, $user_name, $password, $database);
  
    if ($link->connect_error) {
      die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
    } 
    $session_id = $_SESSION["session_profile_id"];
    $plant_library_query = "SELECT * FROM plant_profile";
    $plant_library_query_result = $link->query($plant_library_query);

    if ($plant_library_query_result->num_rows > 0) {
      // output data of each row
      
      while($plant_library_row = $plant_library_query_result->fetch_assoc()) {
        $user_id_query = "SELECT * FROM user_plant_list WHERE user_profile_id = $session_id";
        $user_id_query_result = $link->query($user_id_query);
        $plant_profile_id = $plant_library_row['plant_profile_id'];
        echo '
        <div class="plant-item">
          <div class="plant-image item-inline"><img src="images/' . $plant_library_row["image_location"] . '" alt="' . ucwords($plant_library_row["plant_name"]) .' Picture"></div>
            <div class="plant-name item-inline">' . ucwords($plant_library_row["plant_name"]) .'</div>
            <div class="plant-attributes item-inline">
                <ul>
                    <li>' . ucwords($plant_library_row["gestation"]) . '</li>
                    <li>' . ucwords($plant_library_row["sun_needs"]) . '</li>
                    <li>March to August</li>                                
                </ul>
          </div>' . like_indicator($user_id_query_result, $plant_profile_id) . '
        </div>';

        }
    }
  
  $link->close();
}

  function like_indicator($user_id_query_result, $plant_profile_id){
    $indicator = 0;
    $count = 0;
    if ($user_id_query_result->num_rows > 0) {
      while($user_id_row = $user_id_query_result->fetch_assoc()) {
        if ($plant_profile_id == $user_id_row['plant_profile_id']){
          $indicator = 1;

        }

      } 
    }

    if ($indicator == 0){
      return '<div class="like-indicator item-inline"> <i class="material-icons"> favorite_border</i> </div>';
    }
    else {
      return '<div class="like-indicator item-inline"> <i class="material-icons" style= "color:red">favorite</i> </div>';
    }
    
  }

  function like_plant(){
    echo "liked plant";
  }

  function unlike_plant(){
    echo "unliked plant";
  }
?>
