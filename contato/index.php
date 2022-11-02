<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<script src="js/script.js"></script>
<meta name="description" content="Criação de sites e landing pages, gerenciamento de campanhadas Google Ads e otimização de sites.">
    <title>Criação de sites e landing pages | Marketing Digital | Tags</title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1XVNWW1D1N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1XVNWW1D1N');
</script>
    <style>
        *{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    max-width: 1440px;
    margin: auto;
}

.nav-bar {
    display: flex;
    justify-content: space-between;
    padding: 1.5rem 6rem;
}


.nav-list {
    display: flex;
    align-items: center;
    padding-top: 28px;
    
}

.nav-list ul {
    display: flex;
    justify-content: center;
    list-style: none;
    
}

.nav-item {
    margin: 0 15px;
    
}

.nav-link {
    text-decoration: none;
    font-size: 1.15rem;
    color: rgb(243, 159, 2);
    font-weight: 400;
    
}

a:hover {
    color: rgb(109, 32, 32);
}

.mobile-menu-icon {
    display: none;
}

.mobile-menu {
    display: none;
}

#adwords a{  
    color: rgb(109, 32, 32);
    text-decoration: none;
} 

#seo a{  
    color: rgb(109, 32, 32);
    text-decoration: none;
} 

.russo {
    font-family: 'Russo One', sans-serif;
    font-size: 2rem; 
    color: rgb(109, 32, 32);
    padding-left: 50px;
    
    
}


#mktdigital{
    padding-left: 55px;
    font-family: 'Russo One', sans-serif;
    font-size: .85rem;
    font-weight: bold;
    color: rgb(109, 32, 32);
    
}

#main {
    padding-top: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    height: 565px;
    
}

#main img {
    width: 50%;
}

#maintext {
    
    width: 500px;
}

#maintext h1 {
    color: brown;
    font-weight: bold;
    font-size: 1.8rem;
}

#maintext h2 {
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: bold;
    font-size: 2.7rem;
    width: 380px;
    color: rgb(116, 109, 109);
}

#maintext p {
    font-weight: bold;
    font-size: 1rem;
    width: 380px;
    line-height: 25px;
}

#servicoscontainer {
    padding-top: 90px;
    padding-left: 15px;
    padding-right: 15px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    height: 450px;
    
}



#nossosservicos {
    background-image: url(imagens/curve-light-blue-background-abstract-free-vector.webp);
    height: auto;
    margin-top: 0px;
}

#nossosservicos h2{
    text-align: center;
    padding-top: 50px;
    letter-spacing: 2px;
}



#nossosservicos h3 {
    text-align: center;
    padding-top: 20px;
    margin: auto;
    
}

#nossosservicos p {
    line-height: 25px;
    text-align: center;
    margin: auto;
    width: 300px;
    padding-left: 20px;
    padding-right: 20px;
}

#sitesresponsivos {
    background-color: white;
    height: 320px;
    width: 23%;
    border-radius: 8px;
    box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.562);
    width: auto;
    margin-right: 20px;
}

#copy {
    background-color: white;
    width: 23%;
    height: 320px;
    border-radius: 8px;
    box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.562);
    width: auto;
    margin-right: 20px;
}

#adwords {
    background-color: white;
    width: 23%;
    height: 320px;
    border-radius: 8px;
    box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.562);
    width: auto;
    margin-right: 20px;
}



#seo {
    background-color: white;
    width: 23%;
    height: 320px;
    border-radius: 8px;
    box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.562);
    width: auto;
    margin-right: 20px;
}

#adwordscontainer {
    height: 750px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(rgba(109, 32, 32, 0.9), rgba(109, 32, 32, 0.9)), url(imagens/adsmainimg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    
}

#adwordscontainer h2{
    text-align: center;
    padding-bottom: 40px;
    color: rgb(243, 159, 2);

}



#adwordscontainer h3{
    text-align: center;
    padding-bottom: 25px;
    color: rgb(243, 159, 2);

}

#adwordscontainer p{
    text-align: center;
    line-height: 25px;
    color: white;
   

}

#adwordstexto {
    width: 700px;
}

#seocontainer {
    height: 630px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(rgba(109, 32, 32, 0.9), rgba(109, 32, 32, 0.9)), url(imagens/seomainimg.png);
    background-repeat: no-repeat;
    background-size: cover;
    
}

#seocontainer h2{
    text-align: center;
    padding-bottom: 40px;
    color: rgb(243, 159, 2);

}

#seocontainer h3{
    text-align: center;
    padding-bottom: 25px;
    color: rgb(243, 159, 2);

}

#seocontainer p{
    text-align: center;
    line-height: 25px;
    color: white;
   

}

#seotexto {
    width: 700px;
}

#landingcontainer {
    height: 750px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(rgba(109, 32, 32, 0.9), rgba(109, 32, 32, 0.9)), url(imagens/landingmainimg.png);
    
    
}

#landingcontainer h2{
    text-align: justify;
    padding-bottom: 20px;
    color: rgb(243, 159, 2);
    font-weight: bold;

}

#landingcontainer h3{
    text-align: justify;
    padding-bottom: 25px;
    color: rgb(243, 159, 2);
    

}

#landingcontainer h4{
    text-align: justify;
    color: rgb(243, 159, 2);
    

}

#landingcontainer p{
    text-align: justify;
    line-height: 25px;
    color: white; 
      
}

#landingtexto {
    width: 700px;
    
    
}

#duvidascontainer {
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(rgba(109, 32, 32, 0.9), rgba(109, 32, 32, 0.9)), url(imagens/bluedoubt.jpg);
    
    
}

#duvidascontainer h2{
    text-align: justify;
    padding-top: 50px;
    padding-bottom: 20px;
    color: rgb(243, 159, 2);
    font-weight: bold;

}

#duvidascontainer h3{
    text-align: justify;
    padding-bottom: 25px;
    color: rgb(243, 159, 2);
    

}

#duvidascontainer h4{
    text-align: justify;
    color: rgb(243, 159, 2);
    

}

#duvidascontainer p{
    text-align: justify;
    line-height: 25px;
    color: white; 
      
}

#duvidastexto {
    width: 700px;
    padding-bottom: 50px;
    
    
}


#faleagora {
    position: fixed;
    width: 250px;
    top: 550px;
    left: 1090px;
}

#vantagens {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    height: 500px;
    padding-bottom: 100px;
    padding-top: 70px;
   
}

#vantagens img {
    width: 90px;
    
}

#vantagensh3 {
    text-align: center;
    font-size: 2rem;
    letter-spacing: 3px;
    padding-top: 100px;
   

}



#parcelamento {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 500px;
}

#parcelamento p{
    padding-top: 10px;
    padding-left: 15px;
    text-align: justify;
    line-height: 25px;
}

.pbold {
    font-weight: bold;
    font-size: 1.3rem;
    
}

#dominiogratis {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 500px;
}

#dominiogratis p{
    padding-top: 10px;
    padding-left: 15px;
    text-align: justify;
    line-height: 25px;
}

#consultagratis {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 450px;
    background-image: url(imagens/curve-light-blue-background-abstract-free-vector.webp);
    
}

#consultagratis h2{
    padding-left: 50px;
    width: 90%;
    text-align: center;
    color: rgb(116, 109, 109);
    font-size: 2rem;
}

#consultagratis h3{
    padding-left: 50px;
    width: 90%;
    text-align: center;
    color: rgb(151, 144, 144);
    font-size: 1.2rem;
}

#consultagratis img{
    height: 450px;
    width: auto;
    margin-bottom: 0px;
}

footer {
    
    display: flex;
    flex-direction: column;
        
}

#cttserv {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding-top: 30px;
    height: 180px;
    background-color: rgb(54, 54, 150);
    width: 100%;
    font-size: 1rem;
    color: white;
    line-height: 30px;
}


#cttserv img {
    width: 30px;
    height: auto;
}

#contato {
    display: flex;
    flex-direction: column;
}

#cttzap {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

#social {
    display: flex;
    flex-direction: column;
}

#servicos {
    display: flex;
    flex-direction: column;
}

#copyright {
    width: 100%;
    
}

#copyright p{
    text-align: center;
    background-color: rgb(101, 101, 199);
    color: white;
    height: 30px;
    padding-top: 5px;
    font-size: 1rem;

}

.form-group {
    padding: 10px;
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid black;
}

.control-label  {
    margin-left: 15px;
}

#txtnome {
    margin-top: 2px;
    margin-bottom: 10px;
    width: 250px;
    margin-left: 15px;
    padding: 8px;
}

#txtemail {
    margin-top: 2px;
    margin-bottom: 10px;
    width: 250px;
    margin-left: 15px;
    padding: 8px;
}

#txttel {
    margin-top: 2px;
    margin-bottom: 10px;
    width: 250px;
    margin-left: 15px;
    padding: 8px;
}

#select {
    margin-top: 2px;
    margin-bottom: 10px;
    width: 250px;
    margin-left: 15px;
    padding: 8px;
}

#comment {
    margin-top: 10px;
    height: 100px;
    width: 250px;
    padding: 5px;
    margin-left: 15px;
}

.btn {
    border: none;
    background-color: brown;
    color: white;
    padding: 8px;
    margin-top: 5px;
    border-radius: 3px;
    
}

#cttmail h2{
    padding-bottom: 20px;
    text-align: center;
}

@media (max-width:730px){
    .nav-bar {
        padding: 1.5rem 4rem;
    }
    .nav-item {
        display: none;
    }
    .login-button {
        display: none;
    }
    .mobile-menu-icon {
        display: block;
    }
    .mobile-menu-icon button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding-top: 15px;
    }
    .mobile-menu ul {
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-bottom: 1rem;
    }
    .mobile-menu .nav-item {
        display: block;
        padding-top: 1.2rem;
    }
    
    .open {
        display: block;
    }

    .russo {
        padding-left: 0px;
    }

    #mktdigital {
        padding-left: 5px;
    }

    #main {
        padding-right: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 450px;
        
    }
    
    #main img {
        display: none;
    }
    
    #maintext {
        width: 440px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-left: 50px;
    }
    
    #maintext h1 {
        font-size: 1.9rem;
    }
    
    #maintext h2 {
        padding-bottom: 10px;
        font-size: 1.8rem;
        width: 380px;
        text-align: center;
    }

    #maintext p {
        text-align: center;
    }


    #servicoscontainer {
        padding-top: 0px;
        padding-left: 15px;
        padding-right: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 1500px;
        
        
    }
    
    #nossosservicos {
        background-image: url(imagens/curve-light-blue-background-abstract-free-vector.webp);
        height: auto;
    }
    
    #nossosservicos h2{
        text-align: center;
        padding-top: 50px;
        letter-spacing: 2px;
        padding-bottom: 30px;
        
    }
     
    
    #sitesresponsivos h3 {
        padding-top: 35px;
    }

    #sitesresponsivos p {
    width: 450px;
    padding-top: 20px;
        
    }
    
    #copy h3{
        padding-top: 35px; 
        
    }

    #copy p {
        width: 450px;
        padding-top: 20px;
    }
    
    #adwords h3 {
        padding-top: 35px;
    }

    #adwords p {
        width: 450px;
        padding-top: 20px;
    }
    
    
    
    #seo {
        height: 320px;
        width: auto;
        margin-right: 20px;
    }


    #seo h3 {
        padding-top: 35px;
    }

    #seo p {
        width: 450px;
        padding-top: 20px;
    }
      
    #sitesresponsivos {
        margin-bottom: 15px;
        margin: auto;
    }

    #adwordscontainer {
        height: auto;
        width: 100%;
    }
    
    #adwordscontainer h2{
        font-size: 1.6rem;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #adwordscontainer h3{
        font-size: 1rem;
    }
    
    #adwordscontainer p{
        text-align: justify;
        line-height: 25px;
        color: white;
    }
    
    #adwordstexto {
        width: 550px;
        padding-bottom: 20px;
    }

    #landingcontainer {
        height: auto;
        width: 100%;
    }
    
    #landingcontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #landingcontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #landingcontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #landingtexto {
        width: 550px;
        padding-bottom: 20px;
    }

    #seocontainer {
        height: auto;
        width: 100%;
    }
    
    #seocontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #seocontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #seocontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #seotexto {
        width: 550px;
        padding-bottom: 20px;
    }

    #duvidascontainer {
        height: auto;
        width: 100%;
    }
    
    #duvidascontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #duvidascontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #duvidascontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #duvidastexto {
        width: 550px;
        padding-bottom: 20px;
    }
    
    #copy {
        margin-bottom: 15px;
        margin: auto;
    }
    
    #adwords {
        margin-bottom: 15px;
        margin: auto;
    }

    #adwords a{  
        color: rgb(109, 32, 32);
        text-decoration: none;
    } 
    
    #seo {
        
        margin: auto;
    }

    #seo a{
        color: rgb(109, 32, 32);
        text-decoration: none;
    }

    
    #vantagens {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 500px;
        padding-bottom: 100px;
        padding-top: 70px;
       
    }
    
    #vantagens img {
        width: 70px;
       
        
    }
    
    #vantagensh3 {
        text-align: center;
        font-size: 1.5rem;
        padding-top: 100px;
              
    
    }

    #parcelamento {
        width: 350px;
        margin: auto;
        margin-bottom: 30px;
    }
       
    .pbold {
        font-weight: bold;
        font-size: 1.3rem;
        
    }
    
    #dominiogratis {
        width: 350px;
        margin: 0 auto;
    }

    #parcelamento p {
        width: 430px;
    }

    #dominiogratis p {
        width: 430px;
    }
    
    #faleagora {
        position: fixed;
        width: 200px;
        top: 580px;
        left: 500px;
    }

    #consultagratis {
        flex-direction: column;
        width: 100%;
              
    }

    #consultagratis img{
        display: none;
    }
    
    #contato {
        display: none;
    }
    
}

@media (max-width:585px){
    .nav-bar {
        padding: 1.5rem 4rem;
    }
    .nav-item {
        display: none;
    }
    .login-button {
        display: none;
    }
    .mobile-menu-icon {
        display: block;
    }
    .mobile-menu-icon button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding-top: 15px;
    }
    .mobile-menu ul {
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-bottom: 1rem;
    }
    .mobile-menu .nav-item {
        display: block;
        padding-top: 1.2rem;
    }
    
    .open {
        display: block;
    }

    .russo {
        padding-left: 0px;
    }

    #mktdigital {
        padding-left: 5px;
    }

    #main {
        padding-right: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 450px;
        
    }
    
    #main img {
        display: none;
    }
    
    #maintext {
        width: 440px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-left: 50px;
    }
    
    #maintext h1 {
        font-size: 1.9rem;
    }
    
    #maintext h2 {
        padding-bottom: 10px;
        font-size: 2.2rem;
        width: 380px;
        text-align: center;
    }

       #maintext p {
        text-align: center;
        font-size: 1.2rem;
    }


    #servicoscontainer {
        padding-top: 0px;
        padding-left: 15px;
        padding-right: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 1500px;
        
        
    }
    
    #nossosservicos {
        background-image: url(imagens/curve-light-blue-background-abstract-free-vector.webp);
        height: auto;
    }
    
    #nossosservicos h2{
        text-align: center;
        padding-top: 50px;
        letter-spacing: 2px;
        padding-bottom: 30px;
        
    }
     
      
    #sitesresponsivos {
        margin-bottom: 15px;
        margin: auto;
    }

    #sitesresponsivos h3 {
        padding-top: 35px;
    }

    #sitesresponsivos p {
    width: 450px;
    padding-top: 20px;
        
    }
    
    #copy h3{
        padding-top: 35px; 
        
    }

    #copy p {
        width: 450px;
        padding-top: 20px;
    }
    
    #adwords h3 {
        padding-top: 35px;
    }

    #adwords p {
        width: 450px;
        padding-top: 20px;
    }
    
    
    
    #seo {
        height: 320px;
        width: auto;
        margin-right: 20px;
    }


    #seo h3 {
        padding-top: 35px;
    }

    #seo p {
        width: 450px;
        padding-top: 20px;
    }

    #adwordscontainer {
        height: auto;
        width: 100%;
    }
    
    #adwordscontainer h2{
        font-size: 1.6rem;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #adwordscontainer h3{
        font-size: 1rem;
    }
    
    #adwordscontainer p{
        text-align: justify;
        line-height: 25px;
        color: white;
    }
    
    #adwordstexto {
        width: 400px;
        padding-bottom: 20px;
    }

    #landingcontainer {
        height: auto;
        width: 100%;
    }
    
    #landingcontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #landingcontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #landingcontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #landingtexto {
        width: 480px;
        padding-bottom: 20px;
    }

    #seocontainer {
        height: auto;
        width: 100%;
    }
    
    #seocontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #seocontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #seocontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #seotexto {
        width: 480px;
        padding-bottom: 20px;
    }

    #duvidascontainer {
        height: auto;
        width: 100%;
    }
    
    #duvidascontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #duvidascontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #duvidascontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #duvidastexto {
        width: 480px;
        padding-bottom: 20px;
    }
    
    #copy {
        margin-bottom: 15px;
        margin: auto;
    }
    
    #adwords {
        margin-bottom: 15px;
        margin: auto;
    }

    #adwords a{  
        color: rgb(109, 32, 32);
        text-decoration: none;
    } 
    
    #seo {
        
        margin: auto;
    }

    #seo a{
        color: rgb(109, 32, 32);
        text-decoration: none;
    }

    
    #vantagens {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 500px;
        padding-bottom: 100px;
        padding-top: 70px;
       
    }
    
    #vantagens img {
        width: 70px;
       
        
    }
    
    #vantagensh3 {
        text-align: center;
        font-size: 1.5rem;
        padding-top: 100px;
              
    
    }

    #parcelamento {
        width: 350px;
        margin: auto;
        margin-bottom: 30px;
    }

    #parcelamento p {
        width: 400px;
    }

    #dominiogratis p {
        width: 400px;
    }
       
    .pbold {
        font-weight: bold;
        font-size: 1.3rem;
        
    }
    
    #dominiogratis {
        width: 350px;
        margin: 0 auto;
    }
    
    #faleagora {
        position: fixed;
        width: 200px;
        top: 750px;
        left: 250px;
    }

    #consultagratis {
        flex-direction: column;
        width: 100%;
              
    }

    #consultagratis img{
        display: none;
    }
    
    #contato {
        display: none;
    }
}

@media screen and (max-width: 416px) {
    .nav-bar {
        padding: 1.5rem 4rem;
    }
    .nav-item {
        display: none;
    }
    .login-button {
        display: none;
    }
    .mobile-menu-icon {
        display: block;
    }
    .mobile-menu-icon button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding-top: 15px;
    }
    .mobile-menu ul {
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-bottom: 1rem;
    }
    .mobile-menu .nav-item {
        display: block;
        padding-top: 1.2rem;
    }
    
    .open {
        display: block;
    }

    .russo {
        padding-left: 0px;
    }

    #mktdigital {
        padding-left: 5px;
    }

    #main {
        padding-right: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 450px;
        
    }
    
    #main img {
        display: none;
    }
    
    #maintext {
        width: 440px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-left: 50px;
    }
    
    #maintext h1 {
        font-size: 1.9rem;
    }
    
    #maintext h2 {
        padding-bottom: 10px;
        font-size: 1.8rem;
        width: 380px;
        text-align: center;
    }

    #maintext p {
        text-align: center;
    }

    #servicoscontainer {
        padding-top: 0px;
        padding-left: 15px;
        padding-right: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 1500px;
        
        
    }
    
    #nossosservicos {
        background-image: url(imagens/curve-light-blue-background-abstract-free-vector.webp);
        height: auto;
    }
    
    #nossosservicos h2{
        text-align: center;
        padding-top: 50px;
        letter-spacing: 2px;
        padding-bottom: 30px;
        
    }
     
      
    #sitesresponsivos {
        margin-bottom: 15px;
        margin: auto;
    }
    
    #copy {
        margin-bottom: 15px;
        margin: auto;
    }
    
    #adwords {
        margin-bottom: 15px;
        margin: auto;
    }
    
    #seo {
        
        margin: auto;
    }

    #sitesresponsivos h3 {
        padding-top: 35px;
    }

    #sitesresponsivos p {
    width: 370px;
    padding-top: 20px;
        
    }
    
    #copy h3{
        padding-top: 35px; 
        
    }

    #copy p {
        width: 370px;
        padding-top: 20px;
    }
    
    #adwords h3 {
        padding-top: 35px;
    }

    #adwords p {
        width: 370px;
        padding-top: 20px;
    }
    
        
    #seo h3 {
        padding-top: 35px;
    }

    #seo p {
        width: 370px;
        padding-top: 20px;
    }


    #adwordscontainer {
        height: auto;
        width: 100%;
    }
    
    #adwordscontainer h2{
        font-size: 1.6rem;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #adwordscontainer h3{
        font-size: 1rem;
    }
    
    #adwordscontainer p{
        text-align: justify;
        line-height: 25px;
        color: white;
    }
    
    #adwordstexto {
        width: 350px;
        padding-bottom: 20px;
    }

    #landingcontainer {
        height: auto;
        width: 100%;
    }
    
    #landingcontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #landingcontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #landingcontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #landingtexto {
        width: 350px;
        padding-bottom: 20px;
    }

    #seocontainer {
        height: auto;
        width: 100%;
    }
    
    #seocontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #seocontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #seocontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #seotexto {
        width: 350px;
        padding-bottom: 20px;
    }

    #duvidascontainer {
        height: auto;
        width: 100%;
    }
    
    #duvidascontainer h2{
        font-size: 1.6rem;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
    }
        
    
    #duvidascontainer h3{
        font-size: 1rem;
        text-align: center;
    }
    
    #duvidascontainer p{
        text-align: center;
        line-height: 25px;
        color: white;
        text-align: justify;
    }
    
    #duvidastexto {
        width: 350px;
        padding-bottom: 20px;
    }

    #vantagens {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 500px;
        padding-bottom: 100px;
        padding-top: 70px;
       
    }
    
    #vantagens img {
        width: 70px;
       
        
    }
    
    #vantagensh3 {
        text-align: center;
        font-size: 1.5rem;
        padding-top: 100px;
              
    
    }

    #parcelamento p {
        width: 280px;
    }

    #dominiogratis p {
        width: 280px;
    }
       
    .pbold {
        font-weight: bold;
        font-size: 1.3rem;
        
    }
    
    #dominiogratis {
        width: 350px;
        margin: 0 auto;
    }
    
    #faleagora {
        position: fixed;
        width: 150px;
        top: 680px;
        left: 245px;
    }

    #consultagratis {
        flex-direction: column;
        width: 100%;
              
    }

    #consultagratis img{
        display: none;
    }
    
    #contato {
        display: none;
    }
   
}

</style>

</head>
<body>

<header>
        <nav class="nav-bar">
            <div class="logo">
                <span><p class="russo">&#10094/&#10095Tags</p><p id="mktdigital">marketing digital</p></span>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="../index.html" class="nav-link">&#10094/&#10095 home</a></li>
                    <li class="nav-item"><a href="../criacaositeslandingpages.html" class="nav-link">&#10094/&#10095 sites e landings</a></li>
                    <li class="nav-item"><a href="../googleads.html" class="nav-link">&#10094/&#10095 google ads</a></li>
                    <li class="nav-item"><a href="../seo.html" class="nav-link">&#10094/&#10095 seo</a></li>
                    <li class="nav-item"><a href="../duvidasfrequentes.html" class="nav-link">&#10094/&#10095 dúvidas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">&#10094/&#10095 contato</a></li>
                    <li class="nav-item"><a href="https://tagsmarketingdigital.com.br/blog/" target="_blank" class="nav-link">&#10094/&#10095 blog</a></li>
                    
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="imagens/menu_white_36dp.png" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
            <li class="nav-item"><a href="../index.html" class="nav-link">&#10094/&#10095 home</a></li>
                    <li class="nav-item"><a href="../criacaositeslandingpages.html" class="nav-link">&#10094/&#10095 sites e landings</a></li>
                    <li class="nav-item"><a href="../googleads.html" class="nav-link">&#10094/&#10095 google ads</a></li>
                    <li class="nav-item"><a href="../seo.html" class="nav-link">&#10094/&#10095 seo</a></li>
                    <li class="nav-item"><a href="../duvidasfrequentes.html" class="nav-link">&#10094/&#10095 dúvidas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">&#10094/&#10095 contato</a></li>
                    <li class="nav-item"><a href="https://tagsmarketingdigital.com.br/blog/" target="_blank" class="nav-link">&#10094/&#10095 blog</a></li>
            </ul>
        </div>
    </header>

    <section id="main">
        <img src="imagens/faleconosco.png" alt="sitesresponsivos">
        <div id="maintext"><h1>Fale Conosco</h1><h2>SERÁ UM PRAZER SABER O QUE VOCÊ PRECISA.</h2><p>Quer saber quanto vai investir no seu novo site, campanha de Google Ads ou otimização do seu site?</p><p>Mande uma mensagem agora mesmo e entraremos em contato o mais rápido possível!</p></div>
    </section>

<!-- FORMULARIO DE CONTATO
================================================== -->

<div>

    <h2 style="text-align: center;">FORMULÁRIO DE CONTATO</h2>
    <form class="form-horizontal" data-toggle="validator" name="ajax_form" id="ajax_form" method="post" autocomplete="off" action="email.php">
		
    

        <div class="form-group">
            <label class="control-label " for="txtnome">Nome:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="txtnome" name="nome" placeholder="Digite seu nome aqui." required>
                            <div class="help-block with-errors"></div>
            </div>
        

        
            <label class="control-label " for="txtemail">E-mail:</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="txtemail" name="email" placeholder="Digite seu e-mail aqui."
                       data-error="Por favor, informe um e-mail correto." required>
                             <div class="help-block with-errors"></div>
            </div>
        


        
            <label class="control-label " for="txttel">Telefone:</label>
            <div class="col-sm-7">
                <input type="tel" class="form-control" id="txttel" name="telefone" placeholder="Digite seu telefone." required>
                <span class="help-block"></span>
            </div>
        

       
                <p class="control-label ">Assunto</p>
                <select class="control-label " name="assunto" required id="select">
                <option value="" selected="selected" disabled="disabled"> -- Escolha uma opção --</option>
                <option value="site">Quero_um_site</option>
                <option value="Google Ads">Google_Ads</option>
                <option value="otimização">Otimização</option>
                <option value="outros">Outros</option>
                </select>
        


        
            <label class="control-label col-sm-2" for="pwd">Observações:</label>
            <div class="col-sm-7">
                <textarea class="form-control" rows="5" id="comment" name="observacoes" placeholder="Digite informações complementares." required></textarea>
            </div>
        


        
            <div class="col-sm-offset-2 ">
                <div data-alerts="alerts" data-titles="{'success': '<em>success!</em>'}" data-ids="myid" data-fade="4000"></div>
                <button type="submit" id="warn-me" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Resetar</button>
            </div>
        </div>
    </form>
</div>
</div>

<!-- ============FINAL DO FORMULARIO DE CONIATO=============== -->




<!-- ============SCRIPTS PARA ENVIO VIA AJAX E MENSAGEM DE SUCESSO AO ENVIAR=============== -->


<script>

    $("#ajax_form").submit(function() {
        $(document).trigger("add-alerts", [
            {
                'message': "Mensagem enviada com sucesso.",
                'priority': 'success'
            }
        ]);
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#ajax_form').submit(function(){
            var dados = jQuery( this ).serialize();

            jQuery.ajax({
                type: "POST",
                data: dados,
                url: "email.php",
                success: function()
                {
                    document.ajax_form.reset();

                }
            });

            return false;
        });
    });
</script>

<a href="https://api.whatsapp.com/send?phone=5511981633456&text=" target="_blank"><img src="imagens/faleagora.png" alt="botão whatsapp" id="faleagora"></a>
    <h3 id="vantagensh3">Por que criar seu site com a gente?</h3>
    <section id="vantagens">
        
        <div id="parcelamento">
            <div><img src="imagens/cartaodecredito.png" alt="seu site em até 12 vezes"></div>
            <div><p class="pbold">Parcelamento em até 12x</p><p >Oferecemos parcelamento no cartão de crédito em até 12 vezes para a execução do projeto do seu site ou landing page. Desta forma não tem mais motivo para a sua empresa não estar na Internet.</p></div>
        </div>

        <div id="dominiogratis">
            <div><img src="imagens/www.png" alt="1 ano de domínio grátis"></div>
            <div><p class="pbold">1 ano de domínio e hospedagem grátis</p><p>Ao fechar o projeto do seu site conosco você ganhará de bônus 1 ano de hospedagem e domínio grátis.</p></div>
        </div>
    </section>
    
    <section id="consultagratis">
        <div id="textoconsulta"><span><h2>Receba uma Análise GRÁTIS do seu Projeto</h2 ></span><br><span><h3>Vamos juntos buscar a melhor estratégia para o seu SITE conquistar os primeiros lugares no Google de forma orgânica e patrocinada.</p></h3></div>
        <div><img src="imagens/consultagratisprojeto.png" alt="analise gratuita do seu site"></div>
    </section>

    
        
    <footer>
        <div id="cttserv">
            <div id="contato"><span>CONTATO</span><div id="cttzap"><img src="imagens/whatsapp.png" alt=""><span>11 98163-3456</span></div></div>
            <div id="servicos"><span>SERVIÇOS</span><span>Criação de Sites</span>
            <span>Google Ads</span>
            <span>Consultoria de SEO</span>
        </div>
            <div id="social"><span>SIGA!</span><a href="https://www.instagram.com/tags_mkt_digital/" target="_blank"><img src="imagens/instagram.png" alt=""></a></div>            </div>
        <span id="copyright"><p>(11) 98163-3456</p>
             <p>contato@tagsmarketingdigital.com.br</p></span>
             
    
</footer>

<script>
    function menuShow() {
        let menuMobile = document.querySelector('.mobile-menu');
        if (menuMobile.classList.contains('open')) {
            menuMobile.classList.remove('open');
            document.querySelector('.icon').src = "imagens/menu_white_36dp.png";
        } else {
            menuMobile.classList.add('open');
            document.querySelector('.icon').src = "imagens/close_white_36dp.png";
        }
    }
</script>
