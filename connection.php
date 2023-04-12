<?php
$conn = pg_connect("postgres://ndffhofcqjdyju:437a3e7d96e23e7c3399f6d1d2c633fe3c562da30d86a68e77e2d5c04617aa02@ec2-44-215-1-253.compute-1.amazonaws.com:5432/d1206sga70vhhb");

	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>