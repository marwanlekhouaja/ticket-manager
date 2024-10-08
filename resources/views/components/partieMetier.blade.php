@extends('layouts.layout')
<div style="padding-top:70px">
    <div class="video d-flex mt-4 text-center">
        <div style="background-color: cornflowerblue" class="content d-flex flex-column align-items-center justify-content-center w-50">
            <h2 style="font-family:monospace" class="text-light">
                {{__('messages.SMS Facture, recevez vos factures directement sur votre mobile')}}
            </h2>
            <a class="text-white mt-3 text-decoration-none text-start" href="https://www.redal.ma/fr/votre-agence-ligne/client-particulier/vos-services-digitaux/sms-facture">{{__('messages.En savoir plus sur le service SMS Facture click ici')}}</a>
        </div>
        <iframe class="w-50" height="315" src="https://www.youtube.com/embed/xTS7wO3OglI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
    </div>
</div> 
