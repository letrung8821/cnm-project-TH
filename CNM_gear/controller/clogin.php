<?php
    include('../model/mlogin.php');
        class cDangnhap
        {
            function checkDn($user,$pass)
            {
                $p= new mLogin();
                $xem = $p->dangnhap($user,$pass);
                return $xem;
            }
        }
?>