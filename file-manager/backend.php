<?php
 require_once "\x2e\x2e\57\56\56\57\166\145\156\x64\x6f\162\x2f\x61\165\164\x6f\x6c\x6f\x61\x64\56\x70\x68\x70"; require_once "\x73\162\143\57\x46\151\154\x65\57\x4d\x61\x6e\x61\147\x65\x72\56\160\150\x70"; use App\File\Manager as FileManager; use App\Service\Crypto; use Symfony\Component\Dotenv\Dotenv; goto Aa781; Add9d: echo json_encode($data); goto Cd078; d3d18: if (!(true === isset($_POST["\x69\x64"]) && true === isset($_POST["\164\157"]))) { goto Ab259; } goto Fa723; C96df: if (!(true === str_contains($requestUri, "\x66\x6f\x6c\x64\x65\x72\163") && false === is_null($id))) { goto Bac03; } goto ab61d; c99fd: if (!(true === isset($_POST["\x69\x64"]) && true === isset($_POST["\x6e\141\x6d\145"]))) { goto C8bbf; } goto fe0ef; Ba39b: bf4f5: goto ac1e4; dba8c: C7df4: goto a8676; ea0b8: if (!(true === str_contains($requestUri, "\143\157\155\x70\x72\145\x73\163"))) { goto dd6ac; } goto d2c05; E9573: $file = sprintf("\45\x73\57\x25\x73", rtrim($homeDirectory, "\x2f"), ltrim($id, "\x2f")); goto bc80a; C4874: $file = sprintf("\x25\x73\x2f\45\163", rtrim($homeDirectory, "\x2f"), ltrim($id, "\x2f")); goto b6724; c4056: E4535: goto Dcd83; B2f80: C96d4: goto A8c25; f066a: if (!(true === isset($_POST["\151\x64"]) && true === isset($_POST["\164\157"]))) { goto f3f8e; } goto Ea3cf; ec55c: $fileUploadPath = $_POST["\165\160\x6c\x6f\141\x64\x5f\146\165\x6c\x6c\x70\x61\164\150"] ?? null; goto Ab25e; F77bb: $directory = sprintf("\45\163\57\45\x73\57", rtrim($homeDirectory, "\x2f"), ltrim($id, "\57")); goto afee9; A6bd1: a972b: goto b9934; B3c2a: goto ac39b; goto e8fa4; C99f8: if (!(true === str_contains($requestUri, "\162\x65\156\141\155\x65"))) { goto B7d53; } goto E48de; cd9b9: exit; goto D108a; fed3f: if (!(false == is_dir($homeDirectory))) { goto dc35e; } goto D4fef; ab774: $fileContent = $fileManager->getFileContent($file); goto af2a4; f5f49: $fileManager->download($file); goto c5059; Cf3db: E3033: goto Dc9dd; e935e: foreach ($filesDecoded as $file) { goto Bbe9e; Bbe9e: $filePath = $file["\x69\x64"] ?? null; goto D19a1; d50b9: cdec4: goto cea84; E0ca5: $file = sprintf("\45\x73\x2f\45\163", rtrim($homeDirectory, "\x2f"), ltrim($filePath, "\57")); goto fabe1; a2835: e7ad2: goto d50b9; D19a1: if (!(false === is_null($filePath))) { goto e7ad2; } goto E0ca5; e2632: e53c6: goto a2835; fabe1: if (!(true === file_exists($file))) { goto e53c6; } goto fe038; fe038: $files[] = $file; goto e2632; cea84: } goto f0610; eea87: $id = $_POST["\x69\144"] ?? null; goto Bb16c; D108a: c54a8: goto F5ae1; a8676: echo json_encode($data); goto c9f47; cbe8c: $id = $targetDirectory; goto eea33; Eeced: $file = sprintf("\45\x73\57\x25\163", rtrim($homeDirectory, "\57"), ltrim($id, "\x2f")); goto ab774; Fa723: $id = $_POST["\x69\x64"] ?? null; goto Cc9b7; aaf37: if (!(true === str_contains($requestUri, "\x63\157\160\x79"))) { goto Abf56; } goto d3d18; Aa781: $envFile = "\56\56\57\56\56\x2f\x2e\145\156\166"; goto cac15; D8548: $id = $_POST["\151\x64"] ?? null; goto fb989; D4fef: exit; goto eeac1; Cf519: ef6c5: goto F9914; f8a13: E3f6b: goto c4056; b0055: $data = $fileManager->writeFileContent($file, $fileContent); goto Add9d; C9b0b: e1e9b: goto f8a13; A9430: $data = $fileManager->delete($file); goto A37d6; Cde24: exit; goto c70de; b3948: $directoryName = $_POST["\x6e\141\155\x65"] ?? null; goto D8486; Ecd07: Abf56: goto D52d0; D8486: if (!(false === is_null($directoryName) && false === is_null($id))) { goto f6440; } goto F0649; d977e: $download = $_GET["\144\157\x77\x6e\154\157\141\144"] ?? null; goto d3262; fb989: if (!(false === is_null($id))) { goto Faaed; } goto aa655; ee6f6: if (!(false === is_null($destinationDirectoryName) && false === is_null($id))) { goto a972b; } goto aae25; bc80a: $data = $fileManager->rename($file, $newFilename); goto F3345; D4bc6: $user = $decryptedData["\165\x73\145\162"]; goto Cf519; Dfab4: exit; goto de9e0; a3c5e: a15e9: goto C2491; db747: Ddf08: goto c7dfa; A37d6: echo json_encode($data); goto B95d3; Cbd90: $directory = sprintf("\45\x73\57\45\163", rtrim($homeDirectory, "\57"), ltrim($id, "\57")); goto Ac98b; f97dd: $data = $fileManager->getFolders($directory); goto C5025; e69fa: Edbc8: goto db747; D0255: $data = $fileManager->getFiles($directory); goto dba8c; b6eb0: $data = $fileManager->copy($file, $copyToDirectory); goto Ec7f0; bf3d6: echo json_encode($data); goto e69fa; b6724: $data = $fileManager->permissions($file, $permissions); goto F0957; effad: echo json_encode($data); goto A6bd1; D1e5b: $encryptedData = trim($_COOKIE["\x63\x6c\160\55\x66\x6d"]); goto Fca0b; Ab25e: if (!(false === is_null($fileUploadPath) && false === is_null($tmpFile) && false === is_null($id))) { goto e1e9b; } goto Cbd90; Dbe7a: $id = $_POST["\x69\x64"] ?? null; goto E9cba; e1432: if (!(true === str_contains($requestUri, "\x64\145\x6c\145\x74\145"))) { goto a021a; } goto B1a9b; Db649: $file = sprintf("\45\x73\x2f\45\163", rtrim($homeDirectory, "\x2f"), ltrim($id, "\x2f")); goto f5f49; afa48: ini_set("\x64\151\x73\160\x6c\141\x79\137\x65\x72\162\x6f\x72\163", 1); goto fea7d; c3b6a: if (true === isset($_POST["\143\157\156\x74\145\156\x74"]) && true === isset($_POST["\x69\144"])) { goto cf2f9; } goto C8770; B93d8: $filename = $_POST["\156\x61\155\x65"] ?? null; goto D40fa; dbc87: $id = $_POST["\151\x64"] ?? null; goto b3948; fe0ef: $id = $_POST["\x69\144"] ?? null; goto B93d8; a43b5: if (!("\57" != $id)) { goto a5c35; } goto F77bb; af2a4: echo $fileContent; goto fc0ea; e8d6b: if (!(false === empty($filesDecoded) && true === is_array($filesDecoded))) { goto abca7; } goto e935e; d4e48: abca7: goto c8a5a; d2acb: $user = null; goto ea486; A80d3: if (!(true === str_contains($requestUri, "\164\145\x78\x74"))) { goto b5a3b; } goto c3b6a; E5496: $appEnv = $_ENV["\101\x50\x50\x5f\105\x4e\x56"]; goto f0ecf; E1dc1: $id = $_GET["\151\144"] ?? null; goto ac44e; C3cb7: b0b2e: goto ea0b8; aae25: $file = sprintf("\45\x73\x2f\x25\x73", rtrim($homeDirectory, "\x2f"), ltrim($id, "\x2f")); goto e52ca; Fca0b: $encryptedData = base64_decode($encryptedData); goto f65cc; df61c: $fileManager = new FileManager($user); goto C96df; aa655: $file = sprintf("\45\x73\x2f\x25\x73", rtrim($homeDirectory, "\57"), ltrim($id, "\x2f")); goto A9430; A2d67: $data = []; goto Fd973; E6a1a: echo json_encode($data); goto dcbb0; C5303: $newFilename = $_POST["\x6e\x61\x6d\145"] ?? ''; goto Dbe7a; b78c5: $copyToDirectory = sprintf("\45\x73\57\x25\163", rtrim($homeDirectory, "\57"), ltrim($copyTo, "\57")); goto b6eb0; D814a: $id = $_POST["\151\144"] ?? null; goto A0c78; b9934: ba619: goto C3cb7; Ea3cf: $id = $_POST["\151\144"] ?? null; goto F9a48; cd26c: if (!(true === str_contains($requestUri, "\145\170\x74\x72\141\143\164"))) { goto b0b2e; } goto e838e; F0957: echo json_encode($data); goto a3c5e; E39d3: fb150: goto cd26c; df931: $data = $fileManager->compress($files, $targetDirectory, $id); goto bf3d6; dcbb0: b9c26: goto C01f1; ab61d: $data = []; goto fd7ce; de9e0: Bac03: goto Bb926; E3542: $filesDecoded = json_decode($files, true); goto C6701; c73e7: ac002: goto B2f80; C5025: echo json_encode($data); goto Dfab4; C2491: Cbcc8: goto E39d3; c9ffa: $fileContent = $_POST["\x63\x6f\x6e\164\x65\156\x74"] ?? ''; goto b0055; cbd28: $tmpFile = $_FILES["\165\x70\x6c\x6f\x61\x64"]["\x74\155\x70\137\x6e\x61\155\145"] ?? null; goto ec55c; f65cc: $decryptedData = Crypto::decrypt($encryptedData); goto Efdca; Cc9b7: $copyTo = $_POST["\x74\157"] ?? null; goto D1151; Bb16c: $destinationDirectoryName = $_POST["\x64\x65\163\164\151\x6e\141\164\x69\x6f\x6e\104\151\x72\x65\143\164\157\162\x79\116\141\x6d\145"] ?? null; goto ee6f6; ac1e4: a021a: goto Bee8b; A1ddb: D2010: goto aaf37; ea9e1: if (!(false === is_null($permissions) && false === is_null($id))) { goto a15e9; } goto C4874; B95d3: Faaed: goto Ba39b; d2c05: if (!(true === isset($_POST["\x66\151\154\145\163"]) && true === isset($_POST["\164\141\x72\147\x65\x74"]))) { goto Ddf08; } goto d80fc; f9b3b: Cef87: goto A1ddb; C01f1: C8bbf: goto Efff4; B3a5d: if (!(true === isset($_POST["\x69\x64"]) && true === isset($_POST["\x70\145\x72\155\151\x73\x73\151\157\x6e\163"]))) { goto Cbcc8; } goto eca7b; cac15: $dotenv = new Dotenv(); goto Dfd30; F9914: C2dda: goto C04ea; B1a9b: if (!(true === isset($_POST["\151\x64"]))) { goto bf4f5; } goto D8548; Ac4dd: ac39b: goto Cde24; Ebad1: if (!(false === empty($files) && false === is_null($targetDirectory))) { goto Edbc8; } goto cbe8c; F0649: $directory = sprintf("\x25\163\x2f\45\x73", rtrim($homeDirectory, "\57"), ltrim($id, "\57")); goto Cc4d6; b75ab: echo json_encode($data); goto F74df; f0ecf: $appVersion = $_ENV["\x41\120\120\137\126\x45\122\123\x49\117\116"]; goto f5ed4; C8770: if (!(false === is_null($id))) { goto e1838; } goto Eeced; B6931: if (!(true === str_contains($requestUri, "\165\x70\154\157\x61\144"))) { goto E4535; } goto b8d8b; Dfd30: $dotenv->load($envFile); goto E5496; eca7b: $id = $_POST["\x69\x64"] ?? null; goto Fc224; ebd68: $data = $fileManager->move($file, $moveToDirectory); goto Bb863; adf89: echo json_encode($data); goto C9b0b; fea7d: bd294: goto d2acb; A0c78: if (!(false === is_null($id))) { goto da1c3; } goto e6fe9; F3345: echo json_encode($data); goto c73e7; F9a48: $copyTo = $_POST["\x74\x6f"] ?? null; goto ffe16; f5ed4: if (!("\x64\145\166" === $appEnv)) { goto bd294; } goto Cb606; d5582: $data = []; goto E9573; F5ae1: $requestUri = $_SERVER["\122\105\121\125\x45\123\124\137\125\x52\111"] ?? null; goto E1dc1; eea33: $targetDirectory = sprintf("\x25\x73\57\x25\x73", rtrim($homeDirectory, "\x2f"), ltrim($targetDirectory, "\57")); goto df931; eaa18: if (!(true === isset($_POST["\x69\144"]) && true === isset($_POST["\x6e\141\x6d\x65"]))) { goto Cef87; } goto dbc87; c8a5a: c8038: goto e90fb; e00b9: $data = $fileManager->makeFile($filename, $directory); goto E6a1a; Efdca: $decryptedData = unserialize($decryptedData); goto D7662; Efff4: E8742: goto Beefa; D40fa: if (!(false === is_null($filename) && false === is_null($id))) { goto b9c26; } goto f6d44; E9cba: if (!(false === is_null($id))) { goto ac002; } goto d5582; afee9: a5c35: goto f97dd; E48de: if (!(true === isset($_POST["\x6e\141\155\145"]) && false === empty($_POST["\156\x61\155\x65"]) && true === isset($_POST["\x69\144"]))) { goto C96d4; } goto C5303; C5d49: if (!(false === is_null($files))) { goto c8038; } goto E3542; f6d44: $directory = sprintf("\x25\x73\57\45\163", rtrim($homeDirectory, "\x2f"), ltrim($id, "\57")); goto e00b9; ea486: if (!(true === isset($_COOKIE["\143\154\x70\x2d\146\x6d"]) && false === empty($_COOKIE["\143\154\160\x2d\x66\x6d"]))) { goto C2dda; } goto D1e5b; Bee8b: if (!(true === str_contains($requestUri, "\144\151\x72\145\143\x74"))) { goto Be729; } goto d977e; e838e: if (!(true === isset($_POST["\x69\x64"]) && true === isset($_POST["\144\145\x73\x74\x69\x6e\x61\164\151\x6f\x6e\104\151\x72\145\143\x74\x6f\162\171\116\x61\x6d\x65"]))) { goto ba619; } goto eea87; C6701: $files = []; goto e8d6b; e8fa4: cf2f9: goto D814a; Fc224: $permissions = $_POST["\x70\145\162\x6d\151\x73\163\151\x6f\156\x73"] ?? null; goto ea9e1; D1151: $file = sprintf("\x25\x73\x2f\45\163", rtrim($homeDirectory, "\x2f"), ltrim($id, "\57")); goto b78c5; d80fc: $files = $_POST["\x66\151\x6c\x65\163"] ?? null; goto C5d49; Fd973: $directory = sprintf("\45\163\x2f\45\x73\x2f", rtrim($homeDirectory, "\57"), ltrim($id, "\57")); goto B4580; e90fb: $targetDirectory = $_POST["\x74\x61\162\x67\x65\164"] ?? null; goto Ebad1; f0610: Ee8f3: goto d4e48; B4580: if (!(true === is_dir($directory))) { goto C7df4; } goto D0255; A8c25: B7d53: goto e1432; Bb926: if (!(true === str_contains($requestUri, "\146\x69\154\x65\163") && false === is_null($id))) { goto de504; } goto A2d67; df0be: Be729: goto B6931; E3c10: $moveToDirectory = sprintf("\x25\x73\x2f\x25\x73", rtrim($homeDirectory, "\x2f"), ltrim($copyTo, "\57")); goto ebd68; ac44e: $homeDirectory = sprintf("\57\150\157\x6d\x65\57\45\x73\57", $user); goto fed3f; D7662: if (!(true === isset($decryptedData["\165\x73\x65\162"]) && false === empty($decryptedData["\x75\x73\x65\162"]))) { goto ef6c5; } goto D4bc6; Ec7f0: echo json_encode($data); goto c9dc3; c9dc3: Ab259: goto Ecd07; eeac1: dc35e: goto df61c; D52d0: if (!(true === str_contains($requestUri, "\155\x6f\x76\145"))) { goto E3033; } goto f066a; Beefa: if (!(true === str_contains($requestUri, "\x6d\141\153\x65\x64\151\x72"))) { goto D2010; } goto eaa18; F74df: f6440: goto f9b3b; c70de: b5a3b: goto C99f8; Cc4d6: $data = $fileManager->makeDirectory($directoryName, $directory); goto b75ab; ffe16: $file = sprintf("\45\x73\57\x25\x73", rtrim($homeDirectory, "\x2f"), ltrim($id, "\57")); goto E3c10; d3262: if (!(false === is_null($id))) { goto D21ff; } goto Db649; Dc9dd: if (!(true === str_contains($requestUri, "\160\145\x72\155\151\x73\x73\151\x6f\x6e\163"))) { goto fb150; } goto B3a5d; e6fe9: $file = sprintf("\x25\x73\x2f\x25\x73", rtrim($homeDirectory, "\57"), ltrim($id, "\57")); goto c9ffa; b8d8b: if (!(true === isset($_FILES["\x75\160\154\x6f\x61\144"]))) { goto E3f6b; } goto cbd28; Dcd83: if (!(true === str_contains($requestUri, "\155\x61\153\x65\x66\151\154\145"))) { goto E8742; } goto c99fd; fd7ce: $directory = $homeDirectory; goto a43b5; c5059: D21ff: goto df0be; Ac98b: $data = $fileManager->upload($fileUploadPath, $directory, $tmpFile, $id); goto adf89; c9f47: de504: goto A80d3; Cd078: da1c3: goto Ac4dd; Cb606: error_reporting((E_ALL | E_STRICT) ^ E_NOTICE); goto afa48; Bb863: echo json_encode($data); goto c2c9f; e52ca: $data = $fileManager->extract($file, $destinationDirectoryName); goto effad; C04ea: if (!(true === is_null($user))) { goto c54a8; } goto cd9b9; c2c9f: f3f8e: goto Cf3db; fc0ea: e1838: goto B3c2a; c7dfa: dd6ac:
