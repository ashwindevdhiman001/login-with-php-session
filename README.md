# login-with-php-session
Its a php session based login structure for beginers 



this is the basic decision structure of index.php code,which is changed accordingly our page and requirements

if(!empty($_GET['msg'])){
  //content
}
if(!empty($_SESSION) && $_SESSION['is_login'] === true){
  //content
}else{
  //content
}
