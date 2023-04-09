<?php
$conn = pg_connect("postgres://clcsaimmecpvec:7c0fa48751242b924b628c8eb2a3306f1b59eb6c7e7a7901b5fa656c6836a686@ec2-52-205-45-222.compute-1.amazonaws.com:5432/dfecog678lhqu4");

	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>