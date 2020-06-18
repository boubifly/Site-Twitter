<?php

require __DIR__ . '/../database/db.php';

if (isset($_POST['submit']))
{
    
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "SELECT * FROM user WHERE username = ?";
    $result = $db->prepare($sql);
    $result->execute(array($username));

    if($result->rowCount() > 0)
    {
      $data = $result->fetchAll();
      if (password_verify($password, $data[0]["password"]))
      {
        
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data->id;
        header('Location: profile.php?'.$data->id);

        exit();
        
      }
      elseif (!password_verify($password, $data[0]["password"]))
      {
        echo "Mot de passe incorrect.";
        
      }
    }
    else
    {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";
      $req = $db->prepare($sql);
      $req->execute();
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $data->id;
      header('Location: profile.php?'.$data->id);

      exit();
      
    }
    
}