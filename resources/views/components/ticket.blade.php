@extends('layouts.layout')
<div class="d-flex mt-3">
    <img class="w-50" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/crop_freeform/public/image/2023/11/Generic%20content_0.gif?itok=-uxE81VF" alt="">
    <div class="w-50 bg-light p-4 d-flex align-items-center justify-content-center flex-column" >
        <h2 style="font-family: monospace">Espace client</h2>
        <p style="font-family: monospace;font-size:18px">
            Vous souhaitez suivre votre consommation, gérer vos factures,
             ou obtenir de l'aide ? Pour accéder à ces fonctionnalités, il vous suffit de demander un ticket 
             <a href="{{route('ticket.create')}}" class="btn btn-secondary text-decoration-none text-light">ici</a>           
        </p>
        
    </div>
</div>