<?php
$conn = pg_connect("postgres://nzkgaewlkswfqs:f39c9543caf44f2fa356c64e47f9c616bee11f3f5fcb5f96207cf4a790a52bd8@ec2-54-208-11-146.compute-1.amazonaws.com:5432/d3esqa1er0rpj9");

	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>