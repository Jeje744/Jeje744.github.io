<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page Branch Admin Karyawan</title>
    <link rel="stylesheet" href="/css/zoomslider.css">
    <link rel="stylesheet" href="/css/css/bootstrap.min.css">
    <script style="text/javascript" src="/js/modernizr-2.6.2.min.js"></script>
    <script style="text/javascript" src="/js/js/bootstrap.min.js"></script>
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
            min-height: 25em;
            max-width: 100%;
            display: grid;
            place-items: center;
            font-family: "Popins";
        }
           </style>
</head>
<body>
        <div class="col">
            <div id="sliderFoto" class="container"data-zs-src='["{{ ('assets/2.jpg') }}","{{ ('assets/4.jpg') }}","{{ ('assets/5.jpg') }}","{{ ('assets/6.jpg') }}","{{ ('assets/7.jpg') }}"]' data-zs-bullets='false'>
                <div class="container d-flex justify-content-center align-items-center text-white align-content-center">
                    <p style="font-size: 3.5rem;">Employee Power</p>
                </div>
             </div>
        </div>
           
    <div class="justify-content-center flex-wrap text-center justify-content-around" style="display: flex;width:100%;font-family:'Popins';background-image:linear-gradient(rgb(131, 129, 255),white)">
        <div class="card mb-3 mt-5 bg-transparent text-light">
            <div class="card-title pt-2" style="font-weight: bold;font-size:1.6em;">Management Data</div>
            <div class="card-body text-center justify-content-center align-items-center d-flex" style="width: 17rem;height:23rem">
                <div class="card-text text-dark">
                    RESTFUL
                </div>
            </div>
            <div class="card-footer bg-dark text-white">SUPER USER</div>
        </div>
        
        <div class="card mb-3 mt-5 bg-transparent text-light">
            <div class="card-title pt-2" style="font-weight: bold;font-size:1.6em;">API Localhost</div>
            <div class="card-body text-center d-flex justify-content-center align-items-center"style="width: 17rem;height:23rem">
                <div class="card-text text-dark">MOBILE APPS</div>           
            </div>
            <div class="card-footer bg-dark text-white">CROSS PLATFORM</div>
        </div>
    </div>
    
<div class="modal-footer justify-content-center mt-5 bg-dark text-light">
    All Reseved {{ date('Y'); }}
</div>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.zoomslider.min.js"></script>
</body>
</html>