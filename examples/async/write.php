<?php
for($i=0; $i<10; $i++)
{
	swoole_async_write("data.txt", str_repeat('S', 8192), -1, function($file, $writen) {
		echo "write [$writen]\n";
		//return true: write contine. return false: close the file.
		return true;
	});
}
