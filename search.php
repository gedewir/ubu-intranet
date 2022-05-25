<?php
  include("ldap-connect.php");

  //from the html form
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  //arguements inside ldap_search()
  $tree = "CN=Users,DC=gedewirayuda,DC=me";
  $filter = '(cn=Nigel Noongar)';
  $attributes = array('sn');

  //
  $result = ldap_search($ldapconn, $tree, $filter, $attributes);
  $entries = ldap_get_entries($ldapconn, $result);

  print "<pre>";
  print_r ($entries);
  print "</pre>";
 ?>
