@extends('layouts.layout')
<footer style="background-color: #eee" class="p-2">
    <h3 style="font-family: monospace" class="text-center mt-3">{{__("messages.Suivez-nous sur les réseaux sociaux")}}</h3>
    <div class="socialMedia d-flex justify-content-center mb-2">
        <a href="https://www.facebook.com/RedalOfficiel/" class="text-dark text-decoration-none m-2 d-flex align-items-center"><i class="bi fs-3 bi-facebook me-2"></i><span>Facebook</span></a>
        <a href="https://twitter.com/RedalOfficiel" class="text-dark text-decoration-none m-2 d-flex align-items-center"><i class="bi fs-3 bi-twitter-x me-2"></i><span>Twitter</span></a>
        <a href="https://www.linkedin.com/company/redalofficiel"  class="text-dark text-decoration-none m-2 d-flex align-items-center"> <i class="bi fs-3 bi-linkedin me-2"></i><span>Linkedin</span></a>
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <a href="https://www.redal.ma/fr/contactez-nous-0" style="font-family: monospace" class="text-dark text-decoration-none">{{__("messages.Contactez-nous")}}</a>
            <a href="https://www.redal.ma/fr/actualites" style="font-family: monospace" class="text-dark ms-3 text-decoration-none">{{__("messages.Actualité")}}</a>
        </div>
        <div class="d-flex align-items-center">
            <img width="80" src="https://www.redal.ma/sites/g/files/dvc3366/files/logo30%20%281%29.png" alt="">
            <h6 class="mt-1 ms-3">© 2024 Veolia</h6>
        </div>
    </div>
</footer>