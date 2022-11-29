<?php
include("../model/minfo.php");
    class cInfo{
        function reinfo($iduser){
            $p=new mInfo();
            $r=$p->xuatinfo($iduser);
            return $r;		
        }
        function reinfoad($iduser){
            $p=new mInfo();
            $r=$p->xuatinfoad($iduser);
            return $r;		
        }
        function reupinfo($iduser){
            $p=new mInfo();
            $r=$p->updateinfo($iduser);
            return $r;		
        }
        function reupinfoad($iduser){
            $p=new mInfo();
            $r=$p->updateinfoad($iduser);
            return $r;		
        }
    }