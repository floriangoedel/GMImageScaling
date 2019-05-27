<?php
    $file = $_FILES['picture'];
    $tempdir = "tmp_files/";

    $splittedFilename = explode(".", $file['name']);
    $filetype = $splittedFilename[sizeof($splittedFilename) - 1];

    $splittedFilenameOnSlash = explode("\\", $file['name']);
    $filename = $splittedFilenameOnSlash[sizeof($splittedFilenameOnSlash) - 1];

    move_uploaded_file($file['tmp_name'], $tempdir . $filename);

    $commands = ["gm convert -resize 1000x800 " . $tempdir . $filename . " Resources/nr1-250." . $filetype,
        "gm convert -resize 480x640 " . $tempdir . $filename . " Resources/nr1-150." . $filetype,
        "gm convert -resize 240x320 " . $tempdir . $filename . " Resources/nr1-50." . $filetype
    ];

    foreach ($commands as $command) {
        exec($command);
    }

    echo "<img src=\"Resources/nr1-250." . $filetype . "\">";
    echo "<img src=\"Resources/nr1-150." . $filetype . "\">";
    echo "<img src=\"Resources/nr1-50." . $filetype . "\">";