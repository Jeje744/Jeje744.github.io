<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page Branch Admin Karyawan</title>
    <link rel="stylesheet" href="/css/zoomslider.css">
    <script style="text/javascript" src="/js/modernizr-2.6.2.min.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
        }
        
        @font-face{
            font-family: 'Popins';
            src: url({{ ('css/Poppins-Light.otf') }});
        }
        @font-face{
            font-family: 'Migrate';
            src: url({{ ('css/Poppins-Black.otf') }});
        }

        #sliderFoto{
        height: 420px;      
        }
        #sliderFoto>h1{
            display: grid;
            place-items: center;
            text-align: center;
            min-width: 29%;
            height: 3rem;
            padding-top: 13rem;
            color: whitesmoke;
            font-size: 3rem;
            font-family: "Popins";
        }
        #integrate{
            display: grid;
            place-items: center;
            text-align: center;
            min-width: 29%;
            font-family: 'Migrate';
            font-size: 2rem;
            padding-top: 1em;
        }
        #nav{
            display: flex;
            flex-direction: row;
            height: 80px;
            align-items: center;
        }
        #nav>a{
            color: black;
            text-decoration: none;
            width: 180px;
            font-family: 'Popins';
            font-size: 1.5rem;
            text-align: center;
            
        }
        
    </style>
</head>
<body>
   <div id="sliderFoto" data-zs-src='["{{ ('assets/2.jpg') }}","{{ ('assets/4.jpg') }}","{{ ('assets/5.jpg') }}","{{ ('assets/6.jpg') }}","{{ ('assets/7.jpg') }}"]' data-zs-bullets='false'>
    <h1>Employee Power</h1>
</div>
<div id="integrate">
    <h1>TOGETHER STRONGER</h1>
    
    <div id="nav">
        <a href="#" id="api">ABOUT</a>
        <a href="#" id="api">API</a>
    </div>
</div>
   


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.zoomslider.min.js"></script>
</body>
</html>