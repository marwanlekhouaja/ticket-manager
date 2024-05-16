@extends('layouts.layout')
   <nav style="position: fixed;top:0;margin-bottom:50px;width:100%;background-color:white" class="d-flex p-2 align-items-center justify-content-between">
        <div class="logo">
            <a href="/">
                <img width="120px" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/logo_mobile_retina/public/Logo.jpg?itok=Aa4PVbse" alt=""></a>
            
        </div>
        <div class="d-flex align-items-center justify-content-around">
            <a style="font-family: monospace" class=" me-2 text-dark text-decoration-none" href="https://www.redal.ma/fr/gestion-nos-ressources">gestion de nos ressources</a>
            <a style="font-family: monospace" class="ms-3 text-dark text-decoration-none" href="https://www.redal.ma/fr/raison-detre">raison d'etre</a>
            <form action="" class="ms-4" method="post">
                <select name="language"  class="form-select">
                    <option value="fr">francais</option>
                    <option value="ar">arabe</option>
                    <option value="en">english</option>
                </select>
            </form>
        </div>
        <div>
            <img style="width:250px" src="https://www.redal.ma/sites/g/files/dvc3366/files/opere-pare-veolia.png" alt="">
        </div>
   </nav>    
