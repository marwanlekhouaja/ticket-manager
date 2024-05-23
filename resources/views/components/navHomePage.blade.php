@extends('layouts.layout')
   <nav style="position: fixed;top:0;margin-bottom:50px;width:100%;background-color:white" class="d-flex p-2 align-items-center justify-content-between">
        <div class="logo">
            <a href="/">
                <img width="100px" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/logo_mobile_retina/public/Logo.jpg?itok=Aa4PVbse" alt=""></a>
            
        </div>
        <div class="d-flex align-items-center justify-content-around">
            <a style="font-family: monospace" class=" me-2 text-dark text-decoration-none" href="https://www.redal.ma/fr/gestion-nos-ressources">{{__("messages.gestion de nos ressources")}}</a>
            <a style="font-family: monospace" class="ms-3 text-dark text-decoration-none" href="https://www.redal.ma/fr/raison-detre">{{__("messages.raison d'etre")}}</a>
            {{-- <form id="language-form" action="{{ route('change_language') }}" class="ms-3" method="post"> --}}
                {{-- @csrf --}}
                {{-- <select name="language" class="form-select" > --}}
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        {{-- <option> --}}
                            <a rel="alternate" hreflang="{{ $localeCode }}" class="text-decoration-none text-dark m-2" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        {{-- </option> --}}
                     @endforeach
                   
                {{-- </select> --}}
            {{-- </form> --}}
        </div>
        <div>
            <img style="width:220px" src="https://www.redal.ma/sites/g/files/dvc3366/files/opere-pare-veolia.png" alt="">
        </div>
   </nav>    
   {{-- @section('scripts')
   <script>
       function changeLanguage(select) {
           document.getElementById('language-form').submit();
       }
   </script> --}}
{{-- @endsection --}}