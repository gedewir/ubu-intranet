<?php
  $ldap_dn = "LDAPbind";
  $ldap_password = "P@ssw0rd";
  $ldapuri = "ldap://Perth-DC.gedewirayuda.me:389";

  //connection to LDAP server
  $ldapconn = ldap_connect($ldapuri) or die("LDAP URI not good yo!");
  //using LDAP protocol v3
  ldap_set_option($ldapconn,LDAP_OPT_PROTOCOL_VERSION,3);

  if ($ldapconn){
    //binding to LDAP server
    $ldapbind = ldap_bind($ldapconn, $ldap_dn, $ldap_password );
  }
 ?>
