<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');
        
        .fw-5 {font-weight: 500;}
        .fw-7 {font-weight: 700;}
        main {width: 800px;box-sizing: border-box;border-radius: 8px;background: white;box-shadow: 0px 0px 14px #80808047;}
        .card {display: flex;flex-direction: row;width: 100%;}
        .card .card-left {width: 40%;}
        .card .card-left .card-img {width: 100%;height: 310px;position: relative;}
        .card .card-left .card-img::before {content: "";background: url(https://rvs-article-preview-component.netlify.app/images/drawers.jpg);width: 100%;height: 100%;background-repeat: no-repeat;background-size: cover;display: block;border-radius: 8px 0px 0px 8px;}
        .card .card-left .card-img img {width: 100%;}
        .card .card-right {width: 60%;display: flex;flex-direction: column;padding: 40px;box-sizing: border-box;}
        .card .card-right .card-title {font-size: 20px;color: hsl(214, 17%, 51%);}
        .card .card-right .card-text {font-size: 14px;color: hsl(212, 23%, 69%);margin-top: 20px;}
        .card .card-right .card-right-body {display: flex;margin-top: 26px;}
        .card .card-right .card-right-body .card-rb-1 {flex-grow: 1;}
        .card .card-right .card-right-body .card-rb-1 img {width: 45px;border-radius: 50%;}
        .card .card-right .card-right-body .card-rb-2 {flex-grow: 7;display: flex;flex-direction: column;justify-content: center;row-gap: 3px;}
        .card .card-right .card-right-body .card-rb-2 .card-rb-2-title {color: hsl(214, 17%, 51%);}
        .card .card-right .card-right-body .card-rb-2 .card-rb-2-text {color: hsl(212, 23%, 69%);}
        .card .card-right .card-right-body .card-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share.svg) hsl(210, 46%, 95%);
            width: 35px;
            height: 35px;
            
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            border-radius: 50%;
            cursor: pointer;
        }
        .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner:hover {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share-white.svg) hsl(217, 19%, 35%);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }
        .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner-before {
            position: absolute;
            width: 275px;
            height: 55px;
            background: hsl(217, 19%, 35%);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            color: white;
            box-sizing: border-box;
            align-items: center;
            top: -80px;
            left: -110px;
            opacity: 0;
            justify-content: center;
            padding: 0px 20px;
            z-index: 2;
        }
        .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner-before::after {
            content: "";
            position: absolute;
            top: 40px;
            left: 50%;
            width: 40px;
            height: 40px;
            background: hsl(217, 19%, 35%);
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: -1;
        }
        .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner:hover + .card-rb-3-inner-before {
            opacity: 1;
        }
        .before-1 {flex-grow: 2;letter-spacing: 7px;color: hsl(212, 23%, 69%);display: flex;justify-content: center;}
        .before-2 {flex-grow: 1;}
        .before-3 {flex-grow: 1;}
        .before-4 {flex-grow: 1;}
        @media screen and (max-width: 850px) {
            body {
                height: 100%;
                margin: 70px auto;
            }
            main {
                width: 86%;
            }
            .card {
                flex-direction: column;
            }
            .card .card-left {
                width: 100%;
            }
            .card .card-right {
                width: 100%;
                padding: 40px 25px 20px;
            }
            .card .card-left .card-img {
                height: 210px;
            }
            .card .card-left .card-img::before {
                border-radius: 8px 8px 0px 0px;
            }
            .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner-before {
                top: -3px;
                left: -235px;
                width: 230px;
            }
            .card .card-right .card-right-body .card-rb-3 .card-rb-3-inner-before::after {
                content: unset;
            }
        }
        
</style>
<body>
@include('layouts.navbar')

 <center>

        <h2>
        Meet our team
       </h2>
       <center> <b class="italic" style="font-family : serif;font-size:20px;color:black">Les projets sont les promesses de l'imagination faites au coeur.
</b></center> <br>
  <main>
    
                    </div>
              
              
                    @foreach($tab as $pro)
                   
                    <div class="card-text fw-5" style="margin-right:470px"></div><br>
                    
                    <div class="card-text fw-5" style="margin-right:100px;margin-left:100px;font-family : serif ;font-size:30px">{{$pro['intitule']}}</div><br><br>
                    
                    <br>
                    <div class="card-text fw-5" style="margin-right:100px;margin-left:100px;font-family : serif ;font-size:20px">{{$pro['description']}}</div><br><br>
                    
                    <br>
                    @foreach($pro['images'] as $img)
              <img src="{{asset('images_projet/'.$img)}}" alt="" height="200px" width="200px">
                     @endforeach
             
                     <div class="card-text fw-5" style="margin-right:100px;margin-left:100px;font-family : serif ;font-size:15px">{{$pro['date_debut']}}</div><br><br>
                    
                    <br>
                    <div class="card-text fw-5" style="margin-right:100px;margin-left:100px;font-family : serif ;font-size:15px">{{$pro['date_fin']}}</div><br><br>
                    
                    <br>
            
            <div class="card-right-body"></div><hr>
            
       
       
        
        @endforeach 
    </main>
</center>
<br>
@extends('layouts.footer')
</body>
