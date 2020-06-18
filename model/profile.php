<?php

require __DIR__ . '/../database/db.php';

if (isset($_POST['submit']))
{
    
    $username = htmlspecialchars($_POST['username']);
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $db->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {
      $data = $result->fetchAll();
      if (password_verify($password, $data[0]["password"]))
      {
        $sql = "UPDATE user SET username = :username, bio = :bio  WHERE username = '$username'";
        $req = $db->prepare($sql);
        $req->execute([
            'username' => $username,
            'bio' => $bio,
        ]);
        
        
      }
    }
    
}

?>