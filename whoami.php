<?php

print shell_exec( 'whoami' );


function recurse_chown_chgrp($mypath, $uid, $gid)
{
    $d = opendir ($mypath) ;
    while(($file = readdir($d)) !== false) {
        if ($file != "." && $file != "..") {

            $typepath = $mypath . "/" . $file ;

            //print $typepath. " : " . filetype ($typepath). "<BR>" ;
            if (filetype ($typepath) == 'dir') {
                recurse_chown_chgrp ($typepath, $uid, $gid);
            }

            chown($typepath, $uid);

            // Check the result
$stat = stat($path);
print_r(posix_getpwuid($stat['uid']));

            chgrp($typepath, $gid);


            // Check the result
$stat = stat($path);
print_r(posix_getpwuid($stat['uid']));

        }
    }

}

recurse_chown_chgrp ("/home/cumulus420/public_html/dev.digitaldnalab.com/uploads/documents/DDOS/Testing/Halt_and_catch_fire/123456/filelistimg_all-Laptop-Reporting/temp", "www-data", "www-data") ; 