<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <title>Document</title>
    <style>
	th,tr,td{
		align: center;
	}
        .myTop{
            background-color: #333333;
            color: #ffffff;
        }
        .myTop .storeDetails{
            display: flex;
            width: 80%;
            flex-direction: row;
            justify-content: flex-start;
            padding: 0.5vw;
            align-items: center;
        }
        .myTop .loginMenu{
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            padding: 0.5vw;
            align-items: center;
        }
        .mySlide{
            background-image: url(bg1.jpg);
			background-attachment: fixed;
            background-size: cover;
        }
        .myMenu{
            background-color: #FFFFFF;
        }
        .myMenu .mainMenu{
            display: flex;
            width: 50%;
            flex-direction: row;
            justify-content: space-around;
            padding: 0.5vw;
        }
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        .body {
        font-family: Verdana,sans-serif;
        font-size: 0.9em;
        }

       .header, .footer {
        padding: 10px;
        color: white;
        background-color: #333333;
        }

        .content {
        margin: 5px;
        padding: 10px;
        background-color: #;
        }

        .article {
        margin: 5px;
        padding: 10px;
        background-color: white;
        }

        .menu ul {
        padding: 0;
        }

         .menu ul li {
        display: inline;
        margin: 5px;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }
        

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        a:link{color:red;text-decoration: red;}
        a:visited{color:#121212;text-decoration: red;}
        a:hover{color:#CC00CC;}
        a:active{text-decoration: underline;}
    </style>