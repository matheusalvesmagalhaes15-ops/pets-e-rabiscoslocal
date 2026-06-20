<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pet & Rabiscos - Produtos de qualidade para seu pet em um ambiente acolhedor e confiável">
    <title>Pet & Rabiscos | Tudo Para Seu Pet</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos adicionais específicos */
        .price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #4A7B9D;
            margin: 10px 0;
        }
        
        .cart-icon-clickable {
            cursor: pointer;
            transition: transform 0.2s;
        }
        
        .cart-icon-clickable:hover {
            transform: scale(1.1);
        }
        
        /* Marcas */
        .brands {
            padding: 40px 0;
            background: var(--white);
        }
        .brands-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            text-align: center;
        }
        .brand-card {
            background: var(--blue-ultralight);
            padding: 20px 10px;
            border-radius: 12px;
            font-weight: 600;
            color: var(--blue-primary);
            transition: all 0.2s;
        }
        .brand-card:hover {
            transform: translateY(-4px);
            background: var(--blue-pastel);
        }

        /* Abas de Pets */
        .pet-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        .tab-btn {
            background: var(--gray-border);
            border: none;
            padding: 12px 32px;
            border-radius: 40px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 1rem;
        }
        .tab-btn.active {
            background: var(--blue-primary);
            color: white;
        }
        .pet-products {
            display: none;
        }
        .pet-products.active-products {
            display: grid;
        }
        .card-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #F4B942;
            color: #2C3E50;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: bold;
            z-index: 1;
        }
        .card {
            position: relative;
        }
        .rating {
            color: #F4B942;
            font-size: 0.8rem;
            margin: 8px 0;
        }
        .rating span {
            color: var(--gray-text);
        }
        @media (max-width: 992px) {
            .brands-grid { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 768px) {
            .brands-grid { grid-template-columns: repeat(2, 1fr); }
        }
    </style>

<style>
:root{
    --cyan-primary:#00cfe8;
    --cyan-secondary:#7eeeff;
    --cyan-dark:#009bb0;
    --white:#ffffff;
    --bg:#eefcff;
    --text:#12343b;
}

body{
    background:
        radial-gradient(circle at top left, rgba(126,238,255,0.26), transparent 34rem),
        linear-gradient(180deg,#f7feff,#e9fbff 46%,#f8fffb);
    color:var(--text);
    font-family:'Inter',sans-serif;
}

.header,.footer{
    background:rgba(255,255,255,0.95);
    backdrop-filter:blur(12px);
    border-bottom:1px solid rgba(0,207,232,0.2);
}

.header{
    box-shadow:0 18px 45px rgba(0,155,176,0.08);
}

.nav ul{
    background:rgba(255,255,255,0.78);
    border:1px solid rgba(0,207,232,0.18);
    border-radius:999px;
    box-shadow:0 10px 28px rgba(0,155,176,0.08);
    gap:6px;
    padding:6px;
}

.nav button{
    appearance:none;
    background:transparent;
    border:0;
    border-radius:999px;
    color:var(--text);
    cursor:pointer;
    font:inherit;
    font-weight:700;
    padding:10px 18px;
    transition:background .25s ease,color .25s ease,transform .2s ease,box-shadow .25s ease;
}

.nav button:hover{
    background:#e7fbff;
    color:var(--cyan-dark);
    transform:translateY(-1px);
}

.nav button.nav-active{
    background:linear-gradient(135deg,var(--cyan-primary),var(--cyan-dark));
    box-shadow:0 10px 22px rgba(0,155,176,0.22);
    color:white !important;
}

.site-page{
    display:none;
    animation:pageFade .38s ease both;
}

.site-page.active-page{
    display:block;
}

.products.site-page,
.gifts.site-page,
.brands.site-page,
.features.site-page,
.testimonials.site-page,
.help.site-page{
    padding:46px 0;
}

.page-intro{
    background:linear-gradient(135deg,rgba(223,251,255,.95),rgba(255,255,255,.95));
    border:1px solid rgba(0,207,232,.16);
    border-radius:24px;
    box-shadow:0 14px 34px rgba(0,155,176,.08);
    margin-bottom:28px;
    padding:28px;
}

.page-kicker{
    color:var(--cyan-dark);
    font-size:.78rem;
    font-weight:800;
    letter-spacing:.08em;
    text-transform:uppercase;
}

.page-intro h2{
    color:var(--cyan-dark);
    font-size:clamp(1.75rem,3vw,2.7rem);
    line-height:1.08;
    margin:8px 0 10px;
}

.page-intro p{
    color:#3e6068;
    max-width:760px;
}

.home-shortcuts{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(190px,1fr));
    gap:16px;
    margin-top:24px;
}

.shortcut-card{
    background:rgba(255,255,255,.78);
    border:1px solid rgba(0,207,232,.18);
    border-radius:20px;
    box-shadow:0 12px 28px rgba(0,155,176,.08);
    color:var(--text);
    cursor:pointer;
    font:inherit;
    padding:18px;
    text-align:left;
    transition:transform .24s ease,box-shadow .24s ease,border-color .24s ease;
}

.shortcut-card:hover{
    border-color:rgba(0,207,232,.38);
    box-shadow:0 16px 36px rgba(0,155,176,.14);
    transform:translateY(-4px);
}

.shortcut-icon{
    display:block;
    font-size:1.75rem;
    margin-bottom:8px;
}

.shortcut-title{
    color:var(--cyan-dark);
    display:block;
    font-weight:800;
    margin-bottom:4px;
}

.shortcut-card small{
    color:#4f6a70;
}

.kit-tools,
.brand-tools{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:16px;
    margin-bottom:20px;
}

.kit-pill,
.brand-pill{
    background:#e7fbff;
    border:1px solid rgba(0,207,232,.22);
    border-radius:999px;
    color:var(--cyan-dark);
    font-weight:800;
    padding:10px 14px;
}

.brand-card{
    min-height:104px;
}

.brand-card strong{
    display:block;
    margin-bottom:6px;
}

.brand-card small{
    color:#4f6a70;
    display:block;
    font-weight:500;
}

.contact-form{
    display:grid;
    gap:12px;
    margin-top:18px;
}

.contact-form input,
.contact-form textarea{
    border:1px solid rgba(0,207,232,.28);
    border-radius:14px;
    font:inherit;
    padding:12px 14px;
    resize:vertical;
}

.contact-form textarea{
    min-height:104px;
}

@keyframes pageFade{
    from{
        opacity:0;
        transform:translateY(12px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.logo-box,
.btn-primary,
.tab-btn.active,
.btn-newsletter{
    background:linear-gradient(135deg,var(--cyan-primary),var(--cyan-dark));
    color:white !important;
    border:none;
}

.hero{
    background:linear-gradient(135deg,#dffbff,#ffffff 58%,#eefdf5);
    padding:52px 0 42px;
}

.hero-grid,
.help-box,
.card,
.gift-card,
.feature,
.testimonial,
.brand-card{
    background:white;
    border:1px solid rgba(0,207,232,0.15);
    border-radius:22px;
    box-shadow:0 10px 30px rgba(0,180,220,0.08);
}

.hero-grid{
    border-radius:28px;
    overflow:hidden;
}

.hero-text{
    padding:8px 0 8px 8px;
}

.hero-text h1{
    font-size:clamp(2.25rem,5vw,4.35rem);
    line-height:1;
}

.hero-text p{
    color:#3e6068;
    font-size:1.08rem;
    max-width:560px;
}

.card:hover,
.gift-card:hover,
.feature:hover,
.testimonial:hover,
.brand-card:hover{
    transform:translateY(-6px);
    transition:0.3s ease;
    box-shadow:0 16px 40px rgba(0,180,220,0.16);
}

.card,
.gift-card,
.feature,
.testimonial,
.brand-card,
.product-manager,
.storefront,
.help-box{
    animation:cardRise .45s ease both;
}

@keyframes cardRise{
    from{
        opacity:0;
        transform:translateY(16px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.section-title,
h1,h2,h3,h4{
    color:var(--cyan-dark);
}

.price{
    color:var(--cyan-primary)!important;
}

.nav a:hover,
.nav-active{
    color:var(--cyan-primary)!important;
}

.nav button.nav-active{
    color:white !important;
}

.placeholder-img,
.card-image,
.gift-image,
.help-image,
.hero-image{
    overflow:hidden;
    border-radius:18px;
    min-height:220px;
    background:#dff8ff;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:0;
}

.real-image{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}



.status-bar{
    background:linear-gradient(90deg,var(--cyan-primary),var(--cyan-dark));
    color:white;
    padding:12px;
    border-radius:14px;
    margin-top:10px;
}

.btn-outline{
    border:2px solid var(--cyan-primary);
    color:var(--cyan-dark);
}

.btn-outline:hover{
    background:var(--cyan-primary);
    color:white;
}

.btn,
.tab-btn,
.btn-newsletter,
.nav button{
    position:relative;
    overflow:hidden;
}

.btn:active,
.tab-btn:active,
.btn-newsletter:active,
.nav button:active,
.icon:active{
    transform:translateY(1px) scale(.97);
}

.btn.is-pressing,
.tab-btn.is-pressing,
.btn-newsletter.is-pressing,
.nav button.is-pressing{
    box-shadow:0 0 0 8px rgba(0,207,232,0.14),0 14px 28px rgba(0,155,176,0.16);
}

.button-feedback{
    animation:buttonPop .34s ease;
}

@keyframes buttonPop{
    0%{transform:scale(1);}
    45%{transform:scale(.96);}
    100%{transform:scale(1);}
}

.toast-feedback{
    position:fixed;
    right:22px;
    bottom:22px;
    z-index:300;
    background:linear-gradient(135deg,var(--cyan-primary),var(--cyan-dark));
    color:white;
    border-radius:16px;
    box-shadow:0 16px 38px rgba(0,155,176,0.25);
    font-weight:800;
    opacity:0;
    padding:14px 18px;
    pointer-events:none;
    transform:translateY(12px);
    transition:opacity .25s ease,transform .25s ease;
}

.toast-feedback.show{
    opacity:1;
    transform:translateY(0);
}

.icon-button{
    align-items:center;
    background:rgba(255,255,255,.82);
    border:1px solid rgba(0,207,232,.2);
    border-radius:16px;
    box-shadow:0 10px 24px rgba(0,155,176,.08);
    cursor:pointer;
    display:inline-flex;
    height:44px;
    justify-content:center;
    position:relative;
    transition:transform .22s ease,box-shadow .22s ease,background .22s ease;
    width:44px;
}

.icon-button:hover{
    background:#e7fbff;
    box-shadow:0 14px 30px rgba(0,155,176,.15);
    transform:translateY(-2px);
}

.action-icon{
    height:25px;
    object-fit:contain;
    width:25px;
}

.cart-count{
    align-items:center;
    background:#ffcf5d;
    border:2px solid white;
    border-radius:999px;
    color:#20333a;
    display:flex;
    font-size:.68rem;
    font-weight:900;
    height:20px;
    justify-content:center;
    min-width:20px;
    position:absolute;
    right:-6px;
    top:-7px;
}

.overlay-backdrop{
    background:rgba(13,48,56,.38);
    inset:0;
    opacity:0;
    pointer-events:none;
    position:fixed;
    transition:opacity .24s ease;
    z-index:390;
}

.overlay-backdrop.show{
    opacity:1;
    pointer-events:auto;
}

.floating-panel{
    background:rgba(255,255,255,.98);
    border:1px solid rgba(0,207,232,.22);
    border-radius:24px;
    box-shadow:0 24px 70px rgba(0,79,94,.22);
    max-height:calc(100vh - 130px);
    opacity:0;
    overflow:auto;
    padding:22px;
    pointer-events:none;
    position:fixed;
    right:24px;
    top:104px;
    transform:translateY(-10px) scale(.98);
    transition:opacity .24s ease,transform .24s ease;
    width:min(440px,calc(100vw - 32px));
    z-index:400;
}

.floating-panel.show{
    opacity:1;
    pointer-events:auto;
    transform:translateY(0) scale(1);
}

.panel-header{
    align-items:flex-start;
    display:flex;
    gap:14px;
    justify-content:space-between;
    margin-bottom:16px;
}

.panel-header h3{
    margin:0 0 4px;
}

.panel-header p{
    color:#4f6a70;
    font-size:.92rem;
}

.panel-close{
    background:#e7fbff;
    border:0;
    border-radius:12px;
    color:var(--cyan-dark);
    cursor:pointer;
    font-weight:900;
    height:34px;
    width:34px;
}

.search-box{
    align-items:center;
    background:#f8feff;
    border:1px solid rgba(0,207,232,.28);
    border-radius:16px;
    display:flex;
    gap:10px;
    padding:10px 12px;
}

.search-box img{
    height:22px;
    width:22px;
}

.search-box input{
    background:transparent;
    border:0;
    flex:1;
    font:inherit;
    outline:0;
}

.result-list,
.cart-list,
.session-list{
    display:grid;
    gap:10px;
    margin-top:16px;
}

.result-item,
.cart-item,
.session-item{
    align-items:center;
    background:#f8feff;
    border:1px solid rgba(0,207,232,.18);
    border-radius:16px;
    display:grid;
    gap:10px;
    grid-template-columns:auto 1fr auto;
    padding:12px;
}

.result-emoji{
    align-items:center;
    background:#e7fbff;
    border-radius:12px;
    display:flex;
    font-size:1.25rem;
    height:42px;
    justify-content:center;
    width:42px;
}

.result-emoji img{
    height:28px;
    width:28px;
}

.result-item strong,
.cart-item strong,
.session-item strong{
    display:block;
}

.result-item small,
.cart-item small,
.session-item small{
    color:#587178;
}

.cart-thumb{
    border-radius:12px;
    height:48px;
    object-fit:cover;
    width:48px;
}

.cart-total{
    align-items:center;
    border-top:1px solid rgba(0,207,232,.18);
    display:flex;
    justify-content:space-between;
    margin-top:16px;
    padding-top:16px;
}

.session-form{
    display:grid;
    gap:10px;
    grid-template-columns:1fr auto;
    margin-top:16px;
}

.session-form input{
    border:1px solid rgba(0,207,232,.28);
    border-radius:14px;
    font:inherit;
    padding:11px 12px;
}

.empty-panel{
    background:#f8feff;
    border:2px dashed rgba(0,207,232,.25);
    border-radius:16px;
    color:#587178;
    margin-top:16px;
    padding:18px;
    text-align:center;
}

.feature-icon,
.avatar{
    font-size:2rem;
    background:#dffbff;
    width:70px;
    height:70px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    margin:auto;
}

input,button{
    border-radius:14px;
}

.marketplace-panel{
    display:grid;
    grid-template-columns:minmax(280px,360px) 1fr;
    gap:24px;
    align-items:start;
}

.product-manager,
.storefront{
    background:white;
    border:1px solid rgba(0,207,232,0.15);
    border-radius:22px;
    box-shadow:0 10px 30px rgba(0,180,220,0.08);
    padding:24px;
}

.product-manager h3,
.storefront h3{
    margin-bottom:8px;
}

.product-manager p,
.storefront p{
    color:var(--gray-text);
}

.product-form{
    display:grid;
    gap:14px;
    margin-top:18px;
}

.product-form label{
    display:grid;
    gap:6px;
    font-weight:600;
    color:var(--cyan-dark);
}

.product-form input,
.product-form select{
    width:100%;
    border:1px solid rgba(0,207,232,0.28);
    background:#f8feff;
    padding:12px 14px;
    border-radius:14px;
    font:inherit;
    color:var(--text);
}

.product-form input:focus,
.product-form select:focus{
    outline:2px solid rgba(0,207,232,0.25);
    border-color:var(--cyan-primary);
}

.storefront-header{
    display:flex;
    justify-content:space-between;
    gap:16px;
    align-items:center;
    margin-bottom:18px;
}

.store-count{
    background:#dffbff;
    color:var(--cyan-dark);
    border-radius:999px;
    padding:8px 12px;
    font-weight:700;
    white-space:nowrap;
}

.managed-products-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(210px,1fr));
    gap:20px;
}

.managed-product-card{
    min-height:100%;
}

.managed-product-card .card-image{
    min-height:170px;
}

.managed-product-actions{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    margin-top:14px;
}

.btn-danger{
    background:#fff4f4;
    border:2px solid #ff9f9f;
    color:#b53b3b;
}

.btn-danger:hover{
    background:#ffebeb;
    color:#9c2525;
}

.empty-store{
    border:2px dashed rgba(0,207,232,0.28);
    border-radius:18px;
    padding:30px;
    text-align:center;
    color:var(--gray-text);
    background:#f8feff;
}

@media (max-width: 900px){
    .marketplace-panel{
        grid-template-columns:1fr;
    }

    .nav ul{
        border-radius:22px;
        flex-wrap:wrap;
        justify-content:center;
    }

    .nav button{
        padding:9px 14px;
    }
}

/* Ajuste visual inspirado no layout de referencia */
body{
    background:#ffffff;
}

.header{
    background:#ffffff;
    border-bottom:1px solid #e8f7fa;
    box-shadow:0 10px 28px rgba(10,88,105,.06);
    padding:0;
}

.header .container{
    max-width:none;
    padding:0;
}

.header-inner{
    gap:28px;
    margin:0 auto;
    max-width:1280px;
    padding:18px 34px;
}

.status-bar{
    align-items:center;
    background:linear-gradient(90deg,#02bdd3,#00aeca);
    border-radius:0;
    display:flex;
    font-size:.92rem;
    font-weight:800;
    justify-content:center;
    margin:0;
    min-height:42px;
    padding:10px 24px;
}

.logo-box{
    background:transparent !important;
    border:0;
    border-radius:0;
    color:#08afc5 !important;
    display:grid;
    font-size:1.55rem;
    letter-spacing:0;
    line-height:1;
    padding:0;
    position:relative;
}

.logo-box::after{
    color:#60727b;
    content:"Arte e cuidado para seu pet";
    font-size:.78rem;
    font-weight:700;
    margin-left:62px;
    margin-top:3px;
}

.logo-box::before{
    align-items:center;
    background:#dff9fe;
    border-radius:18px;
    content:"";
    background-image:url("img/icon-paw.svg");
    background-position:center;
    background-repeat:no-repeat;
    background-size:42px 42px;
    display:flex;
    font-size:0;
    height:54px;
    justify-content:center;
    left:-64px;
    position:absolute;
    top:-7px;
    width:54px;
}

.logo{
    margin-left:64px;
}

.nav ul{
    background:transparent;
    border:0;
    box-shadow:none;
    gap:34px;
    padding:0;
}

.nav button{
    border-radius:0;
    color:#28394a;
    font-weight:800;
    padding:12px 2px 17px;
}

.nav button:hover{
    background:transparent;
    color:#06aec5;
}

.nav button.nav-active{
    background:transparent;
    box-shadow:inset 0 -3px 0 #05b7ce;
    color:#05b7ce !important;
}

.user-actions{
    gap:14px;
}

.icon-button{
    background:#eefbfe;
    border:0;
    border-radius:50%;
    box-shadow:none;
    height:52px;
    width:52px;
}

.icon-button:hover{
    background:#dff8fd;
    box-shadow:0 12px 26px rgba(0,174,202,.18);
}

.action-icon{
    height:28px;
    width:28px;
}

.settings-symbol{
    color:#08afc5;
    font-size:1.5rem;
    line-height:1;
}

.ui-icon{
    display:inline-block;
    height:1.15em;
    object-fit:contain;
    vertical-align:-.18em;
    width:1.15em;
}

.ui-icon.large{
    height:1.9rem;
    width:1.9rem;
}

.status-icon{
    height:1.05rem;
    margin-right:6px;
    vertical-align:-.18rem;
    width:1.05rem;
}

.badge-icon{
    height:.95rem;
    margin-right:5px;
    vertical-align:-.16rem;
    width:.95rem;
}

#account-button{
    color:#08afc5;
    font-size:1.45rem;
}

.cart-count{
    background:#04b8cf;
    color:white;
    right:1px;
    top:-8px;
}

.hero{
    background:#ffffff;
    padding:24px 0 28px;
}

.hero .container,
.products .container,
.gifts .container,
.brands .container,
.features .container,
.testimonials .container,
.help .container{
    max-width:1320px;
}

.hero-grid{
    background:linear-gradient(100deg,#f6fdff 0%,#eafaff 46%,#bfeff7 100%);
    border:0;
    border-radius:16px;
    box-shadow:none;
    display:grid;
    grid-template-columns:minmax(0,1.08fr) minmax(360px,.92fr);
    min-height:420px;
    overflow:hidden;
    padding:0;
}

.hero-text{
    align-items:center;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding:54px 40px;
    text-align:center;
}

.hero-text h1{
    color:#079eb4;
    font-size:clamp(3rem,5.6vw,4.9rem);
    font-weight:900;
    letter-spacing:0;
    margin-bottom:20px;
}

.hero-text p{
    color:#536575;
    font-size:1.34rem;
    line-height:1.55;
    margin-bottom:28px;
    max-width:560px;
}

.hero-text .btn-primary{
    border-radius:999px;
    box-shadow:0 16px 28px rgba(0,174,202,.2);
    font-size:1.08rem;
    padding:17px 36px;
}

.hero-image{
    background:transparent;
    border:0;
    border-radius:0;
    min-height:420px;
}

.hero-image .real-image{
    height:100%;
    object-fit:cover;
    object-position:center;
}

.home-shortcuts{
    display:none;
}

.page-intro{
    background:transparent;
    border:0;
    box-shadow:none;
    margin-bottom:18px;
    padding:0;
    text-align:center;
}

.page-kicker{
    display:none;
}

.page-intro h2,
.section-title{
    color:#05aeca;
    font-size:2rem;
    font-weight:900;
    letter-spacing:0;
}

.page-intro p{
    margin:8px auto 0;
}

.pet-tabs{
    background:#f5fcfe;
    border:1px solid #cfeff5;
    border-radius:14px;
    gap:0;
    margin:18px auto 32px;
    max-width:430px;
    overflow:hidden;
    padding:0;
}

.tab-btn{
    background:transparent;
    border-radius:0;
    color:#536575;
    flex:1;
    padding:14px 28px;
}

.tab-btn.active{
    background:linear-gradient(135deg,#03c0d4,#04a9c3);
    box-shadow:0 10px 18px rgba(0,174,202,.18);
}

.products-grid,
.gifts-grid{
    gap:22px;
}

.card,
.gift-card{
    border:1px solid #e5eef2;
    border-radius:16px;
    box-shadow:0 12px 28px rgba(24,63,75,.07);
    padding:18px;
}

.card:hover,
.gift-card:hover{
    box-shadow:0 18px 36px rgba(0,174,202,.14);
    transform:translateY(-5px);
}

.card-image,
.gift-image{
    background:#ffffff;
    border:0;
    border-radius:14px;
    min-height:210px;
}

.card h3,
.gift-card h3{
    color:#29394a;
    font-size:1.08rem;
    margin-top:12px;
}

.card p,
.gift-card p{
    color:#647783;
}

.rating{
    color:#ffbd28;
    font-size:.98rem;
}

.price{
    color:#06aec5 !important;
    font-size:1.32rem;
}

.card .btn-outline,
.gift-card .btn-outline{
    align-items:center;
    border-color:#8edbe8;
    border-radius:12px;
    display:flex;
    justify-content:center;
    min-height:44px;
    padding:10px 18px;
    width:100%;
}

.card .btn-outline:hover,
.gift-card .btn-outline:hover{
    background:#05b7ce;
}

.card-badge{
    background:#05b7ce;
    color:white;
    font-size:.8rem;
    left:0;
    top:0;
}

.product-manager,
.storefront,
.help-box,
.feature,
.testimonial,
.brand-card{
    border:1px solid #e5eef2;
    border-radius:16px;
    box-shadow:0 12px 28px rgba(24,63,75,.07);
}

.floating-panel{
    border-radius:18px;
}

body.dark-mode{
    background:#101a20;
    color:#effcff;
}

body.dark-mode .header,
body.dark-mode .footer,
body.dark-mode .floating-panel,
body.dark-mode .hero,
body.dark-mode .products.site-page,
body.dark-mode .gifts.site-page,
body.dark-mode .brands.site-page,
body.dark-mode .features.site-page,
body.dark-mode .testimonials.site-page,
body.dark-mode .help.site-page{
    background:#101a20;
}

body.dark-mode .header{
    border-bottom-color:#20343d;
    box-shadow:0 10px 28px rgba(0,0,0,.28);
}

body.dark-mode .hero-grid,
body.dark-mode .card,
body.dark-mode .gift-card,
body.dark-mode .feature,
body.dark-mode .testimonial,
body.dark-mode .brand-card,
body.dark-mode .product-manager,
body.dark-mode .storefront,
body.dark-mode .help-box,
body.dark-mode .result-item,
body.dark-mode .cart-item,
body.dark-mode .session-item,
body.dark-mode .search-box,
body.dark-mode .empty-panel,
body.dark-mode .shortcut-card{
    background:#17252d;
    border-color:#29424c;
    box-shadow:0 14px 32px rgba(0,0,0,.22);
}

body.dark-mode .hero-grid{
    background:linear-gradient(100deg,#132129 0%,#182c35 48%,#123f4a 100%);
}

body.dark-mode .nav button,
body.dark-mode .hero-text p,
body.dark-mode .page-intro p,
body.dark-mode .card p,
body.dark-mode .gift-card p,
body.dark-mode .brand-card small,
body.dark-mode .result-item small,
body.dark-mode .cart-item small,
body.dark-mode .session-item small,
body.dark-mode .help-text,
body.dark-mode .help-text a{
    color:#d9eef3;
}

body.dark-mode h1,
body.dark-mode h2,
body.dark-mode h3,
body.dark-mode h4,
body.dark-mode .card h3,
body.dark-mode .gift-card h3,
body.dark-mode .logo-box,
body.dark-mode .section-title{
    color:#79efff !important;
}

body.dark-mode .icon-button{
    background:#1f343d;
}

body.dark-mode .action-icon{
    filter:brightness(0) invert(1);
}

body.dark-mode #account-button,
body.dark-mode #settings-button{
    background:#2a4651;
    border:1px solid rgba(126,238,255,.28);
}

body.dark-mode #account-button .action-icon,
body.dark-mode #settings-button .action-icon{
    filter:none;
    opacity:1;
}

body.dark-mode #account-button,
body.dark-mode .settings-symbol{
    color:white;
}

body.dark-mode input,
body.dark-mode select,
body.dark-mode textarea,
body.dark-mode .search-box input{
    background:#101a20;
    border-color:#31505b;
    color:#effcff;
}

body.dark-mode .placeholder-img,
body.dark-mode .card-image,
body.dark-mode .gift-image,
body.dark-mode .help-image,
body.dark-mode .hero-image{
    background:#17252d;
}

.settings-list{
    display:grid;
    gap:12px;
    margin-top:16px;
}

.account-form,
.pet-form{
    display:grid;
    gap:12px;
    margin-top:16px;
}

.account-form input,
.pet-form input,
.pet-form select{
    border:1px solid rgba(0,207,232,.28);
    border-radius:14px;
    font:inherit;
    padding:12px 14px;
}

.account-summary{
    background:#f8feff;
    border:1px solid rgba(0,207,232,.18);
    border-radius:16px;
    display:grid;
    gap:10px;
    margin-top:16px;
    padding:14px;
}

.pet-list{
    display:grid;
    gap:10px;
    margin-top:12px;
}

.pet-chip{
    align-items:center;
    background:#e7fbff;
    border:1px solid rgba(0,207,232,.2);
    border-radius:999px;
    color:#0a6876;
    display:flex;
    font-weight:800;
    gap:8px;
    justify-content:space-between;
    padding:9px 12px;
}

.setting-card{
    background:#f8feff;
    border:1px solid rgba(0,207,232,.18);
    border-radius:16px;
    display:grid;
    gap:10px;
    padding:14px;
}

.setting-card strong{
    color:var(--cyan-dark);
    display:block;
}

.setting-card small{
    color:#587178;
}

.setting-actions{
    display:flex;
    flex-wrap:wrap;
    gap:8px;
}

.setting-toggle{
    align-items:center;
    display:flex;
    gap:10px;
    justify-content:space-between;
}

.switch{
    background:#d7eef3;
    border:0;
    border-radius:999px;
    cursor:pointer;
    height:30px;
    padding:3px;
    transition:background .2s ease;
    width:54px;
}

.switch span{
    background:white;
    border-radius:50%;
    display:block;
    height:24px;
    transition:transform .2s ease;
    width:24px;
}

.switch.active{
    background:#05b7ce;
}

.switch.active span{
    transform:translateX(24px);
}

body.dark-mode .setting-card{
    background:#17252d;
    border-color:#29424c;
}

body.dark-mode .account-summary,
body.dark-mode .pet-chip{
    background:#17252d;
    border-color:#29424c;
    color:#d9eef3;
}

body.dark-mode .setting-card strong{
    color:#79efff;
}

body.dark-mode .setting-card small{
    color:#d9eef3;
}

body.reduced-motion *,
body.reduced-motion *::before,
body.reduced-motion *::after{
    animation:none !important;
    scroll-behavior:auto !important;
    transition:none !important;
}

body.compact-layout .card,
body.compact-layout .gift-card,
body.compact-layout .product-manager,
body.compact-layout .storefront,
body.compact-layout .help-box{
    padding:12px;
}

body.compact-layout .card-image,
body.compact-layout .gift-image{
    min-height:160px;
}

body.high-contrast .btn,
body.high-contrast button,
body.high-contrast input,
body.high-contrast select,
body.high-contrast textarea,
body.high-contrast .card,
body.high-contrast .gift-card,
body.high-contrast .floating-panel{
    outline:2px solid rgba(0,174,202,.45);
    outline-offset:2px;
}

::selection{
    background:#9ff1fb;
    color:#073943;
}

.btn,
.icon-button,
.shortcut-card,
.result-item,
.panel-close{
    -webkit-tap-highlight-color:transparent;
}

.btn:focus-visible,
.icon-button:focus-visible,
.nav button:focus-visible,
input:focus-visible,
select:focus-visible,
textarea:focus-visible,
.panel-close:focus-visible{
    outline:3px solid rgba(0,190,214,.32);
    outline-offset:3px;
}

.header-inner{
    position:relative;
}

.header-inner::after{
    background:linear-gradient(90deg,transparent,rgba(0,190,214,.18),transparent);
    bottom:0;
    content:"";
    height:1px;
    left:34px;
    position:absolute;
    right:34px;
}

.hero-grid{
    position:relative;
}

.hero-grid::before{
    background:linear-gradient(180deg,rgba(255,255,255,.42),transparent);
    content:"";
    inset:0;
    pointer-events:none;
    position:absolute;
    z-index:1;
}

.hero-text,
.hero-image{
    position:relative;
    z-index:2;
}

.hero-text h1{
    text-shadow:0 10px 30px rgba(0,174,202,.12);
}

.real-image{
    transition:transform .45s ease;
}

.card:hover .real-image,
.gift-card:hover .real-image,
.hero-grid:hover .hero-image .real-image{
    transform:scale(1.035);
}

.floating-panel{
    backdrop-filter:blur(16px);
}

.panel-header h3{
    font-size:1.35rem;
}

.account-summary{
    background:linear-gradient(135deg,#eafbff,#ffffff);
    box-shadow:0 12px 28px rgba(0,174,202,.08);
}

.account-summary strong{
    color:#069bb0;
    font-size:1.15rem;
}

.account-form,
.pet-form{
    background:#ffffff;
    border:1px solid rgba(0,207,232,.16);
    border-radius:18px;
    box-shadow:0 10px 24px rgba(0,174,202,.06);
    padding:14px;
}

.pet-chip{
    box-shadow:0 8px 18px rgba(0,174,202,.08);
}

.store-count,
.kit-pill,
.brand-pill{
    box-shadow:inset 0 0 0 1px rgba(255,255,255,.55);
}

.cart-total{
    background:#f8feff;
    border:1px solid rgba(0,207,232,.16);
    border-radius:16px;
    margin-top:16px;
    padding:14px;
}

.session-form{
    background:#ffffff;
    border:1px solid rgba(0,207,232,.16);
    border-radius:18px;
    padding:12px;
}

body.dark-mode .account-form,
body.dark-mode .pet-form,
body.dark-mode .session-form,
body.dark-mode .cart-total{
    background:#17252d;
    border-color:#29424c;
}

body.dark-mode .account-summary{
    background:linear-gradient(135deg,#17252d,#10202a);
}

body.dark-mode .hero-grid::before{
    background:linear-gradient(180deg,rgba(255,255,255,.08),transparent);
}

@media (max-width: 900px){
    .header-inner{
        justify-content:center;
        padding:18px 18px;
    }

    .logo{
        margin-left:0;
    }

    .logo-box::before,
    .logo-box::after{
        display:none;
    }

    .hero-grid{
        grid-template-columns:1fr;
    }

    .hero-image{
        min-height:280px;
    }

    .hero-text{
        padding:38px 22px;
    }
}

@media (max-width: 760px){
    html{
        overflow-x:hidden;
    }

    body{
        overflow-x:hidden;
        -webkit-text-size-adjust:100%;
    }

    .container,
    .hero .container,
    .products .container,
    .gifts .container,
    .brands .container,
    .features .container,
    .testimonials .container,
    .help .container{
        padding-left:14px;
        padding-right:14px;
        width:100%;
    }

    .header{
        position:sticky;
    }

    .header-inner{
        align-items:stretch;
        display:grid;
        gap:14px;
        grid-template-columns:1fr;
        padding:14px;
    }

    .logo{
        justify-self:center;
        margin-left:0;
    }

    .logo-box{
        font-size:1.22rem;
        min-height:44px;
        text-align:center;
    }

    .nav{
        margin:0 -14px;
        overflow-x:auto;
        padding:0 14px 4px;
        scrollbar-width:none;
    }

    .nav::-webkit-scrollbar{
        display:none;
    }

    .nav ul{
        display:grid;
        gap:8px;
        grid-auto-columns:max-content;
        grid-auto-flow:column;
        justify-content:start;
        min-width:max-content;
        width:max-content;
    }

    .nav li{
        display:block;
    }

    .nav button{
        background:#f2fbfd;
        border:1px solid #d7f2f7;
        border-radius:999px;
        min-height:44px;
        padding:10px 16px;
        white-space:nowrap;
    }

    .nav button.nav-active{
        background:#05b7ce;
        box-shadow:none;
        color:#fff !important;
    }

    .user-actions{
        display:grid;
        gap:10px;
        grid-template-columns:repeat(4,minmax(44px,1fr));
        justify-items:center;
        width:100%;
    }

    .icon-button{
        height:46px;
        width:46px;
    }

    .action-icon{
        height:24px;
        width:24px;
    }

    .status-bar{
        align-items:center;
        border-radius:0;
        display:flex;
        flex-wrap:wrap;
        font-size:.76rem;
        gap:4px 8px;
        line-height:1.35;
        min-height:auto;
        padding:9px 14px;
    }

    .hero{
        padding:16px 0 22px;
    }

    .hero-grid{
        border-radius:14px;
        min-height:0;
    }

    .hero-text{
        padding:32px 18px 26px;
    }

    .hero-text h1{
        font-size:2.35rem;
        line-height:1.02;
        margin-bottom:14px;
        overflow-wrap:anywhere;
    }

    .hero-text p{
        font-size:1rem;
        line-height:1.5;
        margin-bottom:20px;
    }

    .hero-text .btn-primary,
    .btn{
        align-items:center;
        display:inline-flex;
        justify-content:center;
        min-height:44px;
        text-align:center;
        white-space:normal;
    }

    .hero-image{
        min-height:220px;
    }

    .products.site-page,
    .gifts.site-page,
    .brands.site-page,
    .features.site-page,
    .testimonials.site-page,
    .help.site-page{
        padding:28px 0;
    }

    .page-intro h2,
    .section-title{
        font-size:1.55rem;
        line-height:1.16;
    }

    .pet-tabs{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        max-width:100%;
        width:100%;
    }

    .tab-btn{
        align-items:center;
        display:flex;
        font-size:.88rem;
        gap:6px;
        justify-content:center;
        min-height:48px;
        padding:10px 8px;
    }

    .products-grid,
    .gifts-grid,
    .features-grid,
    .testimonials-grid,
    .brands-grid,
    .managed-products-grid{
        grid-template-columns:1fr !important;
    }

    .card,
    .gift-card,
    .feature,
    .testimonial,
    .brand-card,
    .product-manager,
    .storefront,
    .help-box{
        border-radius:14px;
        padding:16px;
    }

    .card-image,
    .gift-image,
    .managed-product-card .card-image{
        aspect-ratio:4 / 3;
        min-height:0;
    }

    .kit-tools,
    .brand-tools,
    .storefront-header,
    .cart-total,
    .footer-bottom{
        align-items:stretch;
        flex-direction:column;
        text-align:center;
    }

    .marketplace-panel{
        gap:16px;
    }

    .product-form input,
    .product-form select,
    .account-form input,
    .pet-form input,
    .pet-form select,
    .session-form input,
    .contact-form input,
    .contact-form textarea,
    .newsletter-input,
    .search-box input{
        font-size:16px;
        min-height:44px;
    }

    .session-form,
    .account-form,
    .pet-form{
        grid-template-columns:1fr;
    }

    .managed-product-actions{
        display:grid;
        grid-template-columns:1fr;
    }

    .managed-product-actions .btn,
    .session-item .btn,
    .product-form .btn,
    .contact-form .btn,
    .btn-newsletter{
        width:100%;
    }

    .help-box{
        display:grid;
        gap:18px;
        text-align:left;
    }

    .help-links{
        text-align:left;
    }

    .help-links li{
        align-items:flex-start;
        overflow-wrap:anywhere;
    }

    .help-image{
        min-height:200px;
    }

    .footer-grid{
        gap:22px;
        grid-template-columns:1fr;
        text-align:center;
    }

    .social,
    .payments{
        justify-content:center;
    }

    .floating-panel{
        border-radius:20px 20px 0 0;
        bottom:0;
        left:0;
        max-height:min(86vh,calc(100vh - 72px));
        padding:18px 14px calc(18px + env(safe-area-inset-bottom));
        right:0;
        top:auto;
        transform:translateY(100%);
        width:100%;
    }

    .floating-panel.show{
        transform:translateY(0);
    }

    .panel-header{
        align-items:flex-start;
        gap:10px;
    }

    .panel-header h3{
        font-size:1.08rem;
    }

    .panel-header p{
        font-size:.84rem;
    }

    .panel-close{
        flex:0 0 40px;
        height:40px;
        width:40px;
    }

    .result-item,
    .cart-item,
    .session-item,
    .setting-card{
        align-items:start;
        grid-template-columns:auto minmax(0,1fr) auto;
        overflow-wrap:anywhere;
        padding:11px;
    }

    .session-item{
        grid-template-columns:auto minmax(0,1fr);
    }

    .session-item .managed-product-actions{
        grid-column:1 / -1;
    }

    .setting-toggle{
        align-items:flex-start;
        gap:10px;
    }

    .setting-actions{
        display:grid;
        gap:8px;
        grid-template-columns:repeat(3,1fr);
        width:100%;
    }
}

@media (max-width: 380px){
    .header-inner{
        padding-left:10px;
        padding-right:10px;
    }

    .container,
    .hero .container,
    .products .container,
    .gifts .container,
    .brands .container,
    .features .container,
    .testimonials .container,
    .help .container{
        padding-left:10px;
        padding-right:10px;
    }

    .hero-text h1{
        font-size:2rem;
    }

    .logo-box{
        font-size:1.05rem;
    }

    .tab-btn{
        font-size:.8rem;
        padding-left:4px;
        padding-right:4px;
    }

    .user-actions{
        gap:6px;
    }
}

/* Correcoes responsivas finais */
html,
body{
    max-width:100%;
    overflow-x:hidden;
}

img,
svg,
video{
    max-width:100%;
}

.container,
.header-inner,
.site-page,
.hero-grid,
.page-intro,
.card,
.gift-card,
.feature,
.testimonial,
.brand-card,
.shortcut-card,
.product-manager,
.storefront,
.help-box,
.floating-panel{
    min-width:0;
}

.hero .container,
.products .container,
.gifts .container,
.brands .container,
.features .container,
.testimonials .container,
.help .container{
    max-width:1320px;
    width:100%;
}

.products-grid,
.gifts-grid,
.features-grid,
.testimonials-grid,
.brands-grid,
.managed-products-grid{
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
}

.nav,
.nav ul,
.user-actions{
    min-width:0;
}

.nav ul{
    flex-wrap:wrap;
}

.nav button,
.btn,
.tab-btn,
.btn-newsletter{
    max-width:100%;
    overflow-wrap:anywhere;
}

.hero-text h1,
.hero-text p,
.page-intro h2,
.page-intro p,
.section-title,
.card h3,
.card p,
.gift-card h3,
.gift-card p{
    overflow-wrap:anywhere;
}

@media (max-width: 1100px){
    .header-inner{
        display:grid;
        grid-template-columns:1fr;
        justify-items:center;
        padding:16px 18px;
    }

    .logo{
        margin-left:0;
    }

    .logo-box::before,
    .logo-box::after{
        display:none;
    }

    .nav{
        width:100%;
    }

    .nav ul{
        gap:10px 16px;
        justify-content:center;
        width:100%;
    }

    .nav button{
        padding:10px 8px 13px;
        text-align:center;
    }

    .user-actions{
        justify-content:center;
        width:100%;
    }

    .hero-grid{
        grid-template-columns:1fr;
    }
}

@media (max-width: 760px){
    .container,
    .hero .container,
    .products .container,
    .gifts .container,
    .brands .container,
    .features .container,
    .testimonials .container,
    .help .container{
        padding-left:14px;
        padding-right:14px;
    }

    .header-inner{
        align-items:stretch;
        padding:14px;
    }

    .nav{
        margin:0;
        overflow:visible;
        padding:0;
        width:100%;
    }

    .nav ul{
        display:grid;
        gap:8px;
        grid-auto-flow:row;
        grid-template-columns:repeat(2,minmax(0,1fr));
        justify-content:stretch;
        min-width:0;
        width:100%;
    }

    .nav li{
        min-width:0;
    }

    .nav button{
        border-radius:999px;
        min-height:44px;
        padding:10px 8px;
        white-space:normal;
        width:100%;
    }

    .user-actions{
        grid-template-columns:repeat(4,minmax(0,1fr));
    }

    .hero-text{
        padding:30px 18px 24px;
    }

    .hero-text h1{
        font-size:clamp(2rem,12vw,2.6rem);
    }

    .pet-tabs{
        display:grid;
        grid-template-columns:repeat(3,minmax(0,1fr));
        max-width:100%;
        width:100%;
    }

    .tab-btn{
        padding:10px 6px;
        white-space:normal;
    }

    .products-grid,
    .gifts-grid,
    .features-grid,
    .testimonials-grid,
    .brands-grid,
    .managed-products-grid{
        grid-template-columns:1fr !important;
    }

    .marketplace-panel,
    .session-form,
    .account-form,
    .pet-form{
        grid-template-columns:1fr !important;
    }

    .result-item,
    .cart-item,
    .session-item,
    .setting-card{
        grid-template-columns:auto minmax(0,1fr);
    }

    .result-item button,
    .cart-item button,
    .session-item button,
    .setting-card button{
        grid-column:1 / -1;
        width:100%;
    }
}
</style>

</head>
<body>

    <!-- CABEÇALHO -->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="#inicio" class="logo" data-page-target="inicio">
                    <div class="logo-box"><img class="ui-icon" src="img/icon-paw.svg" alt=""> Pet & Rabiscos</div>
                </a>
                <nav class="nav">
                    <ul>
                        <li><button type="button" class="nav-active" data-page-target="inicio">Início</button></li>
                        <li><button type="button" data-page-target="produtos">Produtos</button></li>
                        <li><button type="button" data-page-target="kits">Kits</button></li>
                        <li><button type="button" data-page-target="marcas">Marcas</button></li>
                        <li><button type="button" data-page-target="contato">Contato</button></li>
                    </ul>
                </nav>
                <div class="user-actions">
                    <button type="button" class="icon-button" title="Ver carrinho" id="verCarrinho">
                        <img class="action-icon" src="img/cart-icon.png" alt="Carrinho">
                        <span class="cart-count" id="cart-count">0</span>
                    </button>
                    <button type="button" class="icon-button" title="Minha conta" id="account-button"><img class="action-icon" src="img/icon-account.svg" alt="Conta"></button>
                    <button type="button" class="icon-button" title="Buscar produtos" id="search-button">
                        <img class="action-icon" src="img/search-icon.png" alt="Buscar">
                    </button>
                    <button type="button" class="icon-button" title="Configurações" id="settings-button">
                        <img class="action-icon" src="img/icon-settings.svg" alt="Configurações">
                    </button>
                </div>
            </div>
            <div class="status-bar">
                <img class="status-icon" src="img/icon-paw.svg" alt="">Frete grátis para compras acima de R$99 | <img class="status-icon" src="img/icon-box.svg" alt="">Entregamos para todo Brasil | <img class="status-icon" src="img/icon-brand.svg" alt="">Pet & Rabiscos - Onde seu pet é parte da família
            </div>
        </div>
    </header>

    <div class="overlay-backdrop" id="overlay-backdrop"></div>

    <aside class="floating-panel" id="search-panel" aria-label="Busca do site">
        <div class="panel-header">
            <div>
                <h3>Buscar na loja</h3>
                <p>Procure por abas, produtos, kits e marcas.</p>
            </div>
            <button type="button" class="panel-close" data-close-panel>×</button>
        </div>
        <div class="search-box">
            <img src="img/search-icon.png" alt="">
            <input type="search" id="site-search-input" placeholder="Digite o que deseja encontrar">
        </div>
        <div class="result-list" id="search-results"></div>
    </aside>

    <aside class="floating-panel" id="cart-panel" aria-label="Carrinho de compras">
        <div class="panel-header">
            <div>
                <h3>Carrinho</h3>
                <p>Produtos adicionados em tempo real.</p>
            </div>
            <button type="button" class="panel-close" data-close-panel>×</button>
        </div>
        <div class="cart-list" id="cart-list"></div>
        <div class="cart-total">
            <strong>Total</strong>
            <strong id="cart-total">R$ 0,00</strong>
        </div>
        <div class="session-form">
            <input type="text" id="session-name" placeholder="Nome da sessão de compra">
            <button type="button" class="btn btn-primary btn-small" id="save-session">Salvar sessão</button>
        </div>
        <div class="session-list" id="cart-sessions"></div>
    </aside>

    <aside class="floating-panel" id="account-panel" aria-label="Conta do usuário">
        <div class="panel-header">
            <div>
                <h3>Minha conta</h3>
                <p>Configure seu perfil e os pets da família.</p>
            </div>
            <button type="button" class="panel-close" data-close-panel>×</button>
        </div>
        <div id="account-content"></div>
    </aside>

    <aside class="floating-panel" id="settings-panel" aria-label="Configurações do site">
        <div class="panel-header">
            <div>
                <h3>Configurações</h3>
                <p>Ajuste a experiência da loja para sua preferência.</p>
            </div>
            <button type="button" class="panel-close" data-close-panel>×</button>
        </div>
        <div class="search-box">
            <img class="action-icon" src="img/icon-settings.svg" alt="Configurações">
            <input type="search" id="settings-search-input" placeholder="Buscar configuração">
        </div>
        <div class="settings-list" id="settings-list"></div>
    </aside>

    <main>
        <!-- HERO / BANNER -->
        <section class="hero site-page active-page" data-page="inicio">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-text">
                        <h1>Pet & Rabiscos</h1>
                        <p id="hero-account-message">Onde o amor pelos pets se encontra com a arte de cuidar. Produtos especiais para seu melhor amigo!</p>
                        <button type="button" class="btn btn-primary" data-page-target="produtos">Conheça nossos produtos →</button>
                    </div>
                    <div class="hero-image placeholder-img">
                        <img class="real-image" src="https://images.unsplash.com/photo-1517849845537-4d257902454a?q=80&w=1200&auto=format&fit=crop" alt="Pet shop">
                        
                    </div>
                </div>
                <div class="home-shortcuts">
                    <button type="button" class="shortcut-card" data-page-target="produtos">
                        <span class="shortcut-icon"><img class="ui-icon large" src="img/cart-icon.png" alt=""></span>
                        <span class="shortcut-title">Produtos</span>
                        <small>Veja a vitrine, cadastre e remova itens.</small>
                    </button>
                    <button type="button" class="shortcut-card" data-page-target="kits">
                        <span class="shortcut-icon"><img class="ui-icon large" src="img/icon-gift.svg" alt=""></span>
                        <span class="shortcut-title">Kits</span>
                        <small>Combos prontos para presentear pets.</small>
                    </button>
                    <button type="button" class="shortcut-card" data-page-target="marcas">
                        <span class="shortcut-icon"><img class="ui-icon large" src="img/icon-brand.svg" alt=""></span>
                        <span class="shortcut-title">Marcas</span>
                        <small>Parceiros e linhas recomendadas.</small>
                    </button>
                    <button type="button" class="shortcut-card" data-page-target="contato">
                        <span class="shortcut-icon"><img class="ui-icon large" src="img/icon-chat.svg" alt=""></span>
                        <span class="shortcut-title">Contato</span>
                        <small>Atendimento, dúvidas e suporte.</small>
                    </button>
                </div>
            </div>
        </section>

        <!-- PRODUTOS POR TIPO DE PET -->
        <section id="produtos" class="products site-page" data-page="produtos">
            <div class="container">
                <div class="page-intro">
                    <span class="page-kicker">Vitrine da loja</span>
                    <h2>Produtos para seu pet</h2>
                    <p>Explore os produtos por tipo de pet ou use a aba Produtos para montar uma vitrine personalizada, no estilo marketplace, com cadastro e remoção em tempo real.</p>
                </div>
                
                <!-- Abas Cães / Gatos -->
                <div class="pet-tabs">
                    <button class="tab-btn active" data-pet="caes"><img class="ui-icon" src="img/icon-dog.svg" alt=""> Cães</button>
                    <button class="tab-btn" data-pet="gatos"><img class="ui-icon" src="img/icon-cat.svg" alt=""> Gatos</button>
                    <button class="tab-btn" data-pet="loja"><img class="ui-icon" src="img/cart-icon.png" alt=""> Produtos</button>
                </div>

                <!-- Produtos para Cães -->
                <div id="produtos-caes" class="products-grid pet-products active-products"></div>

                <!-- Produtos para Gatos -->
                <div id="produtos-gatos" class="products-grid pet-products"></div>
                <!-- Aba marketplace: adicionar e remover produtos -->
                <div id="produtos-loja" class="pet-products">
                    <div class="marketplace-panel">
                        <aside class="product-manager">
                            <h3>Adicionar produto</h3>
                            <p>Cadastre novos itens da loja pet e eles aparecem na vitrine imediatamente.</p>
                            <form
                                id="product-form"
                                class="product-form"
                                action="actions/cadastrarProduto.php"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                <label>
                                    Nome do produto
                                    <input
                                    type="text"
                                    id="product-name"
                                    name="nome"
                                    placeholder="Ex: Coleira ajustavel"
                                    required
                                    >
                                </label>
                                <label>
                                    Tipo de pet
                                    <select id="product-category" name="categoria" required>
                                        <option value="Cachorros">Cachorros</option>
                                        <option value="Gatos">Gatos</option>
                                    </select>
                                </label>
                                <label>
                                    Preco
                                    <input
                                        type="number"
                                        id="product-price"
                                        name="preco"
                                        min="0"
                                        step="0.01"
                                        placeholder="49.90"
                                        required
                                        >
                                </label>
                                <label>
                                    Imagem do produto
                                    <input
                                    type="file"
                                    id="product-image"
                                    name="imagem"
                                    accept="image/jpeg,image/png,image/webp,image/gif"
                                    >
                                </label>
                                <label>
                                Descrição
                                <textarea
                                name="descricao"
                                rows="4"
                                placeholder="Descrição do produto"
                                ></textarea>
                                </label>
                                <button type="submit" class="btn btn-primary">Adicionar produto</button>
                            </form>
                        </aside>

                        <div class="storefront">
                            <div class="storefront-header">
                                <div>
                                    <h3>Vitrine da loja</h3>
                                    <p>Produtos cadastrados para venda, no estilo marketplace pet.</p>
                                </div>
                                <span class="store-count" id="store-count">0 produtos</span>
                            </div>
                            <div id="managed-products" class="managed-products-grid">

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/Database.php';

$produtos = [];
$erroBanco = '';

try {
    $database = new Database();
    $pdo = $database->conectar();

    $stmt = $pdo->query(
        "SELECT * FROM produtos ORDER BY id DESC"
    );

    $produtos = $stmt->fetchAll();
} catch (Throwable $erro) {
    $erroBanco = 'A vitrine cadastrada no banco nao pode ser carregada agora.';
}

function normalizarTextoProduto(string $texto): string
{
    $texto = strtolower($texto);
    $texto = strtr($texto, [
        'á' => 'a', 'à' => 'a', 'â' => 'a', 'ã' => 'a',
        'é' => 'e', 'ê' => 'e',
        'í' => 'i',
        'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ú' => 'u',
        'ç' => 'c',
        'º' => '', '°' => ''
    ]);
    return preg_replace('/[^a-z0-9]+/', ' ', $texto) ?? $texto;
}

function imagemDoProduto(array $produto): string
{
    $imagemAtual = trim((string) ($produto['imagem'] ?? ''));
    return $imagemAtual !== '' ? $imagemAtual : 'img/icon-paw.svg';
}


if ($erroBanco !== ''):

?>

    <p>
        <?= htmlspecialchars($erroBanco) ?>
        O restante do site continua funcionando normalmente.
    </p>

<?php

elseif (count($produtos) === 0):

?>

    <p>
        Nenhum produto cadastrado ainda.
        Use o formulário ao lado para montar sua vitrine.
    </p>

<?php

else:

foreach ($produtos as $produto):

?>

    <article class="card managed-product-card" data-managed-id="<?= htmlspecialchars((string) $produto['id']) ?>">

    <div class="card-badge"><?= htmlspecialchars($produto['categoria']) ?></div>

    <div class="card-image">
        <img
            class="real-image"
            src="<?= htmlspecialchars(imagemDoProduto($produto)) ?>"
            alt="<?= htmlspecialchars($produto['nome']) ?>"
        >
    </div>

    <h3><?= htmlspecialchars($produto['nome']) ?></h3>

    <p class="product-category"><?= htmlspecialchars($produto['categoria']) ?></p>

    <strong class="price">
        R$ <?= number_format((float)$produto['preco'], 2, ',', '.') ?>
    </strong>

    <p class="product-description"><?= htmlspecialchars($produto['descricao']) ?></p>
    
    <button
    type="button"
    class="btn btn-small btn-danger"
    data-remove-product="<?= htmlspecialchars((string) $produto['id']) ?>"
    >
    Remover
</button>

</article>
<?php

endforeach;

endif;

?>

</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KITS PARA PRESENTE -->
        <section id="kits" class="gifts site-page" data-page="kits">
            <div class="container">
                <div class="page-intro">
                    <span class="page-kicker">Combos e presentes</span>
                    <h2><img class="ui-icon" src="img/icon-gift.svg" alt=""> Kits Especiais para Presentear</h2>
                    <p>Uma tela separada só para kits prontos, presentes e combinações especiais para quem ama pets.</p>
                </div>
                <div class="kit-tools">
                    <span class="kit-pill">3 kits disponíveis</span>
                    <button type="button" class="btn btn-outline btn-small">Montar kit personalizado</button>
                </div>
                <div class="gifts-grid">
                    <div class="gift-card">
                        <div class="gift-image placeholder-img">
                            <img class="real-image" src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?q=80&w=1200&auto=format&fit=crop" alt="Kit luxo">
                            
                        </div>
                        <h3>Kit Luxo Pet</h3>
                        <p>Embalagem Premium + Brindes exclusivos</p>
                        <a href="#" class="btn btn-outline btn-small btn-add-kit">Adicionar ao carrinho</a>
                    </div>
                    <div class="gift-card">
                        <div class="gift-image placeholder-img">
                            <img class="real-image" src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?q=80&w=1200&auto=format&fit=crop" alt="Kit carinho">
                            
                        </div>
                        <h3>Pacote Carinhoso</h3>
                        <p>Presenteie com Amor e carinho</p>
                        <a href="#" class="btn btn-outline btn-small btn-add-kit">Adicionar ao carrinho</a>
                    </div>
                    <div class="gift-card">
                        <div class="gift-image placeholder-img">
                            <img class="ui-icon large" src="img/icon-paw.svg" alt="">
                            
                        </div>
                        <h3>Caixa Surpresa</h3>
                        <p>Pronto para Surpreender qualquer pet</p>
                        <a href="#" class="btn btn-outline btn-small btn-add-kit">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- MARCAS PARCEIRAS -->
        <section id="marcas" class="brands site-page" data-page="marcas">
            <div class="container">
                <div class="page-intro">
                    <span class="page-kicker">Parceiros selecionados</span>
                    <h2><img class="ui-icon" src="img/icon-brand.svg" alt=""> Marcas que confiamos</h2>
                    <p>Catálogo de marcas parceiras com foco em qualidade, conforto, higiene e diversão para cães e gatos.</p>
                </div>
                <div class="brand-tools">
                    <span class="brand-pill">Curadoria Pet & Rabiscos</span>
                    <button type="button" class="btn btn-outline btn-small" data-page-target="produtos">Ver produtos das marcas</button>
                </div>
                <div class="brands-grid">
                    <div class="brand-card"><strong><img class="ui-icon" src="img/icon-paw.svg" alt=""> Royal Canin</strong><small>Nutrição premium</small></div>
                    <div class="brand-card"><strong><img class="ui-icon" src="img/icon-dog.svg" alt=""> Pedigree</strong><small>Alimentos para cães</small></div>
                    <div class="brand-card"><strong><img class="ui-icon" src="img/icon-cat.svg" alt=""> Whiskas</strong><small>Linha para gatos</small></div>
                    <div class="brand-card"><strong>🛏️ Petz Bed</strong><small>Camas e conforto</small></div>
                    <div class="brand-card"><strong>🧸 Kong</strong><small>Brinquedos resistentes</small></div>
                    <div class="brand-card"><strong>🧴 Evoque</strong><small>Higiene e cuidado</small></div>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAIS -->
        <section class="features site-page active-page" data-page="inicio">
            <div class="container">
                <h2 class="section-title">🌟 Por que escolher a Pet & Rabiscos?</h2>
                <div class="features-grid">
                    <div class="feature">
                        <div class="feature-icon"><img class="ui-icon large" src="img/icon-dog.svg" alt=""></div>
                        <h3>Atendimento Especializado</h3>
                        <p>Amor e cuidado em cada detalhe</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🚚</div>
                        <h3>Entrega Rápida</h3>
                        <p>Para todo o Brasil</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">⭐</div>
                        <h3>Produtos Premium</h3>
                        <p>Qualidade garantida</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🔒</div>
                        <h3>Compra Segura</h3>
                        <p>Pagamento protegido</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- DEPOIMENTOS -->
        <section class="testimonials site-page" data-page="contato">
            <div class="container">
                <div class="page-intro">
                    <span class="page-kicker">Atendimento e confiança</span>
                    <h2>Contato da Pet & Rabiscos</h2>
                    <p>Fale com a equipe, consulte dúvidas frequentes e veja a experiência de outros clientes.</p>
                </div>
                <h2 class="section-title"><img class="ui-icon" src="img/icon-chat.svg" alt=""> O que nossos clientes dizem</h2>
                <div class="testimonials-grid">
                    <div class="testimonial">
                        <div class="avatar"><img class="ui-icon large" src="img/icon-dog.svg" alt=""></div>
                        <p>"Meu cachorro amou a cama nova! Super confortável e a entrega foi rápida."</p>
                        <div class="stars">★★★★★</div>
                        <h4>— Matheus e Thor</h4>
                    </div>
                    <div class="testimonial">
                        <div class="avatar"><img class="ui-icon large" src="img/icon-cat.svg" alt=""></div>
                        <p>"Os brinquedos são resistentes e meus gatos adoraram! Recomendo demais."</p>
                        <div class="stars">★★★★★</div>
                        <h4>— Gabriel e Luna</h4>
                    </div>
                    <div class="testimonial">
                        <div class="avatar"><img class="ui-icon large" src="img/icon-paw.svg" alt=""></div>
                        <p>"Kit personalizado perfeito para presentear. Amei o carinho da embalagem!"</p>
                        <div class="stars">★★★★★</div>
                        <h4>— Vitória e Billy</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTATO / AJUDA -->
        <section id="contato" class="help site-page" data-page="contato">
            <div class="container">
                <div class="help-box">
                    <div class="help-text">
                        <h3><img class="ui-icon" src="img/icon-phone.svg" alt=""> Precisa de ajuda? Estamos aqui!</h3>
                        <p>Tire suas dúvidas sobre produtos, entregas ou devoluções. Nossa equipe está pronta para te atender com todo carinho.</p>
                        <ul class="help-links">
                            <li><img class="ui-icon" src="img/icon-info.svg" alt=""> <a href="#">FAQ - Perguntas Frequentes</a></li>
                            <li><img class="ui-icon" src="img/icon-phone.svg" alt=""> <a href="#">Central de Atendimento: (11) 99999-9999</a></li>
                            <li><img class="ui-icon" src="img/icon-mail.svg" alt=""> <a href="#">contato@peterabiscos.com.br</a></li>
                            <li><img class="ui-icon" src="img/icon-chat.svg" alt=""> <a href="#">Chat ao vivo (atendimento 9h às 18h)</a></li>
                        </ul>
                        <form class="contact-form">
                            <input type="text" placeholder="Seu nome">
                            <input type="email" placeholder="Seu e-mail">
                            <textarea placeholder="Como podemos ajudar?"></textarea>
                            <button type="button" class="btn btn-primary">Enviar mensagem</button>
                        </form>
                    </div>
                    <div class="help-image placeholder-img">
                        <img class="real-image" src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop" alt="Atendimento">
                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- RODAPÉ -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo-box small-logo"><img class="ui-icon" src="img/icon-paw.svg" alt=""> Pet & Rabiscos</div>
                    <p>Cuidando do seu melhor amigo com arte e ♥</p>
                    <div class="social">
                        <a href="#" title="Instagram">📷</a>
                        <a href="#" title="Facebook"><img class="ui-icon" src="img/icon-info.svg" alt="Facebook"></a>
                        <a href="#" title="WhatsApp"><img class="ui-icon" src="img/icon-chat.svg" alt="WhatsApp"></a>
                        <a href="#" title="Twitter"><img class="ui-icon" src="img/icon-brand.svg" alt="Twitter"></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Institucional</h4>
                    <ul>
                        <li><a href="#">Sobre a Pet & Rabiscos</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Trocas e devoluções</a></li>
                        <li><a href="#">Trabalhe conosco</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Atendimento</h4>
                    <ul>
                        <li><a href="#">Fale conosco</a></li>
                        <li><a href="#">FAQ - Ajuda</a></li>
                        <li><a href="#">Nossas lojas</a></li>
                        <li><a href="#">Entregas e prazos</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><img class="ui-icon" src="img/icon-mail.svg" alt=""> Receba ofertas exclusivas</h4>
                    <p>Promoções e novidades no seu email</p>
                    <input type="email" class="newsletter-input" placeholder="Seu melhor e-mail">
                    <button class="btn-newsletter">Assinar →</button>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 Pet & Rabiscos - Onde seu pet é parte da família | Todos os direitos reservados.</p>
                <div class="payments">
                    <span>💳 Visa</span>
                    <span>💳 Mastercard</span>
                    <span>💳 Pix</span>
                    <span>💳 Boleto</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPT PRINCIPAL -->
    <script>
        (function initPetRabiscos() {
        function startPetRabiscos() {
        try {
            const tabs = document.querySelectorAll('.tab-btn[data-pet]');
            const productPanels = document.querySelectorAll('.pet-products');
            const pageTriggers = document.querySelectorAll('[data-page-target]');
            const navButtons = document.querySelectorAll('.nav [data-page-target]');
            const pages = document.querySelectorAll('.site-page');
            const form = document.getElementById('product-form');
            const grid = document.getElementById('managed-products');
            const dogProductsGrid = document.getElementById('produtos-caes');
            const catProductsGrid = document.getElementById('produtos-gatos');
            const count = document.getElementById('store-count');
            const cartKey = 'petRabiscosCarrinho';
            const sessionsKey = 'petRabiscosSessoesCompra';
            const settingsKey = 'petRabiscosConfiguracoes';
            const accountKey = 'petRabiscosConta';
            const searchButton = document.getElementById('search-button');
            const cartButton = document.getElementById('verCarrinho');
            const accountButton = document.getElementById('account-button');
            const settingsButton = document.getElementById('settings-button');
            const searchPanel = document.getElementById('search-panel');
            const cartPanel = document.getElementById('cart-panel');
            const accountPanel = document.getElementById('account-panel');
            const settingsPanel = document.getElementById('settings-panel');
            const overlay = document.getElementById('overlay-backdrop');
            const searchInput = document.getElementById('site-search-input');
            const searchResults = document.getElementById('search-results');
            const settingsInput = document.getElementById('settings-search-input');
            const settingsList = document.getElementById('settings-list');
            const accountContent = document.getElementById('account-content');
            const heroAccountMessage = document.getElementById('hero-account-message');
            const cartList = document.getElementById('cart-list');
            const cartTotal = document.getElementById('cart-total');
            const cartCount = document.getElementById('cart-count');
            const sessionName = document.getElementById('session-name');
            const saveSessionButton = document.getElementById('save-session');
            const cartSessions = document.getElementById('cart-sessions');
            const toast = document.createElement('div');

            let customProducts = getProductsFromDom();
            let cartItems = safeReadArray(cartKey);
            let purchaseSessions = safeReadArray(sessionsKey);
            let accountData = safeReadObject(accountKey, {
                googleEmail: '',
                profileName: '',
                pets: []
            });
            let siteSettings = safeReadObject(settingsKey, {
                darkMode: false,
                fontScale: 100,
                reducedMotion: false,
                compactLayout: false,
                highContrast: false
            });

            toast.className = 'toast-feedback';
            document.body.appendChild(toast);

            function showToast(message) {
                toast.textContent = message;
                toast.classList.add('show');
                clearTimeout(showToast.timer);
                showToast.timer = setTimeout(function () {
                    toast.classList.remove('show');
                }, 1800);
            }

            function safeReadArray(key) {
                try {
                    const saved = localStorage.getItem(key);
                    const parsed = saved ? JSON.parse(saved) : [];
                    return Array.isArray(parsed) ? parsed : [];
                } catch (error) {
                    return [];
                }
            }

            function safeReadObject(key, fallback) {
                try {
                    const saved = localStorage.getItem(key);
                    const parsed = saved ? JSON.parse(saved) : fallback;
                    return parsed && typeof parsed === 'object' && !Array.isArray(parsed) ? parsed : fallback;
                } catch (error) {
                    return fallback;
                }
            }

            function safeWrite(key, value) {
                try {
                    localStorage.setItem(key, JSON.stringify(value));
                } catch (error) {
                    showToast('Não foi possível salvar nesta sessão');
                }
            }

            function saveSettings() {
                safeWrite(settingsKey, siteSettings);
            }

            function saveAccount() {
                safeWrite(accountKey, accountData);
            }

            function normalizeAccount() {
                if (!Array.isArray(accountData.pets)) accountData.pets = [];
                accountData.googleEmail = accountData.googleEmail || '';
                accountData.profileName = accountData.profileName || '';
            }

            function getPetArticle(pet) {
                return pet && pet.gender === 'femea' ? 'a' : 'o';
            }

            function getPetTypeLabel(gender) {
                return gender === 'femea' ? 'Fêmea' : 'Macho';
            }

            function getHeroPetText() {
                normalizeAccount();

                if (!accountData.pets.length) {
                    return 'Onde o amor pelos pets se encontra com a arte de cuidar. Produtos especiais para seu melhor amigo!';
                }

                if (accountData.pets.length === 1) {
                    const pet = accountData.pets[0];
                    return 'Confira esses produtos para ' + getPetArticle(pet) + ' ' + pet.name + '.';
                }

                const names = accountData.pets.map(function (pet) {
                    return pet.name;
                });
                return 'Confira esses produtos para ' + names.slice(0, -1).join(', ') + ' e ' + names[names.length - 1] + '.';
            }

            function updateHeroAccountMessage() {
                if (heroAccountMessage) heroAccountMessage.textContent = getHeroPetText();
            }

            function renderAccount() {
                if (!accountContent) return;
                normalizeAccount();

                const hasProfile = accountData.googleEmail && accountData.profileName;
                const petList = accountData.pets.length
                    ? '<div class="pet-list">' + accountData.pets.map(function (pet) {
                        return '<div class="pet-chip">' +
                            '<span><img class="ui-icon" src="' + (pet.gender === 'femea' ? 'icon-cat.svg' : 'icon-dog.svg') + '" alt=""> ' + escapeHtml(pet.name) + ' · ' + getPetTypeLabel(pet.gender) + '</span>' +
                            '<button type="button" class="panel-close" data-remove-pet="' + pet.id + '">×</button>' +
                        '</div>';
                    }).join('') + '</div>'
                    : '<div class="empty-panel">Nenhum pet cadastrado ainda.</div>';

                accountContent.innerHTML =
                    '<div class="account-summary">' +
                        '<strong>' + (hasProfile ? 'Olá, ' + escapeHtml(accountData.profileName) : 'Crie seu perfil') + '</strong>' +
                        '<small>' + (accountData.googleEmail ? escapeHtml(accountData.googleEmail) : 'Use um e-mail Google para identificar sua conta neste navegador.') + '</small>' +
                    '</div>' +
                    '<form class="account-form" id="account-form">' +
                        '<input type="email" id="account-google-email" placeholder="Conta Google / Gmail" value="' + escapeHtml(accountData.googleEmail) + '" required>' +
                        '<input type="text" id="account-profile-name" placeholder="Nome do perfil" value="' + escapeHtml(accountData.profileName) + '" required>' +
                        '<button type="submit" class="btn btn-primary">Salvar perfil</button>' +
                    '</form>' +
                    '<form class="pet-form" id="pet-form">' +
                        '<input type="text" id="pet-name" placeholder="Nome do pet" required>' +
                        '<select id="pet-gender" required>' +
                            '<option value="macho">Macho</option>' +
                            '<option value="femea">Fêmea</option>' +
                        '</select>' +
                        '<button type="submit" class="btn btn-outline">Adicionar pet</button>' +
                    '</form>' +
                    petList;

                const accountForm = document.getElementById('account-form');
                const petForm = document.getElementById('pet-form');

                if (accountForm) {
                    accountForm.addEventListener('submit', function (event) {
                        event.preventDefault();
                        accountData.googleEmail = document.getElementById('account-google-email').value.trim();
                        accountData.profileName = document.getElementById('account-profile-name').value.trim();
                        saveAccount();
                        renderAccount();
                        updateHeroAccountMessage();
                        showToast('Perfil salvo');
                    });
                }

                if (petForm) {
                    petForm.addEventListener('submit', function (event) {
                        event.preventDefault();
                        const petName = document.getElementById('pet-name').value.trim();
                        const petGender = document.getElementById('pet-gender').value;
                        if (!petName) return;

                        accountData.pets.push({
                            id: Date.now(),
                            name: petName,
                            gender: petGender
                        });
                        saveAccount();
                        renderAccount();
                        updateHeroAccountMessage();
                        showToast('Pet adicionado');
                    });
                }
            }

            function setPage(pageName) {
                const hasPage = Array.from(pages).some(function (page) {
                    return page.dataset.page === pageName;
                });

                if (!hasPage) pageName = 'inicio';

                pages.forEach(function (page) {
                    page.classList.toggle('active-page', page.dataset.page === pageName);
                });

                navButtons.forEach(function (button) {
                    button.classList.toggle('nav-active', button.dataset.pageTarget === pageName);
                });

                try {
                    if (location.hash !== '#' + pageName) {
                        location.hash = pageName;
                    }
                } catch (error) {}

                try {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                } catch (error) {
                    window.scrollTo(0, 0);
                }
            }

            pageTriggers.forEach(function (button) {
                button.addEventListener('click', function (event) {
                    if (button.tagName === 'A') event.preventDefault();
                    setPage(button.dataset.pageTarget);
                });
            });

            if (searchButton) {
                searchButton.addEventListener('click', function () {
                    openPanel(searchPanel);
                    renderSearchResults();
                    if (searchInput) searchInput.focus();
                });
            }

            if (cartButton) {
                cartButton.addEventListener('click', function () {
                    openPanel(cartPanel);
                    renderCart();
                    renderSessions();
                });
            }

            if (accountButton) {
                accountButton.addEventListener('click', function () {
                    openPanel(accountPanel);
                    renderAccount();
                });
            }

            if (settingsButton) {
                settingsButton.addEventListener('click', function () {
                    openPanel(settingsPanel);
                    renderSettings();
                    if (settingsInput) settingsInput.focus();
                });
            }

            document.querySelectorAll('[data-close-panel]').forEach(function (button) {
                button.addEventListener('click', closePanels);
            });

            if (overlay) overlay.addEventListener('click', closePanels);
            if (searchInput) searchInput.addEventListener('input', renderSearchResults);
            if (settingsInput) settingsInput.addEventListener('input', renderSettings);

            if (searchResults) {
                searchResults.addEventListener('click', function (event) {
                    const result = event.target.closest('[data-search-page]');
                    if (!result) return;

                    setPage(result.dataset.searchPage);
                    closePanels();
                });
            }

            if (settingsList) {
                settingsList.addEventListener('click', function (event) {
                    const toggle = event.target.closest('[data-setting-toggle]');
                    if (toggle) {
                        const key = toggle.dataset.settingToggle;
                        siteSettings[key] = !siteSettings[key];
                        applySettings();
                        saveSettings();
                        renderSettings();
                        showToast('Configuração atualizada');
                        return;
                    }

                    const fontStep = event.target.closest('[data-font-step]');
                    if (fontStep) {
                        const nextValue = Math.max(85, Math.min(130, (siteSettings.fontScale || 100) + Number(fontStep.dataset.fontStep)));
                        siteSettings.fontScale = nextValue;
                        applySettings();
                        saveSettings();
                        renderSettings();
                        return;
                    }

                    const fontReset = event.target.closest('[data-font-reset]');
                    if (fontReset) {
                        siteSettings.fontScale = 100;
                        applySettings();
                        saveSettings();
                        renderSettings();
                        return;
                    }

                    const action = event.target.closest('[data-setting-action]');
                    if (!action) return;

                    if (action.dataset.settingAction === 'clearCart') {
                        cartItems = [];
                        saveCart();
                        renderCart();
                        showToast('Carrinho limpo');
                    }

                    if (action.dataset.settingAction === 'clearSessions') {
                        purchaseSessions = [];
                        saveSessions();
                        renderSessions();
                        renderSettings();
                        showToast('Sessões apagadas');
                    }

                    if (action.dataset.settingAction === 'clearAccount') {
                        accountData = {
                            googleEmail: '',
                            profileName: '',
                            pets: []
                        };
                        saveAccount();
                        renderAccount();
                        updateHeroAccountMessage();
                        renderSettings();
                        showToast('Conta removida do navegador');
                    }
                });
            }

            if (accountContent) {
                accountContent.addEventListener('click', function (event) {
                    const removePet = event.target.closest('[data-remove-pet]');
                    if (!removePet) return;

                    accountData.pets = accountData.pets.filter(function (pet) {
                        return String(pet.id) !== removePet.dataset.removePet;
                    });
                    saveAccount();
                    renderAccount();
                    updateHeroAccountMessage();
                    showToast('Pet removido');
                });
            }

            document.addEventListener('click', function (event) {
                const pressable = event.target.closest('.btn, .tab-btn, .btn-newsletter, .nav button, .icon-button, .result-item, .switch');
                if (!pressable) return;

                pressable.classList.remove('button-feedback', 'is-pressing');
                void pressable.offsetWidth;
                pressable.classList.add('button-feedback', 'is-pressing');

                setTimeout(function () {
                    pressable.classList.remove('is-pressing');
                }, 260);
            });

            function saveCart() {
                safeWrite(cartKey, cartItems);
            }

            function saveSessions() {
                safeWrite(sessionsKey, purchaseSessions);
            }

            function formatPrice(value) {
                return Number(value || 0).toLocaleString('pt-BR', {
                    style: 'currency',
                    currency: 'BRL'
                });
            }

            function parsePrice(value) {
                return Number(String(value || '0').replace(/[^\d,.-]/g, '').replace('.', '').replace(',', '.')) || 0;
            }

            function escapeHtml(value) {
                return String(value)
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#039;');
            }

            function getText(parent, selector, fallback) {
                const element = parent.querySelector(selector);
                return element ? element.textContent.trim() : fallback;
            }

            function getAttribute(parent, selector, attribute, fallback) {
                const element = parent.querySelector(selector);
                return element ? element.getAttribute(attribute) || fallback : fallback;
            }

            function getProductsFromDom() {
                if (!grid) return [];

                return Array.from(grid.querySelectorAll('.managed-product-card')).map(function (card) {
                    const deleteLink = card.querySelector('[data-remove-product], a[href*="excluirProduto.php"]');
                    const idMatch = deleteLink && deleteLink.getAttribute('href')
                        ? deleteLink.getAttribute('href').match(/[?&]id=(\d+)/)
                        : null;

                    return {
                        id: card.dataset.managedId || (idMatch ? idMatch[1] : ''),
                        name: getText(card, 'h3', ''),
                        category: getText(card, '.card-badge, p', 'Produto cadastrado'),
                        price: parsePrice(getText(card, '.price, strong', '0')),
                        image: getAttribute(card, 'img.real-image', 'src', ''),
                        description: getText(card, '.product-description', '')
                    };
                }).filter(function (product) {
                    return product.id && product.name;
                });
            }

            function openPanel(panel) {
                [searchPanel, cartPanel, accountPanel, settingsPanel].forEach(function (item) {
                    if (item) item.classList.remove('show');
                });
                if (panel) panel.classList.add('show');
                if (overlay) overlay.classList.add('show');
            }

            function closePanels() {
                [searchPanel, cartPanel, accountPanel, settingsPanel].forEach(function (item) {
                    if (item) item.classList.remove('show');
                });
                if (overlay) overlay.classList.remove('show');
            }

            function getIconForType(type, title) {
                const text = (type + ' ' + title).toLowerCase();
                if (type === 'opcao') return 'icon-settings.svg';
                if (type === 'marca') return 'icon-brand.svg';
                if (type === 'kit') return 'icon-gift.svg';
                if (text.includes('gato') || text.includes('whiskas')) return 'icon-cat.svg';
                if (text.includes('cão') || text.includes('cachorro') || text.includes('pedigree')) return 'icon-dog.svg';
                return 'icon-paw.svg';
            }

            function getCardType(card) {
                if (card.closest('#produtos-caes')) return 'item para cachorro';
                if (card.closest('#produtos-gatos')) return 'item para gato';
                if (card.closest('#produtos-loja')) return 'produto cadastrado';
                if (card.classList.contains('gift-card')) return 'kit';
                return 'produto';
            }

            function getProductFromElement(element) {
                const card = element.closest('.card, .gift-card');
                if (!card) return null;

                const name = getText(card, 'h3', 'Produto');
                const description = getText(card, 'p:not(.price)', 'Item da loja');
                const priceText = getText(card, '.price', 'R$ 0,00');
                const image = getAttribute(card, 'img.real-image', 'src', '');
                const category = getText(card, '.card-badge', getCardType(card));

                return {
                    id: Date.now() + Math.random(),
                    name: name,
                    description: description,
                    price: parsePrice(priceText),
                    image: image,
                    category: category
                };
            }

            function getSearchIndex() {
                customProducts = customProducts.filter(function (product) {
                    return product && product.name;
                });

                const menuItems = [
                    { title: 'Início', type: 'opcao', detail: 'Tela principal do pet shop', page: 'inicio' },
                    { title: 'Produtos', type: 'opcao', detail: 'Vitrine e cadastro de produtos', page: 'produtos' },
                    { title: 'Kits', type: 'opcao', detail: 'Combos e presentes especiais', page: 'kits' },
                    { title: 'Marcas', type: 'opcao', detail: 'Marcas parceiras da loja', page: 'marcas' },
                    { title: 'Contato', type: 'opcao', detail: 'Atendimento e formulário', page: 'contato' }
                ];

                const cardItems = Array.from(document.querySelectorAll('.card, .gift-card')).map(function (card) {
                    const title = getText(card, 'h3', '');
                    const detail = getText(card, 'p:not(.price)', '');
                    const type = getCardType(card);
                    return { title: title, type: type, detail: detail, page: type === 'kit' ? 'kits' : 'produtos' };
                }).filter(function (item) {
                    return item.title;
                });

                const brandItems = Array.from(document.querySelectorAll('.brand-card')).map(function (brand) {
                    return {
                        title: getText(brand, 'strong', brand.textContent.trim()),
                        type: 'marca',
                        detail: getText(brand, 'small', 'Marca parceira'),
                        page: 'marcas'
                    };
                });

                const customItems = customProducts.map(function (product) {
                    return {
                        title: product.name,
                        type: product.category,
                        detail: 'Produto cadastrado na vitrine',
                        page: 'produtos'
                    };
                });

                return menuItems.concat(cardItems, brandItems, customItems);
            }

            function renderSearchResults() {
                if (!searchResults || !searchInput) return;
                const term = searchInput.value.trim().toLowerCase();

                if (!term) {
                    searchResults.innerHTML = '<div class="empty-panel">Digite algo para buscar opções, produtos, kits ou marcas.</div>';
                    return;
                }

                const results = getSearchIndex().filter(function (item) {
                    return (item.title + ' ' + item.type + ' ' + item.detail).toLowerCase().includes(term);
                }).slice(0, 12);

                if (!results.length) {
                    searchResults.innerHTML = '<div class="empty-panel">Nenhum resultado encontrado.</div>';
                    return;
                }

                searchResults.innerHTML = results.map(function (item) {
                    return '<button type="button" class="result-item" data-search-page="' + item.page + '">' +
                        '<span class="result-emoji"><img src="' + getIconForType(item.type, item.title) + '" alt=""></span>' +
                        '<span><strong>' + escapeHtml(item.title) + '</strong><small>' + escapeHtml(item.type) + ' · ' + escapeHtml(item.detail) + '</small></span>' +
                        '<span>→</span>' +
                    '</button>';
                }).join('');
            }

            function renderCart() {
                if (!cartList || !cartTotal || !cartCount) return;
                cartItems = cartItems.filter(function (item) {
                    return item && item.name;
                });

                cartCount.textContent = cartItems.length;
                const total = cartItems.reduce(function (sum, item) {
                    return sum + Number(item.price || 0);
                }, 0);
                cartTotal.textContent = formatPrice(total);

                if (!cartItems.length) {
                    cartList.innerHTML = '<div class="empty-panel">Seu carrinho está vazio. Adicione produtos pela vitrine.</div>';
                    return;
                }

                cartList.innerHTML = cartItems.map(function (item) {
                    const image = item.image
                        ? '<img class="cart-thumb" src="' + escapeHtml(item.image) + '" alt="' + escapeHtml(item.name) + '">'
                        : '<span class="result-emoji"><img src="img/icon-paw.svg" alt=""></span>';

                    return '<div class="cart-item">' +
                        image +
                        '<span><strong>' + escapeHtml(item.name) + '</strong><small>' + escapeHtml(item.category) + ' · ' + formatPrice(item.price) + '</small></span>' +
                        '<button type="button" class="panel-close" data-remove-cart="' + item.id + '">×</button>' +
                    '</div>';
                }).join('');
            }

            function renderSessions() {
                if (!cartSessions) return;
                purchaseSessions = purchaseSessions.filter(function (session) {
                    return session && session.name && Array.isArray(session.items);
                });

                if (!purchaseSessions.length) {
                    cartSessions.innerHTML = '<div class="empty-panel">Nenhuma sessão de compra salva na conta.</div>';
                    return;
                }

                cartSessions.innerHTML = purchaseSessions.map(function (session) {
                    return '<div class="session-item">' +
                        '<span class="result-emoji"><img src="img/icon-account.svg" alt=""></span>' +
                        '<span><strong>' + escapeHtml(session.name) + '</strong><small>' + escapeHtml(session.date) + ' · ' + session.items.length + ' itens · ' + formatPrice(session.total) + '</small></span>' +
                        '<span class="managed-product-actions">' +
                            '<button type="button" class="btn btn-outline btn-small" data-load-session="' + session.id + '">Abrir</button>' +
                            '<button type="button" class="btn btn-small btn-danger" data-delete-session="' + session.id + '">Apagar</button>' +
                        '</span>' +
                    '</div>';
                }).join('');
            }

            function applySettings() {
                document.body.classList.toggle('dark-mode', !!siteSettings.darkMode);
                document.body.classList.toggle('reduced-motion', !!siteSettings.reducedMotion);
                document.body.classList.toggle('compact-layout', !!siteSettings.compactLayout);
                document.body.classList.toggle('high-contrast', !!siteSettings.highContrast);
                document.documentElement.style.fontSize = (siteSettings.fontScale || 100) + '%';
            }

            function getSettingsOptions() {
                return [
                    {
                        key: 'darkMode',
                        title: 'Modo escuro',
                        detail: 'Troca o fundo para escuro e deixa os ícones claros.',
                        type: 'toggle'
                    },
                    {
                        key: 'fontScale',
                        title: 'Tamanho da fonte',
                        detail: 'Aumente ou diminua os textos exibidos no site.',
                        type: 'font'
                    },
                    {
                        key: 'reducedMotion',
                        title: 'Reduzir animações',
                        detail: 'Diminui movimentos para uma navegação mais tranquila.',
                        type: 'toggle'
                    },
                    {
                        key: 'compactLayout',
                        title: 'Layout compacto',
                        detail: 'Reduz espaçamentos em cards e áreas comerciais.',
                        type: 'toggle'
                    },
                    {
                        key: 'highContrast',
                        title: 'Alto contraste',
                        detail: 'Destaca campos, botões e cards importantes para compra.',
                        type: 'toggle'
                    },
                    {
                        key: 'clearCart',
                        title: 'Limpar carrinho',
                        detail: 'Remove todos os produtos adicionados ao carrinho.',
                        type: 'action'
                    },
                    {
                        key: 'clearSessions',
                        title: 'Apagar sessões salvas',
                        detail: 'Remove o histórico de sessões de compra da conta.',
                        type: 'action'
                    },
                    {
                        key: 'clearAccount',
                        title: 'Remover conta cadastrada',
                        detail: 'Apaga o perfil e os pets salvos neste navegador.',
                        type: 'action'
                    }
                ];
            }

            function renderSettings() {
                if (!settingsList) return;
                const term = settingsInput ? settingsInput.value.trim().toLowerCase() : '';
                const options = getSettingsOptions().filter(function (option) {
                    return !term || (option.title + ' ' + option.detail).toLowerCase().includes(term);
                });

                if (!options.length) {
                    settingsList.innerHTML = '<div class="empty-panel">Nenhuma configuração encontrada.</div>';
                    return;
                }

                settingsList.innerHTML = options.map(function (option) {
                    let control = '';

                    if (option.type === 'toggle') {
                        control = '<button type="button" class="switch ' + (siteSettings[option.key] ? 'active' : '') + '" data-setting-toggle="' + option.key + '"><span></span></button>';
                    }

                    if (option.type === 'font') {
                        control = '<div class="setting-actions">' +
                            '<button type="button" class="btn btn-outline btn-small" data-font-step="-10">A-</button>' +
                            '<button type="button" class="btn btn-outline btn-small" data-font-reset>100%</button>' +
                            '<button type="button" class="btn btn-outline btn-small" data-font-step="10">A+</button>' +
                            '<span class="kit-pill">' + (siteSettings.fontScale || 100) + '%</span>' +
                        '</div>';
                    }

                    if (option.type === 'action') {
                        control = '<button type="button" class="btn btn-small btn-danger" data-setting-action="' + option.key + '">Executar</button>';
                    }

                    return '<div class="setting-card">' +
                        '<div class="setting-toggle">' +
                            '<span><strong>' + escapeHtml(option.title) + '</strong><small>' + escapeHtml(option.detail) + '</small></span>' +
                            control +
                        '</div>' +
                    '</div>';
                }).join('');
            }

            function addToCart(product) {
                if (!product) return;
                cartItems.push(product);
                saveCart();
                renderCart();
                showToast('Produto adicionado ao carrinho');
            }
            function getProductImage(product) {
                return String(product.image || '').trim();
            }

            function productBelongsToPet(product, pet) {
                const category = String(product.category || '').toLowerCase();

                if (pet === 'caes') {
                    return category.includes('cachorro') || category.includes('cachorros') || category.includes('cao') || category.includes('caes') || category.includes('cães');
                }

                if (pet === 'gatos') {
                    return category.includes('gato') || category.includes('gatos');
                }

                return false;
            }

            function renderProductCard(product, options) {
                const imagePath = getProductImage(product);
                const image = imagePath
                    ? '<img class="real-image" src="' + escapeHtml(imagePath) + '" alt="' + escapeHtml(product.name) + '">'
                    : '<img class="ui-icon large" src="img/icon-paw.svg" alt=""><small>Sem imagem</small>';
                const removeButton = options && options.showRemove
                    ? '<button type="button" class="btn btn-small btn-danger" data-remove-product="' + product.id + '">Remover</button>'
                    : '';

                return '<div class="card managed-product-card" data-managed-id="' + product.id + '">' +
                    '<div class="card-badge">' + escapeHtml(product.category) + '</div>' +
                    '<div class="card-image placeholder-img">' + image + '</div>' +
                    '<h3>' + escapeHtml(product.name) + '</h3>' +
                    '<p class="product-description">' + escapeHtml(product.description || 'Disponivel na loja Pet & Rabiscos') + '</p>' +
                    '<div class="rating">★★★★★ <span>(novo)</span></div>' +
                    '<p class="price">' + formatPrice(product.price) + '</p>' +
                    '<div class="managed-product-actions">' +
                        '<a href="#" class="btn btn-outline btn-small btn-add-carrinho">Adicionar →</a>' +
                        removeButton +
                    '</div>' +
                '</div>';
            }

            function renderPetProducts(targetGrid, pet, emptyMessage) {
                if (!targetGrid) return;

                const products = customProducts.filter(function (product) {
                    return productBelongsToPet(product, pet);
                });

                targetGrid.innerHTML = products.length
                    ? products.map(function (product) {
                        return renderProductCard(product, { showRemove: false });
                    }).join('')
                    : '<p>' + emptyMessage + '</p>';
            }

            function renderCategoryProducts() {
                renderPetProducts(dogProductsGrid, 'caes', 'Nenhum produto para cães cadastrado ainda. Use a aba Produtos para adicionar itens.');
                renderPetProducts(catProductsGrid, 'gatos', 'Nenhum produto para gatos cadastrado ainda. Use a aba Produtos para adicionar itens.');
            }

            function renderProducts() {
                if (!grid || !count) return;
                customProducts = customProducts.filter(function (product) {
                    return product && product.name;
                });

                count.textContent = customProducts.length + ' produtos';

                if (!customProducts.length) {
                    grid.innerHTML = '<p>Nenhum produto cadastrado ainda. Use o formulario ao lado para montar sua vitrine.</p>';
                    renderCategoryProducts();
                    return;
                }
                grid.innerHTML = customProducts.map(function (product) {
                    return renderProductCard(product, { showRemove: true });
                }).join('');
                renderCategoryProducts();
            }

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    const target = tab.dataset.pet;

                    tabs.forEach(function (button) {
                        button.classList.remove('active');
                    });

                    productPanels.forEach(function (panel) {
                        panel.classList.remove('active-products');
                    });

                    tab.classList.add('active');
                    const panel = document.getElementById('produtos-' + target);
                    if (panel) panel.classList.add('active-products');
                });
            });

            if (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    const name = document.getElementById('product-name').value.trim();
                    const price = document.getElementById('product-price').value;

                    if (!name || !price) return;

                    fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        headers: {
                            Accept: 'application/json',
                            'X-Requested-With': 'fetch'
                        }
                    })
                        .then(function (response) {
                            return response.json().then(function (data) {
                                if (!response.ok || !data.sucesso) {
                                    throw new Error(data.mensagem || 'Falha ao cadastrar produto.');
                                }

                                return data.produto;
                            });
                        })
                        .then(function (product) {
                            customProducts.unshift({
                                id: product.id,
                                name: product.nome,
                                category: product.categoria,
                                price: product.preco,
                                image: product.imagem,
                                description: product.descricao
                            });
                            renderProducts();
                            showToast('Produto salvo no banco');
                            form.reset();
                            document.getElementById('product-name').focus();
                        })
                        .catch(function () {
                            showToast('Nao foi possivel salvar no banco');
                        });
                });
            }

            if (grid) {
                grid.addEventListener('click', function (event) {
                    const removeButton = event.target.closest('[data-remove-product]');
                    if (!removeButton) return;

                    fetch('actions/excluirProduto.php', {
                        method: 'POST',
                        body: new URLSearchParams({ id: removeButton.dataset.removeProduct }),
                        headers: {
                            Accept: 'application/json',
                            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
                            'X-Requested-With': 'fetch'
                        }
                    })
                        .then(function (response) {
                            return response.json().then(function (data) {
                                if (!response.ok || !data.sucesso) {
                                    throw new Error(data.mensagem || 'Falha ao remover produto.');
                                }
                            });
                        })
                        .then(function () {
                            customProducts = customProducts.filter(function (product) {
                                return String(product.id) !== removeButton.dataset.removeProduct;
                            });

                            renderProducts();
                            showToast('Produto removido do banco');
                        })
                        .catch(function () {
                            showToast('Nao foi possivel remover do banco');
                        });
                });
            }

            document.addEventListener('click', function (event) {
                const addButton = event.target.closest('.btn-add-carrinho');
                if (!addButton) return;

                event.preventDefault();
                addToCart(getProductFromElement(addButton));
            });

            document.addEventListener('click', function (event) {
                const kitButton = event.target.closest('.btn-add-kit');
                if (!kitButton) return;

                event.preventDefault();
                addToCart(getProductFromElement(kitButton));
            });

            if (cartList) {
                cartList.addEventListener('click', function (event) {
                    const removeButton = event.target.closest('[data-remove-cart]');
                    if (!removeButton) return;

                    cartItems = cartItems.filter(function (item) {
                        return String(item.id) !== removeButton.dataset.removeCart;
                    });
                    saveCart();
                    renderCart();
                    showToast('Item removido do carrinho');
                });
            }

            if (saveSessionButton) {
                saveSessionButton.addEventListener('click', function () {
                    if (!cartItems.length) {
                        showToast('Adicione itens antes de salvar');
                        return;
                    }

                    const now = new Date();
                    const name = sessionName.value.trim() || 'Sessão de compra';
                    const total = cartItems.reduce(function (sum, item) {
                        return sum + Number(item.price || 0);
                    }, 0);

                    purchaseSessions.unshift({
                        id: Date.now(),
                        name: name,
                        date: now.toLocaleDateString('pt-BR') + ' ' + now.toLocaleTimeString('pt-BR', { hour: '2-digit', minute: '2-digit' }),
                        total: total,
                        items: JSON.parse(JSON.stringify(cartItems))
                    });

                    saveSessions();
                    renderSessions();
                    showToast('Sessão salva na conta');
                    sessionName.value = '';
                });
            }

            if (cartSessions) {
                cartSessions.addEventListener('click', function (event) {
                    const deleteButton = event.target.closest('[data-delete-session]');
                    if (deleteButton) {
                        purchaseSessions = purchaseSessions.filter(function (item) {
                            return String(item.id) !== deleteButton.dataset.deleteSession;
                        });
                        saveSessions();
                        renderSessions();
                        showToast('Sessão apagada da conta');
                        return;
                    }

                    const loadButton = event.target.closest('[data-load-session]');
                    if (!loadButton) return;

                    const session = purchaseSessions.find(function (item) {
                        return String(item.id) === loadButton.dataset.loadSession;
                    });
                    if (!session) return;

                    cartItems = session.items.slice();
                    saveCart();
                    renderCart();
                    showToast('Sessão carregada no carrinho');
                });
            }

            document.addEventListener('click', function (event) {
                const contactButton = event.target.closest('.contact-form .btn');
                if (!contactButton) return;

                showToast('Mensagem pronta para envio');
            });

            renderProducts();
            renderCart();
            renderSessions();
            applySettings();
            renderSettings();
            normalizeAccount();
            renderAccount();
            updateHeroAccountMessage();
            setPage((location.hash || '#inicio').replace('#', '') || 'inicio');
        } catch (error) {
            console.error('Erro ao iniciar Pet & Rabiscos:', error);
        }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', startPetRabiscos);
        } else {
            startPetRabiscos();
        }
        })();
    </script>
</body>
</html>

