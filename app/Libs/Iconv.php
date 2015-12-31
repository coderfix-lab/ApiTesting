<?php
namespace  App\Libs;

class Iconv {
    function phpmake_ico() {
        return true;
    }
    function GDtoICOstr(&$gd_ico_array) {
        foreach ($gd_ico_array as $key => $gd_image) {
            $IcoWidths[$key]  = ImageSX($gd_image);
            $IcoHeights[$key] = ImageSY($gd_image);
            $bpp[$key]          = ImageIsTrueColor($gd_image) ? 32 : 24;
            $totalcolors[$key]  = ImageColorsTotal($gd_image);
            $icXOR[$key] = '';
            for ($y = $IcoHeights[$key] - 1; $y >= 0; $y--) {
                for ($x = 0; $x < $IcoWidths[$key]; $x++) {
                    $argb = $this->gpc($gd_image, $x, $y);
                    $a = round(255 * ((127 - $argb['alpha']) / 127));
                    $r = $argb['red'];
                    $g = $argb['green'];
                    $b = $argb['blue'];
                    if ($bpp[$key] == 32) {
                        $icXOR[$key] .= chr($b).chr($g).chr($r).chr($a);
                    } elseif ($bpp[$key] == 24) {
                        $icXOR[$key] .= chr($b).chr($g).chr($r);
                    }
                    if ($a < 128) {
                        @$icANDmask[$key][$y] .= '1';
                    } else {
                        @$icANDmask[$key][$y] .= '0';
                    }
                }
                while (strlen($icANDmask[$key][$y]) % 32) {
                    $icANDmask[$key][$y] .= '0';
                }
            }
            $icAND[$key] = '';
            foreach ($icANDmask[$key] as $y => $scanlinemaskbits) {
                for ($i = 0; $i < strlen($scanlinemaskbits); $i += 8) {
                    $icAND[$key] .= chr(bindec(str_pad(substr($scanlinemaskbits, $i, 8), 8, '0', STR_PAD_LEFT)));
                }
            }
        }
        foreach ($gd_ico_array as $key => $gd_image) {
            $biSizeImage = $IcoWidths[$key] * $IcoHeights[$key] * ($bpp[$key] / 8);
            $bfh[$key]  = '';
            $bfh[$key] .= "\x28\x00\x00\x00";
            $bfh[$key] .= $this->le2s($IcoWidths[$key], 4);
            $bfh[$key] .= $this->le2s($IcoHeights[$key] * 2, 4);
            $bfh[$key] .= "\x01\x00";
            $bfh[$key] .= chr($bpp[$key])."\x00";
            $bfh[$key] .= "\x00\x00\x00\x00";
            $bfh[$key] .= $this->le2s($biSizeImage, 4);
            $bfh[$key] .= "\x00\x00\x00\x00";
            $bfh[$key] .= "\x00\x00\x00\x00";
            $bfh[$key] .= "\x00\x00\x00\x00";
            $bfh[$key] .= "\x00\x00\x00\x00";
        }
        $icondata  = "\x00\x00";
        $icondata .= "\x01\x00";
        $icondata .= $this->le2s(count($gd_ico_array), 2);
        $dwImageOffset = 6 + (count($gd_ico_array) * 16);
        foreach ($gd_ico_array as $key => $gd_image) {
            $icondata .= chr($IcoWidths[$key]);
            $icondata .= chr($IcoHeights[$key]);
            $icondata .= chr($totalcolors[$key]);
            $icondata .= "\x00";
            $icondata .= "\x01\x00";
            $icondata .= chr($bpp[$key])."\x00";
            $dwBytesInRes = 40 + strlen($icXOR[$key]) + strlen($icAND[$key]);
            $icondata .= $this->le2s($dwBytesInRes, 4);
            $icondata .= $this->le2s($dwImageOffset, 4);
            $dwImageOffset += strlen($bfh[$key]);
            $dwImageOffset += strlen($icXOR[$key]);
            $dwImageOffset += strlen($icAND[$key]);
        }
        foreach ($gd_ico_array as $key => $gd_image) {
            $icondata .= $bfh[$key];
            $icondata .= $icXOR[$key];
            $icondata .= $icAND[$key];
        }
        return $icondata;
    }
    function le2s($number, $minbytes=1) {
        $intstring = '';
        while ($number > 0) {
            $intstring = $intstring.chr($number & 255);
            $number >>= 8;
        }
        return str_pad($intstring, $minbytes, "\x00", STR_PAD_RIGHT);
    }
    function gpc(&$img, $x, $y) {
        if (!is_resource($img)) {
            return false;
        }
        return @ImageColorsForIndex($img, @ImageColorAt($img, $x, $y));
    }
}
?>
