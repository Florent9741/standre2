@extends('layouts.app')

<!-- component -->
<html>
    <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    </head>
    <body>
        <div class="flex flex-col justify-center items-center h-[80vh]">
            <div class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] bg-white bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-2 3xl:p-![18px] bg-white undefined">
                 
            <div class="relative flex flex-row justify-center ">
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                    Informatique
                </h4>
            </div>
 
            <div class="h-full w-full mt-5 flex flex-col"> 
            <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                   <a href="https://webmail.ville-saint-andre.fr/owa" >Webmail Mairie</a>
                </button>
               
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                    <a href="https://cloud.vadesecure.com/#/login" >Vadesecure</a>
                    <p class="text-xs text-red-500"> Vérification des spams</p>
                </button>
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                    <a href="https://www.anydesk.com/fr" >Anydesk</a>
                    <p class="text-xs text-red-500"> téléchargement direct</p>
                </button>
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                    <a href="https://www.nperf.com/fr/" >Test de la connexion internet</a>
                </button>
               
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                    <a href="https://sites.google.com/ville-saint-andre.fr/informatique/signature" >Signature Mairie HTML</a>
                </button>
            </div>
            </div>
           
        </div>


        <div class="flex flex-col justify-center items-center h-[80vh]">
            <div class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] bg-white bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-6 3xl:p-![18px] bg-white undefined">
                 
            <div class="relative flex flex-row justify-center ">
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                    Métier
                </h4>
            </div>
 
            <div class="h-full w-full mt-5 flex flex-col"> 
            <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
            <a href="https://parapheur.pratic59.fr/iparapheur/#/dashboard" >e-Parapheur</a>
                </button>
               
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                <a href="https://pastell.pratic59.fr/Connexion/connexion?request_uri=%2F" >Pastel </a>
                <p class="text-xs text-red-500"> nécessite une clé de signature électronique</p>
                </button>
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                <a href="https://www.assistanceciril.net/" >Assistance Ciril</a>
                </button>
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                <a href="https://srv8.dominoweb.fr/" >Domino Web</a>
                </button>

                <div class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                <p> Fluxnet : <a class="underline underline-offset-8" href="http://srv-gipi:8059/fluxnet" > en interne</a> / <a class="underline underline-offset-8" href="https://webmail.ville-saint-andre.fr:8059/fluxnetext/" >En externe</a> </p>
</div>
               
            </div>
            </div>
           
        </div>


        <div class="flex flex-col justify-center items-center h-[80vh]">
            <div class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] bg-white bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-6 3xl:p-![18px] bg-white undefined">
                 
            <div class="relative flex flex-row justify-center ">
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                   Administratif
                </h4>
            </div>
 
            <div class="h-full w-full mt-5 flex flex-col"> 
            <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
            <p class="text-xs text-red-500"> documents non géré par l'informatique</p>
            <a href="https://docs.google.com/spreadsheets/d/1iQVdlwUD4EejLGSvxfjF3amwNVljZCk-2H9K3jDH944/edit?usp=sharing" >Planning d'emprunt de la Zoé 

</a>
                </button>
               
                <button class="rounded-xl border-2 border-red-500 px-5 py-3 text-base mb-3 font-medium text-black-500 transition duration-200 hover:bg-red-600/5 active:bg-red-700/5">
                <a href="https://docs.google.com/spreadsheets/d/1ba2mSefzdrI4eTZOYPR8AENmvoEVEi05d7mLkXSGdOY/edit#gid=0" >Forfait mobilité durable</a>
                </button>
               
               
               
            </div>
            </div>
           
        </div>
    </body>
</html>