<?php
/* Australian Prime Ministers.  Data as of 5 March 2010. */
function getUsers()
{
  $users = array(
     array('name' => 'Julia Gillard', 'address' => 'Loganlea Rd, Logan', 
	           'phone' => '1234 4321', 'email' => 'julia@the.lodge'),
	   array('name' => 'Tony Abbott', 'address' => 'Logan Rd, Mt Gravatt', 
	           'phone' => '9876 5432', 'email' => 'tony@the.hermitage'),
	   array('name' => 'Christine Milne', 'address' => 'Kessels Rd, Nathan', 
	           'phone' => '91234 5678', 'email' => 'chris@the.treetop'),
  );
  return $users;
}
?>

