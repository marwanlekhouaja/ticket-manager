@extends('layouts.layout')
<div class="d-flex">
    <div style="background-color: cornflowerblue" class="content d-flex flex-column align-items-center justify-content-center p-2 w-50">
        <h2 style="font-family: monospace" class="text-white">
            {{__("messages.Vous trouverez toutes les informations dont vous avez besoin, sans vous déplacer grâce à notre agence en ligne")}}
        </h2>
        <a class="text-white" href="https://www.redal.ma/fr/votre-agence-ligne/client-particulier/vos-services-distance/e-facture">
            {{__("messages.Cliquez ici pour souscrire à la E-facture")}}
        </a>
    </div>
    <iframe class="w-50" height="350" src="https://www.youtube.com/embed/VUOij3JGg0o" frameborder="0" allowfullscreen></iframe>
</div>