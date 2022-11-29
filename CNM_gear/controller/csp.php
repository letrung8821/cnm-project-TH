<?php
include("../model/msp.php");
    class cSP{
        function reSP($cate){
            $p=new mSP();
            $r=$p->xuatSP($cate);
            return $r;		
        }
        function show_prod(){
            $p=new mSP();
            $r=$p->show_SP();
            return $r;		
        }
        function deSP($masp){
            $p=new mSP();
            $r=$p->chitietsp($masp);
            return $r;		
        }
        function reTH(){
            $p=new mSP();
            $r=$p->thuonghieu();
            return $r;		
        }
        function resubcate($id_cate){
            $p=new mSP();
            $r=$p->subcate($id_cate);
            return $r;		
        }
        function rethemsp(){
            $p=new mSP();
            $r=$p->themsp();
            return $r;		
        }
        function recart(){
            $p=new mSP();
            $r=$p->addcart();
            return $r;		
        }
        function rexuatcart($iduser){
            $p=new mSP();
            $r=$p->xuatcart($iduser);
            return $r;		
        }
        function redelcart($idsp){
            $p=new mSP();
            $r=$p->xoaspcart($idsp);
            return $r;		
        }
        function show_hoadon($iduser){
            $p=new mSP();
            $r=$p->payment($iduser);
            return $r;
        }
        function uptrangthai($iduser){
            $p=new mSP();
            $r=$p->update_trangthai($iduser);
            return $r;
        }
        function hangbanchay(){
            $p=new mSP();
            $r=$p->banchayvl();
            return $r;
        }
    }
?>