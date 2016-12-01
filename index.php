 <h1>Hello, this is the HomePage</h1>
     <?php
          function connectDB(){
  try{
    $db = new mysqli("us-cdbr-iron-east-04.cleardb.net","bee11f4e479155","07064880","heroku_f154ae20fe9c574");//Change later
    if($db == NULL && $db->connect_errno > 0)return NULL;
    return $db;
  }catch(Exception $e){}
  return NULL;
}
          $db = connectDB();
         if ($db == NULL) echo "did not work";
          else 
            echo "did work";
          ?>
