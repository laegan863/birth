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
            background-image: url('img/bg-hero.jpg');
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
    </style>
