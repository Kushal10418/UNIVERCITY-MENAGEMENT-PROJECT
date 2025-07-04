<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>College event</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body{
                font-family: 'Segoe UI', Arial,sans-serif;
                background: #f8f9fa;
            }

            nav{
                background: #283593;
                display: flex;
                justify-content: space-between;
                padding: 16px 32px;
                color: #fff;
                align-items: center;
                box-shadow: 0 2px 8px rgba(40, 53, 147,0.08);
            }
            .logo{
                font-size: 1.6em;
                font-weight: bold;
                letter-spacing: 2px;
            }
            .event-section{
                max-width: 650px;
                min-width: 620px;

                margin: 40px auto;
                padding: 0 16px;
            }
            .event-title{
                font-size: 2em;
                margin-bottom: 40px;
                color: orange;
                text-align: center;
                letter-spacing: 1px;
                font-weight: bold;
                background-color: gray;
                border-radius: 8px;

            }
            .event-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 32px;
                justify-content:space-around;
            }
            .event-card{
                background: greenyellow;
                border-radius: 12px;
                box-shadow: 0 2px 4px rgba(40,53,147,0.8);
                overflow: hidden;
                transition: transform 0.2s,box-shadow 0.2s;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 380px;
            }

            .event-card:hover{
                transform: translateY(-6px) scale(1.02);
                box-shadow: 0 8px 24px rgba(40,53,147,0.14);
            }
            .event-image{
                width: 100%;
                height: 278px;
                object-fit: cover;
                display: block;
            }
            .event-info{
                padding: 18px 16px;
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .event-name{
                font-size: 1.2em;
                color: #283593;
                font-weight: bold;
                margin-top: 4px;
                padding-bottom :30px;

            }
            @media(max-width:600px)
            {
                nav{-ms-flex-direction: column;
                    align-items: flex-start;
                }
                    .event-title{
                        font-size: 1.4rem;
              }

              .event-grid{
                grid-template-columns: 1fr;
              }

              .event-card{
                height: 340px;
              }

              .event-image{
                height: 150px;
              }
                 
            }

        </style>
    </head>
<body>
    <nav>
    <div class="logo">COLLEGE EVENTS</div>
    </nav>
    <section class="event-section">
        <div class="event-title">UPCOMINE COLLEGE EVENTS</div>
        <div class="event-grid">
            <div class="event-card">
<img class="event-image" src="IT/kulpi.jpeg" alt="kulpi" style="height: 468px; width: 468px;">
<div class="event-info">
    <div class="event-name">GIRLS CRICKET TOURNAMENT 2024</div>
</div>
            </div>

            <!--event 2-->
             <div class="event-card">
<img class="event-image" src="IT/kka.jpeg" alt="kul" style="height: 468px; width: 468px;">
<div class="event-info">
    <div class="event-name">CRICKET TOURNAMENT FINAL DAY 2024</div>
</div>
            </div>
            <!--event 3-->
            <div class="event-card">
<img class="event-image" src="IT/hh.jpeg" alt="kulo" style="height: 468px; width: 468px;">
<div class="event-info">
    <div class="event-name">SARASWATI PUJA 2025</div>
</div>
            </div>
            <!--event 4-->
            <div class="event-card">
<img class="event-image" src="IT/bn.jpeg" alt="kuulo" style="height: 468px; width: 468px;">
<div class="event-info">
    <div class="event-name">BASANTA FESTIVAL 2025</div>
</div>
            </div>
            <!--event 5-->
            <div class="event-card">
<img class="event-image" src="IT/KV.jpg" alt="kulo">
<div class="event-info">
    <div class="event-name">VISHWAKARMA PUJA 2025</div>
</div>
            </div>
            <!--event 6-->
            <div class="event-card">
<img class="event-image" src="IT/fa.jpeg" alt="kulo">
<div class="event-info">
    <div class="event-name">STAFF VS STAFF CRICKET TOURNAMENT</div>
</div>
            </div>
<!--event 7-->
 <div class="event-card">
<img class="event-image" src="IT/ch.jpeg" alt="kulo">
<div class="event-info">
    <div class="event-name">BOYS VOLLEYBALL TOURNAMENT 2025</div>
</div>
            </div>
        </div>
        </section>
        </body>
        </html>