<style>
    .body{ background-color: {{  $page->body_bg_color  }} ; }
    *{
        font-family:  {{  $page->page_font  }} ;
    }
    .navbar-brand{
        color: {{  $page->topbar_text_color  }} ;
    }
    .navbar {
        background-color: {{  $page->topbar_bg_color  }} ;
    }
    .nav-link, .fa-bars {
        color: {{  $page->topbar_text_color  }} ;
    }
    .navbar-toggler{
        border-color: {{  $page->topbar_text_color  }};
    }
    .mbar{
        background-color: {{  $page->mbar_bg_color  }} ;
        color: {{  $page->mbar_text_color  }} ;
        height: 250px;
    }
    .banner-image{
        height: 350px;
    }
    .btn-back-to-top-page {
        display: none;
        position: fixed;
        width: 40px;
        height: 40px;
        bottom: 40px;
        right: 40px;
        background-color: {{  $page->back_to_top_bg_color  }} ;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        border-radius: 25px;
        transition: all .4s;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .3s
    }

    .symbol-btn-back-to-top-page {
        font-size: 22px;
        color: {{  $page->back_to_top_color  }} ;
        line-height: 1em
    }
    .btn-back-to-top-page:hover {
        cursor: pointer;
    }

    .page-footer{
        color: {{  $page->footer_text_color  }} ;
        background-color: {{  $page->footer_bg_color  }} ;
    }
    .footer-link, .social-btn{
        color: {{  $page->footer_text_color  }} ;
    }




    .page-btn{
        background: {{  $page->btn_bg_color  }}; 
        color: {{  $page->btn_text_color  }}; 
    }
    .card{
        background: {{  $page->card_bg_color  }}; 
        color: {{  $page->card_text_color  }}; 
    }
    .mbar-logo{
        width: 145px;
        height: 145px;
    }
    .object-fit-cover{object-fit: cover}
</style>

@if($page->btn_style == 'rounded')
    <style>
        .page-btn{
            border-radius: 25px;
        }
    </style>
@endif

@if(!$page->scrollbar_default)
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background:{{  $page->scrollbar_trak_color  }}; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background:{{  $page->scrollbar_handle_color  }}; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: {{  $page->scrollbar_hover_color  }}; 
        }
    </style>
@endif