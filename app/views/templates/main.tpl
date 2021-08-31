<!doctype html>
<html lang="pl">
    <head>
        <title>{$page_title|default:"Tytuł domyślny"}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>

<header id="header">
    <nav>
        {block name=header}  {/block}    
    </nav>
</header>
    
    
    <body class="is-preload">
        <div id="page-wrapper">


            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2>{$page_title|default:"Tytuł domyślny"}</h2>
                        <p>{$page_description|default:"Opis domyślny"}</p>
                    </header>
                </div>



                <div class="content-wrapper">

                    <div id="app_content" class="content">

                        {block name=content} Domyślna treść zawartości .... {/block}

                    </div>

                       
                    <footer id="footer">
                        {block name=footer} Domyślna treść stopki .... {/block}    
                    </footer>

                </div>

            </div>
    </body>
</html>

