<?php

require "CurlHelper.php";

$links = [
    2010 => [
        'd12-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d12/2-1-3-3.htm',
        'd12-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d12/2-1-3-2.htm',
        'd12-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d12/2-1-3-1.htm',

        'd11-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d11/2-1-3-3.htm',
        'd11-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d11/2-1-3-2.htm',
        'd11-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d11/2-1-3-1.htm',

        'd10-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d10/2-1-3-3.htm',
        'd10-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d10/2-1-3-2.htm',
        'd10-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d10/2-1-3-1.htm',

        'd09-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d09/2-1-4-3.htm',
        'd09-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d09/2-1-4-2.htm',
        'd09-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d09/2-1-4-1.htm',

        'd08-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d08/2-1-3-3.htm',
        'd08-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d08/2-1-3-2.htm',
        'd08-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d08/2-1-3-1.htm',

        'd07-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d07/2-1-3-3.htm',
        'd07-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d07/2-1-3-2.htm',
        'd07-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d07/2-1-3-1.htm',

        'd06-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d06/2-1-3-3.htm',
        'd06-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d06/2-1-3-2.htm',
        'd06-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d06/2-1-3-1.htm',

        'd05-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d05/2-1-3-3.htm',
        'd05-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d05/2-1-3-2.htm',
        'd05-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d05/2-1-3-1.htm',

        'd04-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d04/2-1-3-3.htm',
        'd04-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d04/2-1-3-2.htm',
        'd04-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d04/2-1-3-1.htm',

        'd03-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d03/2-1-4-3.htm',
        'd03-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d03/2-1-4-2.htm',
        'd03-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d03/2-1-4-1.htm',

        'd02-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d02/2-1-3-3.htm',
        'd02-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d02/2-1-3-2.htm',
        'd02-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d02/2-1-3-1.htm',

        'd01-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d01/2-1-3-3.htm',
        'd01-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d01/2-1-3-2.htm',
        'd01-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b10_01/IssWWW.exe/Stg/d01/2-1-3-1.htm',
    ],
    2011 => [
        'd12-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d12/2-1-3-3.htm',
        'd12-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d12/2-1-3-2.htm',
        'd12-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d12/2-1-3-1.htm',

        'd11-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d11/2-1-3-3.htm',
        'd11-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d11/2-1-3-2.htm',
        'd11-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d11/2-1-3-1.htm',

        'd10-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d10/2-1-3-3.htm',
        'd10-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d10/2-1-3-2.htm',
        'd10-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d10/2-1-3-1.htm',

        'd09-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d09/2-1-4-3.htm',
        'd09-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d09/2-1-4-2.htm',
        'd09-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d09/2-1-4-1.htm',

        'd08-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d08/2-1-3-3.htm',
        'd08-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d08/2-1-3-2.htm',
        'd08-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d08/2-1-3-1.htm',

        'd07-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d07/2-1-3-3.htm',
        'd07-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d07/2-1-3-2.htm',
        'd07-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d07/2-1-3-1.htm',

        'd06-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d06/2-1-3-3.htm',
        'd06-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d06/2-1-3-2.htm',
        'd06-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d06/2-1-3-1.htm',

        'd05-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d05/2-1-3-3.htm',
        'd05-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d05/2-1-3-2.htm',
        'd05-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d05/2-1-3-1.htm',

        'd04-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d04/2-1-3-3.htm',
        'd04-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d04/2-1-3-2.htm',
        'd04-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d04/2-1-3-1.htm',

        'd03-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d03/2-1-4-3.htm',
        'd03-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d03/2-1-4-2.htm',
        'd03-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d03/2-1-4-1.htm',

        'd02-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d02/2-1-3-1.htm',
        'd02-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d02/2-1-3-1.htm',
        'd02-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d02/2-1-3-1.htm',

        'd01-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d01/2-1-3-3.htm',
        'd01-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d01/2-1-3-2.htm',
        'd01-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b11_01/IssWWW.exe/Stg/d01/2-1-3-1.htm',
    ],
    2012 => [
        'd12-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d12/2-1-3-3.htm',
        'd12-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d12/2-1-3-2.htm',
        'd12-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d12/2-1-3-1.htm',

        'd11-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d11/2-1-3-3.htm',
        'd11-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d11/2-1-3-2.htm',
        'd11-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d11/2-1-3-1.htm',

        'd10-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d10/2-1-3-3.htm',
        'd10-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d10/2-1-3-2.htm',
        'd10-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d10/2-1-3-1.htm',

        'd09-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d09/2-1-4-3.htm',
        'd09-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d09/2-1-4-2.htm',
        'd09-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d09/2-1-4-1.htm',

        'd08-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d08/2-1-3-3.htm',
        'd08-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d08/2-1-3-2.htm',
        'd08-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d08/2-1-3-1.htm',

        'd07-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d07/2-1-3-3.htm', // here
        'd07-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d07/2-1-3-2.htm',
        'd07-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d07/2-1-3-1.htm',

        'd06-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d06/2-1-3-3.htm',
        'd06-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d06/2-1-3-2.htm',
        'd06-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d06/2-1-3-1.htm',

        'd05-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d05/2-1-3-3.htm',
        'd05-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d05/2-1-3-2.htm',
        'd05-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d05/2-1-3-1.htm',

        'd04-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d04/2-1-3-3.htm',
        'd04-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d04/2-1-3-2.htm',
        'd04-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d04/2-1-3-1.htm',

        'd03-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d03/2-1-4-3.htm',
        'd03-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d03/2-1-4-2.htm',
        'd03-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d03/2-1-4-1.htm',

        'd02-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d02/2-1-3-3.htm',
        'd02-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d02/2-1-3-2.htm',
        'd02-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d02/2-1-3-1.htm',

        'd01-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d01/2-1-3-3.htm',
        'd01-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d01/2-1-3-2.htm',
        'd01-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b12_01/IssWWW.exe/Stg/d01/2-1-3-1.htm',
    ],
    2013 => [
        'd12-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d12/2-1-3-3.htm',
        'd12-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d12/2-1-3-2.htm',
        'd12-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d12/2-1-3-1.htm',

        'd11-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d11/2-1-3-3.htm',
        'd11-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d11/2-1-3-2.htm',
        'd11-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d11/2-1-3-1.htm',

        'd10-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d10/2-1-3-3.htm',
        'd10-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d10/2-1-3-2.htm',
        'd10-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d10/2-1-3-1.htm',

        'd09-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d09/2-1-4-3.htm',
        'd09-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d09/2-1-4-2.htm',
        'd09-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d09/2-1-4-1.htm',

        'd08-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d08/2-1-3-3.htm',
        'd08-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d08/2-1-3-2.htm',
        'd08-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d08/2-1-3-1.htm',

        'd07-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d07/2-1-3-3.htm',
        'd07-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d07/2-1-3-2.htm',
        'd07-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d07/2-1-3-1.htm',

        'd06-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d06/2-1-3-3.htm',
        'd06-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d06/2-1-3-2.htm',
        'd06-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d06/2-1-3-1.htm',

        'd05-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d05/2-1-3-3.htm',
        'd05-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d05/2-1-3-2.htm',
        'd05-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d05/2-1-3-1.htm',

        'd04-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d04/2-1-3-3.htm',
        'd04-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d04/2-1-3-2.htm',
        'd04-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d04/2-1-3-1.htm',

        'd03-2-1-4-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d03/2-1-4-3.htm',
        'd03-2-1-4-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d03/2-1-4-2.htm',
        'd03-2-1-4-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d03/2-1-4-1.htm',

        'd02-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d02/2-1-3-3.htm',
        'd02-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d02/2-1-3-2.htm',
        'd02-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d02/2-1-3-1.htm',

        'd01-2-1-3-3' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d01/2-1-3-3.htm',
        'd01-2-1-3-2' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d01/2-1-3-2.htm',
        'd01-2-1-3-1' => 'https://rosstat.gov.ru/bgd/regl/b13_01/IssWWW.exe/Stg/d01/2-1-3-1.htm',
    ],
];

$toCsv = [];

foreach ($links as $year => $linksArr) {
    foreach ($linksArr as $name => $link) {
        $cachePath = __DIR__ . "/storage/$year/$name.txt";
        if (file_exists($cachePath)) {
            $res = file_get_contents($cachePath);

            $month = mb_substr($name, 0, 3);
            $processedData = process($res);
            $processedDataKey = array_key_first($processedData);
            $toCsv[$year.'_'.$month][$processedDataKey] = $processedData[$processedDataKey];

            var_dump("from cache: ". $year.'_'.$month);

            continue;
        }

        $res = CurlHelper::parseData($link)->get();
        $res = mb_convert_encoding($res, "UTF-8", "CP-1251");
        file_put_contents($cachePath, $res, FILE_APPEND);

        $month = mb_substr($name, 0, 3);
        $processedData = process($res);
        $processedDataKey = array_key_first($processedData);
        $toCsv[$year.'_'.$month][$processedDataKey] = $processedData[$processedDataKey];

        var_dump("from url query: ". $year.'_'.$month);

        sleep(5);
    }
}

toCsv($toCsv);

function process(string $data): ?array {
    $html = new DomDocument();
    $data = mb_convert_encoding($data, 'HTML-ENTITIES', "UTF-8");
    @$html->loadHTML($data);

    $firstPoint = null;
    $firstPoints = $html->getElementsByTagName('i');
    foreach ($firstPoints as $i) {
        if (strstr(stringFix($i->textContent), 'млрд.рублей')) {
            $firstPoint = $i;
            break;
        }
    }

    if ($firstPoint) {
        $firstPointParent = $firstPoint->parentNode->parentNode;
        $finalPoint = $firstPointParent->nextSibling->nextSibling->nextSibling->nextSibling;
        $fieldName = stringFix($finalPoint->childNodes[0]->textContent);
        $fieldValue = stringFix($finalPoint->childNodes[2]->textContent);
        $date = stringFix($firstPoint->textContent);
        var_dump("$fieldName: $fieldValue ($date)");

        return [$fieldName => $fieldValue];
    } else {
        var_dump('млрд.рублей. not found'); // todo extra log
        return null;
    }
}

function stringFix(string $text) {
    $text = str_replace(["\r\n", "\r", "\n", "<br>"], '', $text);
    return trim($text);
}

function toCsv(array $data) {
    if (empty($data)) {
        return;
    }

    $csvPath = __DIR__ . "/storage/report.csv";
    if (file_exists($csvPath)) {
        unlink($csvPath);
    }

    $headers = [
        'Дата',
        'Производство и распределение электроэнергии, газа и воды',
        'Обрабатывающие производства',
        'Добыча полезных ископаемых',
    ];
    file_put_contents($csvPath, implode(';', $headers).PHP_EOL);

    foreach ($data as $date => $rowArr) {
        $row = [
            str_replace('_d', '-', $date),
            $rowArr[$headers[1]],
            $rowArr[$headers[2]],
            $rowArr[$headers[3]],
        ];
        file_put_contents($csvPath, implode(';', $row).PHP_EOL, FILE_APPEND);
    }
}
