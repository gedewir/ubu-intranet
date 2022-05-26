<?php
  //include script connection to domain controller
  include("ldap-connect.php");
  //departments included in
  $department_group = array("Accounting", "I.T", "H.R");

  foreach ($department_group as $department){
    //arguements inside ldap_search()
    $tree = "OU=". $department . ",DC=gedewirayuda,DC=me";
    //search for all common names inside the Department OUs
    $filter = "(CN=*)";
    $attributes = array('displayname', 'userprincipalname');

    $result = ldap_search($ldapconn, $tree, $filter, $attributes);
    $entries = ldap_get_entries($ldapconn, $result);

    echo "<h3>". $department . "</h3>";
    echo '<table class="table">
      <thead class="thead-dark">
        <tr>
        <th>Name</th>
        <th>Email</th>
        </tr>
        </thead>
        <tbody>';

    //loop every object in results recieved from ldap_get_entries()
    foreach($entries as $entry){
      //users are arrays therefore they are the only ones should be parsed
      if (is_array($entry)){
        echo "<tr>
        <td>" . $entry['displayname'][0] . "</td>
        <td>" . $entry['userprincipalname'][0] . "</td>
        </tr>";
      }
    }
    echo "</table>";
  }

 ?>
