<?php
$conn = pg_connect("postgres://certllyyvshnbk:a93c612f10d1a0d05631ca25c3ded3926e2433125525e99c1e5ab0711a581ad2@ec2-3-213-66-35.compute-1.amazonaws.com:5432/dbdrou5rbubp96");

	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>