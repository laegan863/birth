<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .border-select{
            border-bottom: #BBBCBE solid 4px !important;
        }

        .bg-dark-blue{
            background-color: #395774;
        }

        .bg-light-dark-blue{
            background-color: #527EA7;
        }

        h1.hero-txt{
            font-size: calc(2rem + 1.5vw) !important;
        }

        @media screen and (max-width: 975px) {
            .border-end{
                border-right: none !important;
            }

            .footer-link{
                line-height: .5 !important;
            }
        }

        .arrow-div{
            position: relative;
        }

        .arrow{
            position: absolute;
            right: 20px;
        }

        .text-light-grey{
            color: #7B7D7F;
        }

        .bg-dirty-white{
            background-color: #FAFAFB;
            color: #7B7D7F;
        }

        .bg-darker-dirty-white{
            background-color: #F2F2F2;
            color: #7B7D7F;
        }
        
        .txt-hero{
            font-size: calc( 1rem + 1vw);
            opacity: 1;
            font-weight: normal;
        }

        .bg-hero {
            position: relative;
            background-image: url({{asset('img/bg-hero.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .navbar-nav a{
            padding-top: 2px;
            padding-bottom: 0;
        }
        .navbar-nav a.active{
            padding-top: 0;
            padding-bottom: 0;

            border-top: black solid 2px !important;
        }
        .fs-6{
            font-size: 13px !important;
        }
        .bg-3973b7{
            background-color: #2d5a90 !important;
        }
        .bg-eee{
            background-color: #eee !important;
        }
        .bg-3e628e{
            background-color: #3e628e !important;
        }
        .bg-70ade6{
            background-color: #4d7bb2 !important;
        }
        .text-7dc0ff{
            color: #7dc0ff;
        }
        .bg-light-blue{
            background-image: linear-gradient(180deg, #7dc0ff, #649acc);
        }
        .bg-light-blue1{
            background-image: linear-gradient(180deg, #7dc0ff, #649acc);
        }
        .bg-light-blue:hover{
            color: black !important;
            background: rgb(200,200,200);
            background: linear-gradient(185deg, rgba(200,200,200,1) 44%, rgba(255,255,255,1) 100%, rgba(8,97,131,1) 100%, rgba(0,212,255,1) 100%);
        }
    </style>