<?php

require_once 'vendor/autoload.php';

$separator = DIRECTORY_SEPARATOR;
$namespace = "NOKA\\PHPUBL\\UBL";
$xsd_folder = "schema{$separator}maindoc";
$document_xsds = array_diff(scandir($xsd_folder), ['.', '..']);
foreach ($document_xsds as $document_xsd) {
    \preg_match('/^UBL-(\w+)-/', $document_xsd, $match);
    $class_basename = $match[1];
    $class_fqn = "{$namespace}\\{$class_basename}";
    if (class_exists($class_fqn)) {
        echo $class_basename . " already exists" . PHP_EOL;
        continue;
    }
    $path = "{$xsd_folder}{$separator}{$document_xsd}";
    $command = "vendor{$separator}bin{$separator}xsd2php.bat convert config.yml $path";
    echo "Generating " . $class_basename . PHP_EOL;
    execute($command);
}

function execute($cmd) {
    $proc = proc_open($cmd, [['pipe','r'],['pipe','w'],['pipe','w']], $pipes);
    while(($line = fgets($pipes[1])) !== false) {
        fwrite(STDOUT,$line);
    }
    while(($line = fgets($pipes[2])) !== false) {
        fwrite(STDERR,$line);
    }
    fclose($pipes[0]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    return proc_close($proc);
}
