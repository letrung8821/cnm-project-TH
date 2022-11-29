<?php
include("../model/mbl.php");
    class cBL{
        function idBL($tieude){
            $p=new mBL();
            $r=$p->xuatBL($tieude);
            return $r;		
        }
        function show_prodBL(){
            $p=new mBL();
            $r=$p->show_BL();
            return $r;		
        }
        function show_prodBLe(){
            $p=new mBL();
            $r=$p->show_BLe();
            return $r;		
        }
        function deBL($blog){
            $p=new mBL();
            $r=$p->chitietbl($blog);
            return $r;		
        }
        function reBL($chuyenmuc){
            $p=new mBL();
            $r=$p->chuyenmuc($chuyenmuc);
            return $r;		
        }
        function resubblog($id_admin){
            $p=new mBL();
            $r=$p->idadmin($id_admin);
            return $r;		
        }
        function rethembl(){
            $p=new mBL();
            $r=$p->thembl();
            return $r;		
        }
    }
?>