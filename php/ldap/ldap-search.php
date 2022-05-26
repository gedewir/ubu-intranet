<?php
  include("ldap-connect.php");

  //from the html form
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  //arguements inside ldap_search()
  $tree = "CN=Users,DC=gedewirayuda,DC=me";
  $filter = "(CN=". $fname . " " . $lname . ")";
  $attributes = array();

  //
  $result = ldap_search($ldapconn, $tree, $filter, $attributes);
  $entries = ldap_get_entries($ldapconn, $result);

  if ($entries['count'] == 1 ){
    echo "<pre>";
    print_r ($entries);
    echo "</pre>";
  } else {
    echo "sowy this is not a person :(";
  }


 ?>
